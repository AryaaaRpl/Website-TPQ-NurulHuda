<?php
namespace App\Http\Controllers;
use App\Models\Applicant;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
class AdminWebController {
 private const TYPES=['gallery'=>'Galeri','extracurricular'=>'Ekstrakurikuler','facility'=>'Fasilitas'];
 public function logout(Request $r){Auth::guard('web')->logout();$r->session()->invalidate();$r->session()->regenerateToken();return redirect('/');}
 public function dashboard(){return view('admin.dashboard',['admin'=>Auth::user(),'contentCount'=>Content::count(),'applicantCount'=>Applicant::count(),'newCount'=>Applicant::where('status','new')->count()]);}
 public function contents(string $type){$this->type($type);return view('admin.contents',['type'=>$type,'label'=>self::TYPES[$type],'items'=>Content::where('type',$type)->orderBy('sort_order')->latest()->get()]);}
 public function createContent(string $type){$this->type($type);return view('admin.content-form',['type'=>$type,'label'=>self::TYPES[$type],'item'=>new Content]);}
 public function storeContent(Request $r,string $type){$this->type($type);Content::create($this->data($r,$type));return redirect()->route('admin.contents',$type)->with('success','Data berhasil ditambahkan.');}
 public function editContent(string $type,Content $content){$this->owns($type,$content);return view('admin.content-form',['type'=>$type,'label'=>self::TYPES[$type],'item'=>$content]);}
 public function updateContent(Request $r,string $type,Content $content){$this->owns($type,$content);$content->update($this->data($r,$type));return redirect()->route('admin.contents',$type)->with('success','Data berhasil diperbarui.');}
 public function deleteContent(string $type,Content $content){$this->owns($type,$content);if($content->image_url && !str_starts_with($content->image_url,'http')){Storage::disk('public')->delete(str_replace('/storage/','',$content->image_url));}$content->delete();return back()->with('success','Data dihapus.');}
 public function applicants(Request $r){$q=Applicant::query();if($r->search)$q->where(fn($x)=>$x->where('name','like','%'.$r->search.'%')->orWhere('registration_number','like','%'.$r->search.'%'));return view('admin.applicants',['applicants'=>$q->latest()->paginate(20)->withQueryString()]);}
 public function applicantStatus(Request $r,Applicant $applicant){$r->validate(['status'=>['required',Rule::in(['new','verified','accepted','rejected'])]]);$applicant->update(['status'=>$r->status]);return back()->with('success','Status pendaftar diperbarui.');}
 public function export(){return app(ApplicantController::class)->export();}
 private function type(string $type):void{abort_unless(array_key_exists($type,self::TYPES),404);}
 private function owns(string $type,Content $c):void{$this->type($type);abort_unless($c->type===$type,404);}
 private function data(Request $r,string $type):array{
  $d=$r->validate(['title'=>['required','string','max:160'],'description'=>['nullable','string','max:2000'],'image'=>['nullable','image','mimes:jpeg,png,jpg,webp','max:5120'],'remove_image'=>['nullable','boolean'],'status'=>['required',Rule::in(['draft','published'])],'sort_order'=>['nullable','integer','min:0']]);
  unset($d['remove_image']);
  if($r->hasFile('image')){
   if($r->has('_image_old') && $r->input('_image_old') && !str_starts_with($r->input('_image_old'),'http')){Storage::disk('public')->delete(str_replace('/storage/','',$r->input('_image_old')));}
   $d['image_url']='/storage/'.$r->file('image')->store('contents',['disk'=>'public']);
  }elseif($r->boolean('remove_image')){
   if($r->input('_image_old') && !str_starts_with($r->input('_image_old'),'http')){Storage::disk('public')->delete(str_replace('/storage/','',$r->input('_image_old')));}
   $d['image_url']=null;
  }
  return array_merge($d,['type'=>$type]);
 }
}

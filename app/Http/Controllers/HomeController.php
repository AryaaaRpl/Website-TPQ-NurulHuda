<?php
namespace App\Http\Controllers;
use App\Models\Applicant;
use App\Models\Content;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HomeController {
  public function index() { $items=Content::where('status','published')->orderBy('sort_order')->get()->groupBy('type'); return view('home',['gallery'=>$items->get('gallery',collect()),'extras'=>$items->get('extracurricular',collect()),'facilities'=>$items->get('facility',collect()),'testimonials'=>Testimonial::where('status','published')->orderBy('sort_order')->get()]); }
 public function fasilitas() { $facilities=Content::where('type','facility')->where('status','published')->orderBy('sort_order')->get(); return view('fasilitas',['facilities'=>$facilities]); }
 public function ekskul() { $extras=Content::where('type','extracurricular')->where('status','published')->orderBy('sort_order')->get(); return view('ekskul',['extras'=>$extras]); }
  public function testimonialDetail(Testimonial $testimonial) {
    abort_unless($testimonial->status === 'published', 404);
    $others = Testimonial::where('status', 'published')
      ->where('id', '!=', $testimonial->id)
      ->orderBy('sort_order')
      ->take(3)
      ->get();
    return view('testimonial-detail', [
      'testimonial' => $testimonial,
      'others' => $others,
    ]);
  }
  public function register(Request $request) {
  if ($request->isMethod('post')) {
   $data=$request->validate([
    'name'=>['required','string','max:160'],
    'parent_name'=>['required','string','max:160'],
    'phone'=>['required','string','max:30'],
    'age'=>['required','integer','between:3,18'],
    'program'=>['required','in:jilid,tahfidz'],
    'birth_certificate'=>['nullable','file','mimes:jpg,jpeg,png,pdf','max:2048'],
    'family_card'=>['nullable','file','mimes:jpg,jpeg,png,pdf','max:2048'],
    'photo'=>['nullable','file','mimes:jpg,jpeg,png','max:2048'],
   ]);
   $data['registration_number']='PPDB-'.now()->format('ymd').'-'.strtoupper(Str::random(4));
   foreach (['birth_certificate','family_card','photo'] as $field) {
    if ($request->hasFile($field)) {
     $data[$field] = '/storage/' . $request->file($field)->store('ppdb/'.$data['registration_number'], 'public');
    }
   }
   $a=Applicant::create($data);
   return back()->with('registration_success',"Pendaftaran berhasil dikirim. Nomor pendaftaran: {$a->registration_number}");
  }
  $facilities=Content::where('type','facility')->where('status','published')->orderBy('sort_order')->get()->take(3);
  return view('ppdb',['facilities'=>$facilities]);
 }
}

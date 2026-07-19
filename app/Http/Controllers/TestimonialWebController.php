<?php
namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TestimonialWebController
{
    public function index()
    {
        return view('admin.testimonials', [
            'items' => Testimonial::orderBy('sort_order')->latest()->get(),
        ]);
    }

    public function create()
    {
        return view('admin.testimonial-form', ['item' => new Testimonial]);
    }

    public function store(Request $r)
    {
        $data = $r->validate([
            'name' => ['required', 'string', 'max:100'],
            'role' => ['nullable', 'string', 'max:200'],
            'content' => ['required', 'string', 'max:2000'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'avatar_letter' => ['nullable', 'string', 'max:2'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
        Testimonial::create($data);
        return redirect()->route('admin.testimonials')->with('success', 'Yeay!Testimoni berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial-form', ['item' => $testimonial]);
    }

    public function update(Request $r, Testimonial $testimonial)
    {
        $data = $r->validate([
            'name' => ['required', 'string', 'max:100'],
            'role' => ['nullable', 'string', 'max:200'],
            'content' => ['required', 'string', 'max:2000'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'avatar_letter' => ['nullable', 'string', 'max:2'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
        $testimonial->update($data);
        return redirect()->route('admin.testimonials')->with('success', 'Yeay! Testimoni berhasil diperbarui.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success', 'Yeay! Testimoni berhasil dihapus.');
    }
}

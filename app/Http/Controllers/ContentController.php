<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContentController extends Controller
{
    private const TYPES = ['gallery', 'extracurricular', 'facility'];

    public function index(string $type)
    {
        abort_unless(in_array($type, self::TYPES, true), 404);
        return Content::query()->where('type', $type)->where('status', 'published')->orderBy('sort_order')->latest()->get();
    }

    public function store(Request $request)
    {
        return response()->json(Content::create($this->validated($request)), 201);
    }

    public function update(Request $request, Content $content)
    {
        $content->update($this->validated($request));
        return $content->fresh();
    }

    public function destroy(Content $content)
    {
        $content->delete();
        return response()->noContent();
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'type' => ['required', Rule::in(self::TYPES)],
            'title' => ['required', 'string', 'max:160'],
            'description' => ['nullable', 'string', 'max:2000'],
            'image_url' => ['nullable', 'url', 'max:2048'],
            'metadata' => ['nullable', 'array'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }
}

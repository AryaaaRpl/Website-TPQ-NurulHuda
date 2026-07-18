<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['type', 'title', 'description', 'image_url', 'metadata', 'status', 'sort_order'];
    protected function casts(): array { return ['metadata' => 'array']; }
}

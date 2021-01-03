<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['description'];

    protected $appends = ['blog_image'];

    public function getBlogImageAttribute()
    {
        if ($file = $this->getFirstMedia('blog_image')) {
            return array_merge(
                $file->toArray(),
                ['size' => $file->human_readable_size, 'original' => $file->getFullUrl()]
            );
        }
        return null;
    }
}

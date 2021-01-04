<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = ['description','header'];

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

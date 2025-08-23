<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;

class Video_view extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'header',
        'description_video',
        'duration_video',
        'link',
        'type', // 0 = youtube - 1 = tiktok - 2 = instagram - 3 = facebook - 4 = twitter - 5 = other
        'status',

    ];

    public function registerMediaCollections(Media $media = null): void
    {
        $this->addMediaCollection('video_view')
        ->singleFile();

        // $this->addMediaConversion('thumb')
        // ->crop('crop-center', 100, 100);
    }


}

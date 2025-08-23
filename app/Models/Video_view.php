<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video_view extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'header',
        'description_video',
        'phone',
        'email',
        'password',
        'is_active',
        'role_id',
        'type',
        'token',
    ];

    public function registerMediaCollections(Media $media = null): void
    {
        $this->addMediaCollection('profile')
        ->singleFile();

        // $this->addMediaConversion('thumb')
        // ->crop('crop-center', 100, 100);
    }


}

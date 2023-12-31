<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use MoonShine\Models\MoonshineUser;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Perkins extends Model  implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    protected $fillable = [
        'title',
        'slug',
        'sky',
        'img',
        'description',
        'shortdescription',
        'price',
        'user_id',
        'analogs',
        'sorting',
    ];


    protected $casts = [
        'params',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)
            ->withTimestamps();

    }


    public function author(): BelongsTo
    {
        return $this->belongsTo(MoonshineUser::class, 'user_id', 'id');
    }


    public function cat(): belongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery');
    }

    public function registerAllMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width('200')
            ->height('200');
    }
}

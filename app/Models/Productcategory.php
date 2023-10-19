<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Productcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'img',
        'slug',
        'description',
        'sorting',
    ];

    protected $casts = [
        'params'
    ];


}

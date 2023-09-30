<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public static function getProjectsWithTag($tag)
    {
        return self::whereHas('tags', function ($query) use ($tag) {
            $query->where('name', '=', $tag);
        })->get();
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'post_as'
    ];

    protected static function boot(){
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail'))){
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }

        });
    }
}

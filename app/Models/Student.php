<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;


class Student extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'section_id',
        'class_id',
        'name',
        'email',
        'phone'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}

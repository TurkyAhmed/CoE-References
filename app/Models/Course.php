<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id','teacher_id','level_id'];


    public function references(){
        return $this->hasMany(Reference::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function level(){
        return $this->belongsTo(Level::class);
    }
}

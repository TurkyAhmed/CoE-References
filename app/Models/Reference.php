<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reference extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['course_id','name','type_of_reference'];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}

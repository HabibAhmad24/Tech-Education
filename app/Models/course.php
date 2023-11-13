<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = ['id','title','price','created_at','updated_at'];


    public function courseDetails()
    {
        return $this->belongsTo(course_detail::class, 'course_details_id', 'id');
    }

}

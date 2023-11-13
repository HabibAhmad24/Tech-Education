<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityExpert extends Model
{
    use HasFactory;
    protected $table = 'community_experts';
    protected $fillable = ['id','name','facebook','linkedin','x'];
}

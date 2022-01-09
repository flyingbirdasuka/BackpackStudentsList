<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

     protected $fillable = [
     	'id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'lesson_id',
    ];

    public function lesson(){
    	return $this->belongsTo('App\Models\Lesson');
    }
}

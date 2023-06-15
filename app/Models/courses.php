<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
protected $fillable =[

    'CourseName',
     'image',
     'description',
     'Date'
];
public  function   coursesModel(){
return $this-> hasMany(coursesModel::class);
}
}

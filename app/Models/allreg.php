<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allreg extends Model
{
    use HasFactory;
protected $table="allreg";

    protected $fillable =[

        'Name',
         'NationalID',
         'email',
         'country',
         'phone',
         'address',
         'statuse',
         'kkuID',
         'course_id'

    ];

    public  function courses(){
 return $this->  belongsTo(courses::class);
    }
}

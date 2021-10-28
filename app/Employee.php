<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded=[];

   public function attendances()
   {
   	 return $this->hasMany(Attendance::class);
   }
}

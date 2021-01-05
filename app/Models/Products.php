<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

  
   
   protected $guarded=[];

     
      public function Sections()
     {
         return $this->belongsTo(Sections::class,'section_id');
     }

}

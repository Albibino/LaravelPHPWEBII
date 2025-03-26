<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMC extends Model
{
   public static function calculate($weight, $height)
   {
       if ($height > 0) {
           return $weight / ($height * $height);
       }
       return 0;
   }
}

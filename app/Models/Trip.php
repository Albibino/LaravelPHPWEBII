<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{    public static function calculate($distance, $price, $consumption)
    {
        if ($consumption > 0) {
            return ($distance / $consumption) * $price;
        }
        return 0;
    }
}

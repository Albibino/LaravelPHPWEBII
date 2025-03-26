<?php

namespace App\Models;

class Sleep
{
    public static function evaluate($sleepTime, $wakeTime)
    {
        $sleep = strtotime($sleepTime);
        $wake = strtotime($wakeTime);

        if ($wake <= $sleep) {
            $wake += 86400;
        }

        $hours = ($wake - $sleep) / 3600;

        if ($hours < 7) {
            $evaluation = "Sono Insuficiente";
        } elseif ($hours <= 9) {
            $evaluation = "Sono Adequado";
        } else {
            $evaluation = "Sono Excessivo";
        }

        return ['hours' => $hours, 'evaluation' => $evaluation];
    }
}
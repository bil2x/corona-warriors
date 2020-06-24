<?php

namespace App\Models;

class Project
{
    public static function all()
    {
        return $project = [
            '1st' => 'first Project',
            '2nd' => '2nd Project'
        ];
    }
}

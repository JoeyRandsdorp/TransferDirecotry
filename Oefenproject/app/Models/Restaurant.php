<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Restaurant extends Model {
    //protected $table = 'restaurants';           dit is om conflicts op te lossen als de naam van je table anders is dan die van je model

    protected $fillable = ['name','experience'];  //dit is om te beschermen tegen ongewenste mass assignment, een stukje beveiliging, deze code zorgt ervoor dat alleen veld "name" en "experience" ge-mass assigned mogen worden

//    public static function all():array
//    {
//        return [
//            [
//                'id' => 1,
//                'name' => 'Happy Italy',
//                'experience' => 7.5
//            ],
//            [
//                'id' => 2,
//                'name' => 'Mr.Moose',
//                'experience' => 9
//            ],
//            [
//                'id' => 3,
//                'name' => 'Huiskamer',
//                'experience' => 4
//            ],
//            [
//                'id' => 4,
//                'name' => 'Ned Kellys',
//                'experience' => 6
//            ],
//            [
//                'id' => 5,
//                'name' => 'Belgique',
//                'experience' => 7
//            ]
//        ];
//    }
//    public static function find(int $id): ?array
//    {
//        return Arr::first(static::all(), fn ($restaurant) => $restaurant['id'] === $id);
//    }

}


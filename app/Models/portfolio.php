<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;
    public static function img (){
        $data =[
            'assets/img/portfolio/cabin.png',
            'assets/img/portfolio/cake.png',
            'assets/img/portfolio/circus.png',
            'assets/img/portfolio/game.png',
            'assets/img/portfolio/safe.png',
            'assets/img/portfolio/submarine.png'
        ];
       
        return $data;
    }
    public static function modal (){
        $data =[
            'assets/img/portfolio/cabin.png',
            'assets/img/portfolio/cake.png',
            'assets/img/portfolio/circus.png',
            'assets/img/portfolio/game.png',
            'assets/img/portfolio/safe.png',
            'assets/img/portfolio/submarine.png'
        ];
    }
}

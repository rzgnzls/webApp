<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainModel extends Model
{
    use HasFactory;
    
    public static function Infos() {
        $datas= [
            'webName' => 'Nerds Website', 
            'Name'=>'Raiza Jan D. Gonzales'
        ];
        return $datas;
    }
}

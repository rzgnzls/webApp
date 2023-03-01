<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainModel;
use App\Models\portfolio;

class MainController extends Controller
{

    public function SendData() {
       
        $img = new portfolio;
        return view ('Section.sectionIndex',['datas'=> MainModel::Infos()])
        -> with('img', $img -> img());
        
    }

    }


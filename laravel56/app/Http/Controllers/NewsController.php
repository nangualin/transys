<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;

class NewsController extends Controller
{
    //


    public function newsIndex(){
        $aData = news::select()->orderby("iAutoID","desc")->limit(20)->get()->toArray();
        return view('hplus.search_results',array("aData"=>$aData));
    }
}

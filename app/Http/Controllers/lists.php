<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class lists extends Controller
{
    public function save(request $req){
    
        $new=new todolist();
        $new->title=$req->title;
        $new->desc=$req->desc;
        if ($new->save()){
            return "success";
        }
        else {
            return "failed";
        }
}
public function index(){
    $data=todolist::all();
    return  $data;
    
}  


}

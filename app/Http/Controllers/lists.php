<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class lists extends Controller
{
    public function save(request $req){
    
        $data=todolist::all();
        $new=new todolist();
        $new->title=$req->title;
        $new->desc=$req->desc;
        if ($new->save()){
            return view("/welcome");
        }
        else {
            return "failed";
        }
}
public function index(){
    $data=todolist::all();
    return  view('table',['data'=>$data]);
    
}  
public function edit($id){
    $data=todolist::find($id);
    return view('welcome',['data'=>$data]);
}
public function update(request $req){

$update=todolist::find($req->id);
$update->title=$req->title;
$update->desc=$req->desc;
if($update->save()){
    return redirect("/table");
}
else{
    return "failed";
}
}

}

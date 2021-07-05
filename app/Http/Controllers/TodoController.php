<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public function getHome(){
        $list=Todo::all();
        
        return view('home',['list'=>$list]);
    }
    public function postAdd(Request $request){
        echo $request->work;
        $todo=new Todo;
        $todo->todo=$request->work;
        echo $todo->todo;
        $todo->save();
        return redirect('/');
    }
    public function postDelete(Request $request){
        echo $request->id;
        $todo=Todo::find($request->id);
        $todo->delete();
        return redirect('/');
    }
    public function postEdit(Request $request){
        echo $request->id;
        $todo=Todo::find($request->id);
        $todo->todo=$request->rework;
        $todo->save();
        return redirect('/');
    }
}

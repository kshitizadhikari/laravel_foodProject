<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuM;

class MenuController extends Controller
{
    public function index()
    {
        return view('welcome', ['all' => MenuM::all()]);
    }

    public function store(Request $request)
    {
        $foodObj = new MenuM();
        $foodObj->Food_ID = $request->food_id;
        $foodObj->Name = $request->name;
        $foodObj->Category = $request->category;
        $foodObj->Price = $request->price;
        $foodObj->Date = $request->date;
        $foodObj->Description = $request->description;

        $foodObj->save();
        return redirect('/');
    }
   
    public function edit($id)
    {
        $foodObj = MenuM::find($id);
        return view('editPage', ['item' => $foodObj]);
    }
    
    public function update(Request $request)
    {
        $foodObj =  MenuM::find($request->id);
        $foodObj->Food_ID = $request->food_id;
        $foodObj->Name = $request->name;
        $foodObj->Category = $request->category;
        $foodObj->Price = $request->price;
        $foodObj->Date = $request->date;
        $foodObj->Description = $request->description;

        $foodObj->save();
        return redirect('/');
    }
    
    public function delete($id)
    {
        $foodObj = MenuM::find($id);
        $foodObj->delete();
        return redirect('/');
    }
    
}
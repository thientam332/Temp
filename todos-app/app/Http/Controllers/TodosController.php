<?php

namespace App\Http\Controllers;

use App\Models\TodosList;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(Request $request)
    {
        return view('te');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required|min=6|max=100'
        ]);
        $data=$request->all();
        // $todo=new TodosList();
        // $todo->name=$data['name'];
        // $todo->description=$data['description'];
        // $todo->save();
        return redirect('/todos');
    }
}

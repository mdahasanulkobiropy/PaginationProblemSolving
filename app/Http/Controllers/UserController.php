<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $page = $request->query('page', 1);
        $users = User::paginate(2);
        return view('index',compact('users','page'));
    }

    public function edit($id,$page){
        $pageNum = $page;
        $user = User::find($id);
        return view('edit',compact('user','pageNum'));
    }

    public function update(Request $request, $id){

        $currentPage = $request->get('page',$request->page);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('user.index', ['page' => $currentPage]);
    }

    public function delete($id){
        $user = User::find($id)->delete();
        return back();
    }
}

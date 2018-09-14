<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

      $users =[
        'Nelson', 'javier', 'pedro', 'jose', 'alex', 'mario',
      ];

      // return view('users',[
      //   'users' =>$users,
      //   'title'=>'listado de usuarios'
      //   ]) ;

      return view('users.users')
            ->with('users',$users)
            ->with('title','Listado de usuraios');
    }

    public function showUser($id){
      return view('users.details', compact('id'));
    }

    public function createUser(){
      return 'Crear Nuevo usuario';
    }
}

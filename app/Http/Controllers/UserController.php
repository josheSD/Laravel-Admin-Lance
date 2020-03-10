<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dataTables(){
        return datatables()
            ->eloquent(\App\User::query())
            ->toJson();
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PostController extends Controller
{
    public function dataTables(){

        /*
         $posts = DB::table('posts')->join('users','posts.user_id','=','users.id')
                ->select(['posts.id','posts.title','posts.content','users.name','users.email'])
                ->where('users.id','=', auth()->user()->id);
        */
        $posts = Post::with('users','users.id', '=', auth()->user()->id)
                ->select(['posts.id','posts.title','posts.content','users.name','users.email']);

        return DataTables::of($posts)->make(true);

    }

}

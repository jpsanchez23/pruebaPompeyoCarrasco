<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use Auth;

class PostController extends Controller
{

    public function index($type = 1)
    {
        $user_id = Auth::user()->id;


        if($type == 1){
            $posts = Post::where('user_id', $user_id)->get();

        }else{
            $posts = Post::where('user_id', '!=', $user_id)->get();
        }

        foreach($posts as $post){
            $post->action = '/publicaciones/' . $post->id . '/comentarios';
            $post->textButton = ($type == 1) ? 'Ver Comentarios' : 'Comentar' ;

            $user = User::find($post->user_id);

            $post->creator = $user->name;
        }

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $validaPublicacion = Post::where('user_id', $user_id)->get();

        if( count($validaPublicacion) >= 20){
            $data = (object)[];
            $data->title = 'Máxima cantidad de publicaciones alcanzada';
            $data->comment = 'Se ha alcanzado la máxima cantidad permitida de publicaciones por autor';
            return view('max-items', compact('data'));
        }

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $user_id;
        
        $post->save();
        
        return redirect()->route('posts.index');
    }
}

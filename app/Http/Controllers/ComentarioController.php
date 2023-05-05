<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comentario;
use App\Models\User;
use App\Models\Post;
use Auth;

class ComentarioController extends Controller
{
    public function index($id)
    {
        $publicacion = Post::findOrFail($id);
        return view('comentarios.index', ['publicacion' => $publicacion]);
    }

    public function store(Request $request, $id)
    {

        $validaComentario = Comentario::where('post_id', $id)->get();

        if( count($validaComentario) >= 10){
            $data = (object)[];
            $data->title = 'Máxima cantidad de comentarios alcanzada';
            $data->comment = 'Se ha alcanzado la máxima cantidad permitida de comentarios por publicación';
            return view('max-items', compact('data'));
        }

        $request->validate([
            'texto' => 'required|min:5',
        ]);

        $user_id = Auth::user()->id;

        $comentario = new Comentario;
        $comentario->text = $request->texto;
        $comentario->post_id = $id;
        $comentario->user_id = $user_id;
        $comentario->save();

        return redirect('/publicaciones/' . $id . '/comentarios');
    }
}

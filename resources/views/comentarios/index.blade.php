<div>
    <div>
        <h1>Publicación: {{ $publicacion->title }}</h1>
    </div>

    <div>
        <p>Texto publicación: {{ $publicacion->content }}</p>
    </div>

    <div>
        <h2>Comentarios</h2>
        <ul>
            @foreach ($publicacion->comentarios as $comentario)
                <li>{{ $comentario->text }} - {{ $comentario->created_at }}</li>
            @endforeach
        </ul>
    </div>

    <div>
        <h3>Agregar comentario</h3>
        <form method="POST" action="/publicaciones/{{ $publicacion->id }}/comentarios">
            @csrf
            <textarea name="texto"></textarea>
            <button type="submit">Comentar</button>
        </form>
    </div>
</div>

<div>
    <a href="/home"><input type="button" value="Volver al home"></a>
</div>









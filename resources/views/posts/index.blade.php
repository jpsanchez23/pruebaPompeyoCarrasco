<table style="margin-bottom: 20px;">
    <thead>
        <tr>
            <th style="margin-left: 5px; margin-right: 5px;">Título</th>
            <th style="margin-left: 5px; margin-right: 5px;">Contenido</th>
            <th style="margin-left: 5px; margin-right: 5px;">Fecha de creación</th>
            <th style="margin-left: 5px; margin-right: 5px;">Creador</th>
            <th style="margin-left: 5px; margin-right: 5px;">Comentarios</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td style="margin-left: 5px; margin-right: 5px;">{{ $post->title }}</td>
                <td style="margin-left: 5px; margin-right: 5px;">{{ $post->content }}</td>
                <td style="margin-left: 5px; margin-right: 5px;">{{ $post->created_at }}</td>
                <td style="margin-left: 5px; margin-right: 5px;">{{ $post->creator }}</td>
                <td style="margin-left: 5px; margin-right: 5px;"><a href="{{ $post->action }}"><input type="button" value="{{ $post->textButton }}"></a></td>
            </tr>
        @endforeach
    </tbody>
    
</table>

<div>
    <a href="/home"><input type="button" value="Volver al home"></a>
</div>
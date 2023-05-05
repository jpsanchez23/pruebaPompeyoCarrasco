<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    
    <div style="max-width: 100px; ">

        <div style="margin-top: 10px;">
            <label for="title">Título</label>
            <input type="text" name="title" id="title">
        </div>
        
        <div style="margin-top: 10px;">
            <label for="content">Contenido</label>
            <textarea name="content" id="content" rows="10"></textarea>
        </div>
        
        <div style="margin-top: 10px;">
            <button type="submit">Crear Post</button>
        </div>
    </div>
</form>

<div>
    <a href="/home"><input type="button" value="Volver al home"></a>
</div>

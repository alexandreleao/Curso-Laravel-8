@if($errors->any())
    <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
    </ul>
@endif
@csrf
<input type="file" name="image"id="image">
<label>Título</label>
<input type="text" name="title" id="title" placeholder="Título" value="{{ $post->title ?? old('title')}}">
<label>Conteúdo</label>
<textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo">{{ $post->content ?? old('content')}}</textarea>
<button type="submit">Enviar</button>
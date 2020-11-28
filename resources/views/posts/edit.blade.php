@extends('layouts.app')
@section('content')

    <form action="{{route('posts.update',['post' => $post->id])}}" method="post">
            @csrf
            @method("PUT")
            
        <div class= "form-group">
            <label for="">Titulo</label>
            <input type="text" name="title" class=" form-control" value="{{$post->title}}">
        </div>
        <div class ="form-group">
            <label for="">Descriçao</label>
            <input type="text" name="Description" class="form-control" value="{{$post->Description}}">
        </div>
        <div class="form-group">
                <label for="">conteudo</label>
                <textarea name="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
        </div>
        <div class="form-group">
                <label for="">Slug</label>
                <input type ="text" name="slug" class="form-control" value="{{$post->slug}}">
         </div>
         <hr>
        <div class ="form-group">
            <label for="">Categorias</label>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-4 checkbox">
                        <label>
                            <input type ="checkbox" name="categories[]" value="{{$category->id}}"
                            @if($post->categories->contains($category))
                                checked
                            @endif>
                            {{$category->name}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <hr>
                <button class="btn btn-lg btn-success">Atualizar</button>

    </form>

    <hr>
    <Form action="{{route('posts.destroy',['post'=> $post->id])}}" method="post">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-lg btn-danger">Remover</button> 
    </Form>

 @endsection
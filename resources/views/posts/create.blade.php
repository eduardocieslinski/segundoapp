@extends('layouts.app')
@section('content')

    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
        <div class="form-grop">
            <label>Titulo</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}">
        </div>
        <div class="form-grop">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control" value="{{old('text')}}">
        </div>
        <div class="form-grop">
            <label>Conteúdo</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control">{{old('content')}}</textarea>
        </div>
        <div class="form-grop">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{old('slug')}}">
        </div>
        <hr>
        <div class ="form-group">
            <label for="">Categorias</label>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-4 checkbox">
                        <label>
                            <input type ="checkbox" name="categories[]" value="{{$category->id}}">
                            {{$category->name}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <hr>
        <button class="btn btn-lg btn-success">Postar</button>
    </form>


@endsection



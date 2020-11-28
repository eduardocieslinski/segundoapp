@extends('layouts.app')
@section('content')
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="description" class="form-control" value="{{old('description')}}">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{old('slug')}}">
        </div>
        <button class="btn btn-lg btn-success">Criar Categoria</button>
    </form>
@endsection

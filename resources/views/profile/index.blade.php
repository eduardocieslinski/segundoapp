@extends('layouts.app')
@section('content')
    <Form action="{{route('profile.update)}}" method="POST">
    @csrf
    <div class ="form-group">
        <label for="">Nome</label>
        <input type="text" name="user[name]" class="form-control" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="">E-Mail</label>
            <input type="text" name="user[email]" class="form-control" value="{{$user->email}}">
            </div>
        <div class="form-group">
            <label for="">Senha</label>
            <input type="password" name="user[password]" class="form-control" placeholder="Atualizar Senha">
            </div>
        <div class="form-group">
        <label for="">Sobre</label>
        <textarea name="profile[about]" cols="30" rows="10" class="form-control">{{$user->profile->about}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Facebook</label>
            <input type="url" name="profile[facebook_link]" class="form-control" value="{{$user->profile->facebook_link}}">
            </div>
        <div class="form-group">
        <label for="">Instagram</label>
            <input type="url" name="profile[instagram_link]" class="form-control" value="{{$user->profile->instagram_link}}">
            </div>
        <div class="form-group">
        <label for="">Site</label>
        <input type="url" name="profile[site_link]" class="form-control" value="{{$user->profile->site_link}}">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-sucess">Atualizar meu perfil</button>
            </div>
    </form>
@endsection
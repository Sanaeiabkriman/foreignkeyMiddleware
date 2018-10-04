@extends('layouts.app')

@section('content')

<form action="/admin/users/update/{{$mod->id}}" method="post">
    @csrf
    <div class="container ">
        <div class="container">

            <div class="text-center m-2">
                <p class="bg-light mb-1">Nom utilisateur</p>
                <input type="text" class="form-control" name="name" value="{{$mod->name}}">
                <br>
                <p class="bg-light mb-1">Email</p>
                <input type="text" class="form-control" name="email" value="{{$mod->email}}">
                <br>
            </div>

        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Role</label>
            <select class="form-control" id="exampleFormControlSelect1" name="role">
                @foreach ($role as $item)
                <option value="{{$item->id}}">{{$item->nom}}{{old($item->id)}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-light btn-lg btn-block">Editer</button>
    </div>
</form>

@endsection

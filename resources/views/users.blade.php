@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Voir les utilisateurs</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form class="container p-5" method="post" action="/admin/users/create" enctype="multipart/form-data">
                        @csrf
                        <div class="text-center m-2">
                            <p class="bg-light mb-1">Nom utilisateur</p>
                            <input type="text" class="form-control" name="name">
                            <br>
                            <p class="bg-light mb-1">email</p>
                            <input type="text" class="form-control" name="email">
                            <br>
                            <p class="bg-light mb-1">mdp</p>
                            <input type="text" class="form-control" name="password">
                            <br>
                            <p class="bg-light mb-1">Role</p>
                            <input type="text" class="form-control" name="role">
                            <p class="bg-light mb-1">1-> Super Admin, <br> 2-> Admin, <br> 3-> Membre</p>

                            <br>
                            <button type="submit" class="btn btn-light">Créer un nouveau </button>
                        </div>
                    </form>


                    <br>
                    {{-- {{dd($donnees)}} --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom Utilisateur</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($donnees as $item)
                            <tr>
                                <td type="text">{{$item->name}}</td>
                                <td type="text">{{$item->email}}</td>
                                <td type="text">{{$item->role->nom}}</td>
                                <td><a type="button" class="btn btn-dark" href="/admin/users/edit/{{$item->id}}">Edit</a></td>
                                
                                <td>
                                <form action="/admin/users/delete/{{$item->id}}" method="POST">
                                    @csrf
                                        <button type="submit" class="btn btn-light">Delet</button>
                                </form>
                                </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

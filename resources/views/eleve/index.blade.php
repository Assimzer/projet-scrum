@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('eleve.create')}}"type="button" class="btn btn-md btn-outline-primary">Ajouter un nouvel eleve</a>
                    </div>
                </div>

            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Eleve</th>
                            <th>Email</th>
                            <th>Option</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Users as $user)
                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td>{{$user->name}}-{{$user->fristname}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->option->optionNom}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ route('eleve.edit', $user->id)}}" rel="tooltip" title="Edit user" class="btn btn-success btn-simple btn-xs">
                                    Editer
                                    </a>
                                    
                                    <form action="{{ route('eleve.destroy', $user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-simple btn-xs" type="submit">Supprimer</button>
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
@endsection
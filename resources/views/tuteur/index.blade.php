@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('tuteur.create')}}" type="button" class="btn btn-md btn-outline-primary">Ajouter une ralation eleve->tuteur</a>
                    </div>
                </div>

            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>eleve</th>
                            <th>tuteur</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tuteurs as $tuteur)
                            <tr>
                                <td class="text-center">{{$tuteur->id}}</td>
                                <td>{{App\Models\User::find($tuteur->eleve)->name}}</td>
                                <td>{{App\Models\User::find($tuteur->tuteur)->name}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ route('tuteur.edit', $tuteur->id)}}" rel="tooltip" title="Edit tuteur" class="btn btn-success btn-simple btn-xs">
                                    Editer
                                    </a>
                                    
                                    <form action="{{ route('tuteur.destroy', $tuteur->id)}}" method="post">
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
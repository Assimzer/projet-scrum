@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('fiche.create')}}" type="button" class="btn btn-md btn-outline-primary">Ajouter une nouvelle fiche</a>
                    </div>
                </div>

            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Titre fiche</th>
                            <th>Description fiche</th>
                            <th>Nom du candidat</th>
                            <th>Prenom du candidat</th>
                            <th>Permis</th>
                            <th class="text-right" >Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fiches as $fiche)
                            <tr>
                                <td class="text-center">{{ $fiche->id }}</td>
                                <td>{{ $fiche->title}}</td>
                                <td>{{ $fiche->description }}</td>
                                <td>{{ $fiche->nomCandidat }}</td>
                                <td>{{ $fiche->prenomCandidat }}</td>
                                <td>{{  $fiche->permis==0 ? 'non' : 'oui' }}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ route('fiche.edit', $fiche->id)}}" rel="tooltip" title="Edit Fiche" class="btn btn-success btn-simple btn-xs">
                                    Editer
                                    </a>
                                    <form action="{{ route('fiche.destroy', $fiche->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-simple btn-xs" type="submit">Supprimer</button>
                                    </form>

                                    <a href="{{ route('ficheByID', ['id' => $fiche->id])}}">Télécharger</a>
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

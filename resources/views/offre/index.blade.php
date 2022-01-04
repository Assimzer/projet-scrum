@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('offre.create')}}"type="button" class="btn btn-md btn-outline-primary">Ajouter un nouvel offre</a>
                    </div>
                </div>

            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Société </th>
                            <th>Titre</th>
                            <th>Telephone</th>
                            <th>Type</th>
                            <th>Lieux</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($offres as $offre)
                            <tr>
                                <td>{{$offre->societer}}</td>
                                <td>{{$offre->titre}}</td>
                                <td>{{$offre->telephone}}</td>
                                <td>{{$offre->offreType->type}}</td>
                                <td>{{$offre->offreLocation->ville}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ route('offre.edit', $offre->id)}}" rel="tooltip" title="Edit offre" class="btn btn-success btn-simple btn-xs">
                                    Editer
                                    </a>
                                    
                                    <form action="{{ route('offre.destroy', $offre->id)}}" method="post">
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
@extends('layouts.EnseignantLayout')

@section('title', 'ApprentisRecrutor2000 Profesionnel')
@section('content')

<p>Toutes vos Offres emploit</p>


<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Titre</th>
        <th scope="col">Type</th>
        <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($offres as $offre)
        <tr>
            <td>{{$offre->titre}}</td>
            <td>{{$offre->offreType->type}}</td>
            <td>{{$offre->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection
@extends('layouts.dashboardLayout')
@section('title', 'ApprentisRecrutor2000 Offre')
@section('content')

<p style="margin-left:40%;"><strong>Offre N°{{$offre->offre_uuid}}</strong></p><br>

<p><strong>Information</strong></p>
<p>Société: {{$offre->societer}}</p>
<p>Pays: {{$offre->offreLocation->ville}}</p>
<p>Telephone: {{$offre->telephone}}</p><br>

<p><strong>Type de contract</strong></p>
<p>{{$offre->offreType->type}}</p><br>

<p><strong>Description</strong></p>
<p>{{$offre->resumer}}</p><br>

<p><strong>Competence</strong></p>
<div class="row">
    @foreach($offre->offreSkills as $skill)
    &nbsp;&nbsp;&nbsp;<span class="badge badge-pill badge-primary p-2">{{$skill->skill}}</span>    
    @endforeach
</div><br><hr>


@endsection
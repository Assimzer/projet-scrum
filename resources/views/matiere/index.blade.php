@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Matiere')
@section('main')

@foreach($matieres as $matiere)
<div class="cardBox">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$matiere->nomMatiere}}</h5><br>
            <p class="card-text">{{$matiere->sousCoefficient}}</p><br>
        </div>
    </div>
</div>
@endforeach
@endsection
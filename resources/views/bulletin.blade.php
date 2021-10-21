@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Bulletin')
@section('main')

@foreach($bulletins as $bulletin)
<div class="cardBox">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$bulletin->nomBulletin}}</h5><br>
            <p class="card-text">{{$bulletin->appreciation}}</p><br>
            <p>Année: {{$bulletin->created_at}}</p><br>
            <a href="{{route('bulletin.index', [$bulletin->id])}}" class="btn btn-primary">Consulté</a>
        </div>
    </div>
</div>
@endforeach
@endsection
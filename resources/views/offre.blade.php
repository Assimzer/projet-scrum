@extends('layouts.dashboardLayout')
@section('title', 'ApprentisRecrutor2000 Offre')
@section('content')

    @foreach($offreASI as $offre)
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$offre->offreType->type}}:  {{$offre->titre}} (H/F)</h4>
                    <p class="category">&nbsp;&nbsp;Ouvert le:{{$offre->created_at}}</p>
                    <p class="category">&nbsp;&nbsp;Société: {{$offre->societer}}</p>
                    <p class="category">&nbsp;&nbsp;Pays: {{$offre->offreLocation->ville}}</p>
                    <p class="category">&nbsp;&nbsp;Telephone: {{$offre->telephone}}</p>
                </div>
                <div class="card-content">
                    <p>{{$offre->description}}</p>

                </div>
                
                <form method="GET" action="{{route('ShowOffre',['offre_uuid' => $offre->offre_uuid])}}">
                    <button class="btn btn-info btn-fill btn-wd" style="margin-left:40%;margin-top:1%;margin-bottom:3%;border-radius:15px;" type="submit">Consulter</button>
                </form>
                
                
            </div>
        </div>
    @endforeach
    @foreach($offrepdf as $opdf)
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{$opdf->name}}</h4>
                <p>vous pouvez consulter cette offre ci-dessous en pdf</p>
            </div>            
                <a class="btn btn-info btn-fill btn-wd" href="http://localhost/Apprentis_project/public/storage/pdf/{{$opdf->path}}" target="_BLANK">Consulter</a>
        </div>
    </div>
        
    @endforeach
</div>

@endsection

@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Offre')
@section('content')


    @foreach($offreASI as $offre)
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Offre:  {{$offre->titre}} (H/F)</h4>
                <p class="category">&nbsp;&nbsp;{{$offre->date}}</p>
                <p class="category">&nbsp;&nbsp;{{$offre->offreLocation->ville}}</p>
                <p class="category">&nbsp;&nbsp;{{$offre->telephone}}</p>
            </div>
            <div class="card-content">
                <p>{{$offre->resumer}}</p>

            </div>

            <div class="panel-group" id="accordion">
                <div class="panel panel-border panel-default">
                    <a data-toggle="collapse" href="#{{$offre->id}}" >
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                voir plus de detail
                                <i class="ti-angle-down"></i>
                            </h4>
                        </div>
                    </a>
                    <div id="{{$offre->id}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>{{$offre->description}}</p>
                            <span class="badge badge-pill badge-warning">{{$offre->offreType->type}}</span>
                            <div class="row">
                            @foreach($offre->offreSkills as $skill)
                                    &nbsp;&nbsp;<span class="badge badge-pill badge-primary p-2">{{$skill->skill}}</span>    
                            @endforeach
                            </div><br><hr>
                            
                            <span class="badge badge-pill badge-warning">{{ auth()->user()->option->optionNom }}</span>
                            <button type="button" class="btn btn-primary">Postuler</button>
                            
                           <a href="{{route('createPDF',['id' => $offre->id])}}">GETPDF</a>
                            
                                
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
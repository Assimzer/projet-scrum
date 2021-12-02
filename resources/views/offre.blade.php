
@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Offre')
@section('content')


    @foreach($offreASI as $offre)
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{$offre->titre}} (H/F) <p>{{$offre->offreType->type}}</p></h4>
                <p class="category">&nbsp;&nbsp;{{$offre->date}}</p>
                <p class="category">&nbsp;&nbsp;{{$offre->offreLocation->ville}}</p>
                <p class="category">&nbsp;&nbsp;{{$offre->telephone}}</p>
            </div>
            <div class="card-content">
                <p>{{$offre->description}}</p>
                

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
                            <p>{{$offre->resumer}}</p>
                            
                            <div class="row">
                            @foreach($offre->offreSkills as $skill)
                            &nbsp;&nbsp;<span class="badge badge-pill badge-primary p-2">{{$skill->skill}}</span>
                            @endforeach
                            </div><br><hr>
                            <div style="margin-left: 40%;">
                                <button type="button" class="btn btn-primary">Postuler</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
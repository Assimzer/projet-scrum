@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Bulletin')
@section('content')



    @foreach($bulletins as $bulletin)

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bulletin:{{$bulletin->created_at}}</h4>
                <p class="category">{{$bulletin->users->name}}&nbsp;&nbsp;{{$bulletin->nomBulletin}}</p>
            </div>
            <div class="card-content">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#{{$bulletin->nomBulletin}}" data-toggle="tab">{{$bulletins->nomBulletin}}</a></li>
                            
                            <div class="col-lg-6 col-md-12">                           

                        </ul>
                        
                    </div>
                </div>
                <div id="my-tab-content" class="tab-content text-center">
                    <div class="tab-pane active" id="{{$bulletin->nomBulletin}}">
                        @foreach($bulletin->matieres as $matiere)
                            <p>{{$matiere->nomMatiere}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
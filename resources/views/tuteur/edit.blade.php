@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="cardBox">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <p>Modification une relation Eleve->Tuteur</p>
                    <form method="post" action="{{ route('tuteur.update', $tuteursModels->id ) }}">
                        @csrf
                        @method('PATCH')
                        <div class="col-sm-6" style="margin-top:3%;">
                            <select class="selectpicker " data-style="btn btn-danger btn-block" title="eleve" name="eleve" value="{{App\Models\User::find($tuteursModels->eleve)->name}}">
                                @foreach($eleves as $eleve)
                                    <option value="{{$eleve->id}}">{{$eleve->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6" style="margin-top:3%;">
                            <select class="selectpicker " data-style="btn btn-danger btn-block" title="tuteur" name="tuteur" value="{{App\Models\User::find($tuteursModels->tuteur)->name}}">
                                @foreach($tuteurs as $tuteur)
                                    <option value="{{$tuteur->id}}">{{$tuteur->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
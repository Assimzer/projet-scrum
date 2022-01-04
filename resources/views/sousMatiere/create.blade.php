@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="cardBox">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <p>Ajout d'une nouvel relation</p>
                    <form method="post" action="{{ route('sousMatiere.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6" style="margin-top:3%;">
                                <select class="selectpicker " data-style="btn btn-danger btn-block" title="Groupe de la matiere" name="matiere_groupe">
                                    @foreach($matieres as $matiere)
                                        <option value="{{$matiere->id}}">{{$matiere->nomMatiere}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6" style="margin-top:3%;">
                                <select class="selectpicker " data-style="btn btn-danger btn-block" title="Nom de la sous matiere" name="matiere_associer">
                                    @foreach($matieres as $matiere)
                                        <option value="{{$matiere->id}}">{{$matiere->nomMatiere}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
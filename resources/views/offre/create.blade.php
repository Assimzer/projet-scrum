@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="cardBox">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <p>Ajouter une Offre</p>
                    <form method="post" action="{{ route('offre.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="marque">Titre:</label>
                            <input type="text" name="titre" class="form-control datepicker" placeholder="titre"/>
                        </div>
                        <div class="form-group">
                            <label for="marque">description:</label>
                            <input type="textarea" name="description" class="form-control datepicker" placeholder="description"/>
                        </div>
                        <div class="form-group">
                            <label for="marque">Resumer:</label>
                            <input type="textarea" name="resumer" class="form-control datepicker" placeholder="resumer"/>
                        </div>
                        <div class="form-group">
                            <label for="marque">Telephone:</label>
                            <input type="text" name="telephone" class="form-control datepicker" placeholder="telephone"/>
                        </div>
                        <div class="form-group">
                            <label for="marque">Societer:</label>
                            <input type="text" name="societer" class="form-control datepicker" placeholder="societer"/>
                        </div>

                        <div class="col-sm-6" style="margin-top:3%;">
                            <select class="selectpicker " data-style="btn btn-danger btn-block" title="Type Contract" name="offreType_id">
                                @foreach($offreType as $type)
                                    <option value="{{$type->id}}">{{$type->type}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6" style="margin-top:3%;">
                            <select class="selectpicker " data-style="btn btn-danger btn-block" title="Pays" name="offreLocation_id">
                                @foreach($offreLocation as $location)
                                    <option value="{{$location->id}}">{{$location->ville}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
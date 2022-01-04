@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="cardBox">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <p>Ajout d'une nouvel eleve</p>
                    <form method="post" action="{{ route('eleve.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="marque">Nom:</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>

                        <div class="form-group">
                            <label for="marque">Prenom:</label>
                            <input type="text" class="form-control" name="fristname"/>
                        </div>

                        <div class="form-group">
                            <label for="marque">Email:</label>
                            <input type="text" class="form-control" name="email"/>
                        </div>

                        <div class="form-group">
                            <label for="marque">Mot de passe:</label>
                            <input type="password" class="form-control" name="password"/>
                        </div>

                        <div class="row">
                            <div class="col-sm-6" style="margin-top:3%;">
                                <select class="selectpicker " data-style="btn btn-danger btn-block" title="Option Eleve" name="role_id">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->profileType}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6" style="margin-top:3%;">
                                <select class="selectpicker " data-style="btn btn-danger btn-block" title="Option Eleve" name="option_id">
                                    @foreach($options as $option)
                                        <option value="{{$option->id}}">{{$option->optionNom}}</option>
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
@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="cardBox">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <p>Ajout d'un tuteur</p>
                    <form method="post" action="{{ route('StoreCreateTuteur') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="marque">Nom:</label>
                                    <input type="text" class="form-control" name="name"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="marque">Prenom:</label>
                                    <input type="text" class="form-control" name="fristname"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="marque">Email:</label>
                                    <input type="text" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="marque">Mot de passe:</label>
                                    <input type="password" class="form-control" name="password"/>
                                </div>
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
@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="cardBox">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <p>Ajouter une matière</p>
                    <form method="post" action="{{ route('matiere.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="marque">Nom De La Matiere:</label>
                            <input type="text" class="form-control" name="nomMatiere"/>
                        </div>

                        <div class="form-group">
                            <label for="prix">Sous Coefficient :</label>
                            <input type="text" class="form-control" name="sousCoefficient"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
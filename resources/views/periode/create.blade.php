@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="cardBox">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <p>Ajouter une Période</p>
                    <form method="post" action="{{ route('periode.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="marque">Debut:</label>
                            <input type="date" name="dateDebut" class="form-control datepicker" placeholder="date format exemple: 2021-12-04"/>
                        </div>

                        <div class="form-group">
                            <label for="prix">Fin :</label>
                            <input type="date" name="dateFin" class="form-control datepicker" placeholder="date format exemple: 2021-12-04"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
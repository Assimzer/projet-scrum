@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="cardBox">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <p>Modification d'une matière</p>
                    <form method="post" action="{{ route('matiere.update', $matiere->id ) }}">
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <label for="marque">Nom De La Matiere:</label>
                            <input type="text" class="form-control" name="nomMatiere" value="{{ $matiere->nomMatiere }}"/>
                        </div>

                        <div class="form-group">
                            <label for="prix">Sous Coefficient :</label>
                            <input type="text" class="form-control" name="sousCoefficient" value="{{ $matiere->sousCoefficient }}"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('Matiere.create')}}"type="button" class="btn btn-md btn-outline-primary">Ajouter une matiere</a>
                    </div>
                </div>

            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Matiere</th>
                            <th>Coeff</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matieres as $matiere)
                            <tr>
                                <td class="text-center">{{$matiere->id}}</td>
                                <td>{{$matiere->nomMatiere}}</td>
                                <td>{{$matiere->sousCoefficient}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ route('Matiere.edit', $matiere->id)}}" rel="tooltip" title="Edit Matiere" class="btn btn-success btn-simple btn-xs">
                                    Editer
                                    </a>
                                    
                                    <form action="{{ route('Matiere.destroy', $matiere->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-simple btn-xs" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
@endsection
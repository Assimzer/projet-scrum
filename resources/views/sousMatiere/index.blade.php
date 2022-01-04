@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('sousMatiere.create')}}"type="button" class="btn btn-md btn-outline-primary">Ajouter une ralation groupe->matiere</a>
                    </div>
                </div>

            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>matiere_groupe_id</th>
                            <th>matiere_associer_id</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sousMatieres as $sousMatiere)
                            <tr>
                                <td class="text-center">{{$sousMatiere->id}}</td>
                                <td>{{App\Models\matiere::find($sousMatiere->matiere_groupe)->nomMatiere}}</td>
                                <td>{{App\Models\matiere::find($sousMatiere->matiere_associer)->nomMatiere}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ route('sousMatiere.edit', $sousMatiere->id)}}" rel="tooltip" title="Edit sousMatiere" class="btn btn-success btn-simple btn-xs">
                                    Editer
                                    </a>
                                    
                                    <form action="{{ route('sousMatiere.destroy', $sousMatiere->id)}}" method="post">
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
@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('periode.create')}}"type="button" class="btn btn-md btn-outline-primary">Ajouter une nouvelle periode</a>
                    </div>
                </div>

            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Debut</th>
                            <th>Fin</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Periodes as $periode)
                            <tr>
                                <td class="text-center">{{$periode->id}}</td>
                                <td>{{$periode->dateDebut}}</td>
                                <td>{{$periode->dateFin}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ route('periode.edit', $periode->id)}}" rel="tooltip" title="Edit periode" class="btn btn-success btn-simple btn-xs">
                                    Editer
                                    </a>
                                    
                                    <form action="{{ route('periode.destroy', $periode->id)}}" method="post">
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
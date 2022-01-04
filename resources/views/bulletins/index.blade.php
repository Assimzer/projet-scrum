@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('bulletin.create')}}"type="button" class="btn btn-md btn-outline-primary">Ajouter un nouveau bulletin</a>
                    </div>
                </div>

            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">UUID</th>
                            <th>Bulletin</th>
                            <th>Eleve</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bulletins as $bulletin)
                            <tr>
                                <td class="text-center">{{$bulletin->bulletin_index}}</td>
                                <td>{{$bulletin->nomBulletin}}</td>
                                <td>{{$bulletin->users->name}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ route('bulletin.edit', $bulletin->id)}}" rel="tooltip" title="Edit bulletin" class="btn btn-success btn-simple btn-xs">
                                    Editer
                                    </a>
                                    
                                    <form action="{{ route('bulletin.destroy', $bulletin->id)}}" method="post">
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
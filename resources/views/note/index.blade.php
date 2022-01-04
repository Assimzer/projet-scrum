@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('note.create')}}"type="button" class="btn btn-md btn-outline-primary">Ajouter un nouveau type de note</a>
                    </div>
                </div>

            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>note</th>
                            <th>Sous Coef</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notes as $note)
                            <tr>
                                <td class="text-center">{{$note->id}}</td>
                                <td>{{$note->notes}}</td>
                                <td>{{$note->sousSousCoefficient}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ route('note.edit', $note->id)}}" rel="tooltip" title="Edit note" class="btn btn-success btn-simple btn-xs">
                                    Editer
                                    </a>
                                    
                                    <form action="{{ route('note.destroy', $note->id)}}" method="post">
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
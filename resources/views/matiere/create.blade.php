@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Matieres')
@section('main')

<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>CRUD Matiere</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('matiere.create') }}"> Ajouter une matière</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>nomMatiere</th>
        <th>sousCoefficient</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->title }}</td>
        <td>
            <form action="{{ route('matiere.destroy',$value->id) }}" method="POST">   
                <a class="btn btn-info" href="{{ route('matiere.show',$value->id) }}">Montrer</a>    
                <a class="btn btn-primary" href="{{ route('matiere.edit',$value->id) }}">Modifier</a>   
                @csrf
                @method('DELETE')      
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>  
{!! $data->links() !!}      
@endsection
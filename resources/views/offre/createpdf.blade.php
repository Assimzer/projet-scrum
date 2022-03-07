@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')
<form method="post" action="{{ route('offre.store') }}">
    <div class="col-md-6">
        <input type="file"
        id="file" name="file"
        accept="image/png, image/jpeg, file/pdf"
        class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
    <form method="post" action="{{ route('offre.store') }}">
</form>
@endsection
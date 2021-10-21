@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Bulletin')
@section('main')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<table class="table table-bordered table-responsive-lg" style="margin-left: 25%;margin-top: 10%;">
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Utilisateur</th>
        <th>Année</th>
        <th>Actions</th>
    </tr>
    @foreach ($bulletinsAll as $bulletin)
        <tr>
            <td>{{$bulletin->id}}</td>
            <td>{{$bulletin->nomBulletin}}</td>
            <td>{{$bulletin->users->name}}</td>
            <td>{{$bulletin->created_at}}</td>
            <td></td>
            <td>
                <form action="" method="POST">

                    <a href="" title="show">
                        <i class="fas fa-eye"></i>
                    </a>

                    <a href="">
                        <i class="fas fa-edit"></i>
                    </a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<button type="button" class="btn btn-primary">Primary</button>
<p>kzhjrebfouzeh</p>
@endsection
@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Bulletin')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card card-user">
                    <div class="image">
                        
                    </div>
                    <div class="card-content">
                        <div class="author">
                            <img src="{{ Gravatar::src(Auth::user()->email) }}">
                            <h4 class="card-title">{{Auth::user()->name}} {{Auth::user()->fristname}}<br />
                                <a href="#"><small>{{Auth::user()->email}}</small></a><br>
                                <a href="#"><small>Inscrit le:{{Auth::user()->created_at}}</small></a>
                            </h4>
                        </div>
                        <p class="description text-center">
                            "I like the way you work it <br>
                            No diggity <br>
                            I wanna bag it up"
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-md-3 col-md-offset-1">
                                <h5>12<br /><small>Offre</small></h5>
                            </div>
                            <div class="col-md-4">
                                <h5>10<br /><small>Notification</small></h5>
                            </div>
                            <div class="col-md-3">
                                <h5>5<br /><small>Message</small></h5>
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="card-content">
                        <form>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control border-input" placeholder="Nom" name="name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Prenom</label>
                                        <input type="text" class="form-control border-input" placeholder="Prenom" name="fristname">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control border-input" placeholder="Email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control border-input" placeholder="Address" name="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control border-input" placeholder="Telephone" name="Telephone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" class="form-control border-input" placeholder="Ville" name="Ville">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Pays</label>
                                        <input type="text" class="form-control border-input" placeholder="Pay" name="Pay">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Code Postal</label>
                                        <input type="number" class="form-control border-input" placeholder="ZIP Code" name="ZipCode">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea rows="5" class="form-control border-input" placeholder="Ecrivez ici une petite description de vous" name="About"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
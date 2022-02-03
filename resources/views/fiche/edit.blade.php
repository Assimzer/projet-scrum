@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
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
                    <p>Modification d'une fiche</p>
                    <form method="POST" action="{{ route('fiche.update', $fiche->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Titre de la fiche :</label>
                                <input type="text" class="form-control" name="title" value="{{ $fiche->title }}"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description :</label>
                                <input type="text" class="form-control" name="description" value="{{ $fiche->description }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nom">Nom du candidat :</label>
                                <input type="text" class="form-control" name="nomCandidat" value="{{ $fiche->nomCandidat }}"/>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="prenom">Prénom du candidat :</label>
                                <input type="text" class="form-control" name="prenomCandidat" value="{{ $fiche->prenomCandidat }}"/>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="mail">Email :</label>
                                <input type="text" class="form-control" name="email" value="{{ $fiche->email }}"/>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="adresse">Adresse :</label>
                                <input type="text" class="form-control" name="address" value="{{ $fiche->address }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Permis</label>
                            <div class="form-group">
                                <input type="radio" id="oui" name="permis" value="1" {{ $fiche->permis==1 ? 'checked' : '' }}>
                                <label for="permis">Oui</label>
                            </div>
                            
                            <div class="form-group">
                                <input type="radio" id="non" name="permis" value="0" {{ $fiche->permis==0 ? 'checked' : '' }}>
                                <label for="permis">Non</label>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <label>Véhicule</label>
                            <div class="form-group">
                                <input type="radio" id="oui" name="vehicule" value="1" {{ $fiche->vehicule==1 ? 'checked' : '' }}>
                                <label for="vehicule">Oui</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" id="non" name="vehicule" value="0" {{ $fiche->vehicule==0 ? 'checked' : '' }}>
                                <label for="vehicule">Non</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label>Option (pour SIO)</label>
                            <div class="form-group">
                                <input type="radio" id="oui" name="optionDeSIO" value="1" {{ $fiche->optionDeSIO==1 ? 'checked' : '' }}>
                                <label for="SIO">SLAM</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" id="non" name="optionDeSIO" value="0" {{ $fiche->optionDeSIO==0 ? 'checked' : '' }}>
                                <label for="SIO">SISR</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>Entreprise trouvée : </label>
                            <div class="form-group">
                                <input type="radio" id="oui" name="entrepriseTrouvee" value="1" {{ $fiche->entrepriseTrouvee==1 ? 'checked' : '' }}>
                                <label for="entreprise">Oui</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" id="non" name="entrepriseTrouvee" value="0" {{ $fiche->entrepriseTrouvee==0 ? 'checked' : '' }}>
                                <label for="entreprise">Non</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Poste conforme à la formation : </label>
                            <div class="form-group">
                                <input type="radio" id="oui" name="conformeAFormation" value="1" {{ $fiche->conformeAFormation==1 ? 'checked' : '' }}>
                                <label for="entreprise">Oui</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" id="non" name="conformeAFormation" value="0" {{ $fiche->conformeAFormation==0 ? 'checked' : '' }}>
                                <label for="entreprise">Non</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Démarches effectuées : </label>
                            <div class="form-group">
                                <input type="radio" id="oui" name="demarcheRealisee" value="1" {{ $fiche->demarcheRealisee==1 ? 'checked' : '' }}>
                                <label for="demarche">Oui</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" id="non" name="demarcheRealisee" value="0" {{ $fiche->demarcheRealisee==0 ? 'checked' : '' }}>
                                <label for="demarche">Non</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Demandeur d'emploi ? </label>
                            <div class="form-group">
                                <input type="radio" id="oui" name="demandeEmploi" value="1" {{ $fiche->demandeEmploi==1 ? 'checked' : '' }}>
                                <label for="demande">Oui</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" id="non" name="demandeEmploi" value="0" {{ $fiche->demandeEmploi==0 ? 'checked' : '' }}>
                                <label for="demande">Non</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>Aménagement spécifique de la scolarité et/ou examen </label>
                            <div class="form-group">
                                <input type="radio" id="PAI" name="amenagement" value="PAI" {{ $fiche->amenagement=='PAI' ? 'checked' : '' }}>
                                <label for="amenagement">PAI</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" id="PPS" name="amenagement" value="PPS" {{ $fiche->amenagement=='PPS' ? 'checked' : '' }}>
                                <label for="amenagement">PPS</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" id="PAP" name="amenagement" value="PAP" {{ $fiche->amenagement=='PAP' ? 'checked' : '' }}>
                                <label for="amenagement">PAP</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" id="aucun" name="amenagement" value="aucun" {{ $fiche->amenagement=='aucun' ? 'checked' : '' }}>
                                <label for="amenagement">Aucun aménagement</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Adéquation entre formation et projet : </label>
                            <div class="form-group">
                                <input type="radio" id="Conforme" name="adequationFormProjet" value="Conforme" {{ $fiche->adequationFormProjet=='Conforme' ? 'checked' : '' }}>
                                <label for="adequation">Conforme</label>
                            </div> 

                            <div class="form-group">
                                <input type="radio" id="pasConforme" name="adequationFormProjet" value="pas-conforme" {{ $fiche->adequationFormProjet=='pas-conforme' ? 'checked' : '' }}>
                                <label for="adequation">Non conforme</label>
                            </div> 

                            <div class="form-group">
                                <input type="radio" id="autreOrientation" name="adequationFormProjet" value="autre-orientation" {{ $fiche->adequationFormProjet=='autre-orientation' ? 'checked' : '' }}>
                                <label for="adequation">Autre orientation proposée</label>
                            </div> 
                        </div>

                        <div class="col-md-3">
                            <label>Niveau Scolaire : </label>
                            <div class="form-group">
                                <input type="radio" id="<10" name="niveauScolaire" value="<10" {{ $fiche->niveauScolaire=='<10' ? 'checked' : '' }}>
                                <label for="adequation">Inférieur à 10</label>
                            </div> 

                            <div class="form-group">
                                <input type="radio" id="10-12" name="niveauScolaire" value="10-12" {{ $fiche->niveauScolaire=='10-12' ? 'checked' : '' }}>
                                <label for="niveau">Entre 10 et 12</label>
                            </div> 

                            <div class="form-group">
                                <input type="radio" id="12-15" name="niveauScolaire" value="12-15" {{ $fiche->niveauScolaire=='12-15' ? 'checked' : '' }}>
                                <label for="niveau">Entre 12 et 15</label>
                            </div> 

                            <div class="form-group">
                                <input type="radio" id=">15" name="niveauScolaire" value=">15" {{ $fiche->niveauScolaire=='>15' ? 'checked' : '' }}>
                                <label for="niveau">Supérieur à 15</label>
                            </div> 

                            <div class="form-group">
                                <input type="radio" id="non_concerne" name="niveauScolaire" value="non_concerne" {{ $fiche->niveauScolaire=='non_concerne' ? 'checked' : '' }}>
                                <label for="niveau">Non concerné</label>
                            </div> 
                        </div>

                        <div class="col-md-3">
                            <label>Expérience Professionnel à mettre en avant : </label>
                            <div class="form-group">
                                <input type="radio" id="ouiSignificatif" name="experiencePro" value="oui-significatif" {{ $fiche->experiencePro=='oui-significatif' ? 'checked' : '' }}>
                                <label for="experience">Oui significatif</label>
                            </div> 

                            <div class="form-group">
                                <input type="radio" id="oui" name="experiencePro" value="oui" {{ $fiche->experiencePro=='oui' ? 'checked' : '' }}>
                                <label for="experience">Oui</label>
                            </div> 

                            <div class="form-group">
                                <input type="radio" id="non" name="experiencePro" value="non" {{ $fiche->experiencePro=='non' ? 'checked' : '' }}>
                                <label for="experience">Non</label>
                            </div> 
                        </div>
                    </div>
                        
                        <button type="submit" class="btn btn-lg btn-primary" style="margin-left:45%; margin-top:2%;">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="cardBox">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <p>Ajouter une fiche</p>
                    <form method="POST" action="{{ route('fiche.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Titre de la fiche :</label>
                                    <input type="text" class="form-control" name="title"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">Description :</label>
                                    <input type="text" class="form-control" name="description"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nom">Nom du candidat :</label>
                                    <input type="text" class="form-control" name="nomCandidat"/>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="prenom">Prénom du candidat :</label>
                                    <input type="text" class="form-control" name="prenomCandidat"/>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="mail">Email :</label>
                                    <input type="text" class="form-control" name="email"/>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="adresse">Adresse :</label>
                                    <input type="text" class="form-control" name="address"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Permis</label>
                                <div class="form-group">
                                    <input type="radio" id="oui" name="permis" value="1">
                                    <label for="permis">Oui</label>
                                </div>

                                <div class="form-group">
                                    <input type="radio" id="non" name="permis" value="0">
                                    <label for="permis">Non</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Véhicule</label>
                                <div class="form-group">
                                    <input type="radio" id="oui" name="vehicule" value="1">
                                    <label for="vehicule">Oui</label>
                                </div>

                                <div class="form-group">
                                    <input type="radio" id="non" name="vehicule" value="0">
                                    <label for="vehicule">Non</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label>Option (pour SIO)</label>
                                <div class="form-group">
                                    <input type="radio" id="slam" name="optionDeSIO" value="1">
                                    <label for="SIO">SLAM</label>
                                </div>

                                <div class="form-group">
                                    <input type="radio" id="sisr" name="optionDeSIO" value="0">
                                    <label for="SIO">SISR</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label>Entreprise Trouvée : </label>
                                <div class="form-group">
                                    <input type="radio" id="oui" name="entrepriseTrouvee" value="1">
                                    <label for="entreprise">Oui</label>
                                </div>

                                <div class="form-group">
                                    <input type="radio" id="non" name="entrepriseTrouvee" value="0">
                                    <label for="entreprise">Non</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Poste conforme à la formation : </label>
                                <div class="form-group">
                                    <input type="radio" id="oui" name="conformeAFormation" value="1">
                                    <label for="poste">Oui</label>
                                </div>

                                <div class="form-group">
                                    <input type="radio" id="non" name="conformeAFormation" value="0">
                                    <label for="poste">Non</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Démarches réalisées : </label>
                                <div class="form-group">
                                    <input type="radio" id="oui" name="demarcheRealisee" value="1">
                                    <label for="demarche">Oui</label>
                                </div>

                                <div class="form-group">
                                    <input type="radio" id="non" name="demarcheRealisee" value="0">
                                    <label for="demarche">Non</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Le candidat est-il demandeur d'emploi ? </label>
                                <div class="form-group">
                                    <input type="radio" id="oui" name="demandeEmploi" value="1">
                                    <label for="demande">Oui</label>
                                </div>

                                <div class="form-group">
                                    <input type="radio" id="non" name="demandeEmploi" value="0">
                                    <label for="demande">Non</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label>Aménagement spécifique de la scolarité et/ou de l'examen</label>
                                <div class="form-group">
                                    <input type="radio" id="PAI" name="amenagement" value="PAI">
                                    <label for="amenagement">PAI</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id="PPS" name="amenagement" value="PPS">
                                    <label for="amenagement">PPS</label>
                                </div> 
                            
                                <div class="form-group">
                                    <input type="radio" id="PAP" name="amenagement" value="PAP">
                                    <label for="amenagement">PAP</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id="aucun" name="amenagement" value="aucun">
                                    <label for="amenagement">Aucun aménagement</label>
                                </div> 
                            </div>


                            <div class="col-md-3">
                                <label>Adéquation entre formation et projet : </label>
                                <div class="form-group">
                                    <input type="radio" id="Conforme" name="adequationFormProjet" value="Conforme">
                                    <label for="adequation">Conforme</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id="pasConforme" name="adequationFormProjet" value="pas-conforme">
                                    <label for="adequation">Non conforme</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id="autreOrientation" name="adequationFormProjet" value="autre-orientation">
                                    <label for="adequation">Autre orientation proposée</label>
                                </div> 
                            </div>

                            <div class="col-md-3">
                                <label>Niveau Scolaire : </label>
                                <div class="form-group">
                                    <input type="radio" id="<10" name="niveauScolaire" value="<10">
                                    <label for="adequation">Inférieur à 10</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id="10-12" name="niveauScolaire" value="10-12">
                                    <label for="niveau">Entre 10 et 12</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id="12-15" name="niveauScolaire" value="12-15">
                                    <label for="niveau">Entre 12 et 15</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id=">15" name="niveauScolaire" value=">15">
                                    <label for="niveau">Supérieur à 15</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id="non_concerne" name="niveauScolaire" value="non_concerne">
                                    <label for="niveau">Non concerné</label>
                                </div> 
                            </div>

                            <div class="col-md-3">
                                <label>Expérience Professionnel à mettre en avant : </label>
                                <div class="form-group">
                                    <input type="radio" id="ouiSignificatif" name="experiencePro" value="oui-significatif">
                                    <label for="experience">Oui significatif</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id="oui" name="experiencePro" value="oui">
                                    <label for="experience">Oui</label>
                                </div> 

                                <div class="form-group">
                                    <input type="radio" id="non" name="experiencePro" value="non">
                                    <label for="experience">Non</label>
                                </div> 
                            </div>
                        </div>




                        
                        <button type="submit" class="btn btn-lg btn-primary" style="margin-left: 45%; margin-top: 2%;">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>

        <p><a href="{{ route('fiche.index') }}" title="Retourner aux articles" >Retourner vers l'index des fiches</a></p>
    </div>
</div>
@endsection
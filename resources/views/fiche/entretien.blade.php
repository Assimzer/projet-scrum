<!DOCTYPE html>
<html>
    <head>
        <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 2px solid #0099ff;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }

        h2 {
            color: red;
        }

        .row {
            display: flex;
        }

        .column {
            flex: 50%;
            padding: 35px;
            height: 150px; 
            margin-bottom: 45px;
        }
        </style>
    </head>

    <body>
        <h2>Informations entretien</h2>
        <div class="row">
            <div class="column">
                <p>{{ $fiche->title }}</p>
            </div>
            <div class="column">
                <p>{{ $fiche->description }}</p>
            </div>
        </div>
        <p>{{ $fiche->nomCandidat }}</p>
        <p>{{ $fiche->prenomCandidat }}</p>
        <p>{{ $fiche->email }}</p>
        <p>{{ $fiche->address }}</p>
        <p>{{  $fiche->permis==0 ? 'non' : 'oui' }}</p>
        <p>{{ $fiche->vehicule==0 ? 'non' : 'oui' }}</p>
        <p>{{ $fiche->optionDeSIO==0 ? 'SISR' : 'SLAM' }}</p>
        <p>Entreprise trouvée : {{ $fiche->entrepriseTrouvee==0 ? 'non' : 'oui' }}</p>
        <p>{{ $fiche->conformeAFormation==0 ? 'non' : 'oui' }}</p>
        <p>{{ $fiche->demarcheRealisee==0 ? 'non' : 'oui' }}</p>
        <p>{{ $fiche->demandeEmploi==0 ? 'non' : 'oui' }}</p>
        <p>{{ $fiche->amenagement }}</p>
        <p>{{ $fiche->adequationFormProjet }}</p>
        <p>{{ $fiche->niveauScolaire }}</p>
        <p>{{ $fiche->experiencePro }}</p>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ttt</title>
    <style>
        hr {
            width: 50%;
            border: 1px solid black;
            margin-left: 0;
        }
        .resume{
            max-width: 50%;
            text-align: center;
        }
        
        .title{
            text-align: center;
            max-width: 50%;
            text-decoration: underline;
        }

    </style>
</head>
<body>
    
    <p class="title"><strong>{{$offre->titre}}</strong></p>
    <hr>
    <h4 class="title">Offre du :  {{$offre->date}}</h4>
    <p class="resume">{{$offre->description}}</p>
    <p class="resume">{{$offre->resumer}}</p>
    
    
    <hr>
    <p class="title"><strong>profil souhaiter</stong> </p>
    <hr>  
    <div class="resume">
        <p><strong>Compétences</strong></p> 
        @foreach($offre->offreSkills as $skill)
        &nbsp;&nbsp;<span class="badge badge-pill badge-primary p-2"> {{$skill->skill}}</span>   
        @endforeach
        -ajouter la date de l'offre 
        -nom de l'entreprise 
    </div><br><hr>
</body>
</html>
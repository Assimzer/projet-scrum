<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ttt</title>
    <style>
        hr {
            border: 1px solid black;
            margin-left: 50%;
            
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
        .aya {
            float: right;
            width: 50%;

        }
        body {
            background: rgb(204,204,204); 
        }
        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        page[size="A4"] {  
            width: 21cm;
            height: 29.7cm; 
        }
        page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;  
        }
        @media print {
            body, page {
                margin: 0;
                box-shadow: 0;
            }
        }
    </style>
</head>
<body>
<page size="A4">
    <p class="title"><strong>{{$offre->titre}}</strong>
    <img src="{{url('images/aya.png')}}" alt="aya" class="aya">
    <h5 class="title">Offre du :  {{$offre->date}}</h5>
    <hr>
    <h4 class="title">nom de l'entrteprise : </h4>
    
    <h5 class="resume">{{$offre->entreprise_name}}</h5>
    <hr>
    <p class="resume">{{$offre->description}}</p>
    <p class="resume">{{$offre->resumer}}</p>
    
    
    <hr>
    <p class="title"><strong>profil souhaiter</stong></p>
    <hr>  
    <div class="resume">
        <p><strong>Compétences</strong></p> 
        @foreach($offre->offreSkills as $skill)
        &nbsp;&nbsp;<span class="badge badge-pill badge-primary p-2"> {{$skill->skill}}</span>   
        @endforeach

    </div>
    <br><hr>
</page>
</body>
</html>
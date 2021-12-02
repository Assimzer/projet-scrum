<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ttt</title>
    <style>


    </style>
</head>
<body>
    <p>{{$offre->titre}}</p>
    <p>{{$offre->resumer}}</p>
    <p>{{$offre->description}}</p>
    <hr>
    <p><strong>Compétences</strong></p>  
    @foreach($offre->offreSkills as $skill)
    <p>-{{$skill->skill}}</p>  
    @endforeach
    
</body>
</html>
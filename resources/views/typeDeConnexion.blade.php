<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PasteurMontRoland - connexionType</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
  <link rel="stylesheet" href="{{ url('connexion.css') }}">
  <link rel="stylesheet" href="{{ url('style.css') }}">
  <link rel="icon" href="{{ asset('./img/core-img/fav2.ico') }}">
</head>
<body>
<!-- partial:index.partial.html -->
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="logo">
          <img src="{{ asset('LOGO_banas_blanc_2.svg') }}" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
        <section class="section-padding-100">

            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="card">
                    <div class="iconCard"><i class="fas fa-users fa-5x"></i></div>
                    <div class="card-text">
                        <span class="date"></span>
                        <h2>Compte Externe</h2>
                        <p>Ce type de connexion s'adresse pour les prestataires externe à l'établisement Pasteur Mont Roland</p>
                    </div>
                </div>
                    <div class="card">
                        <div class="iconCard"><i class="fas fa-address-card fa-5x"></i></div>
                        <div class="card-text">
                            <span class="date"></span>
                            <h2>Active Directory</h2>
                            <p>Ce type de connexion est pour les etudients et les professeurs du lycée Pasteur Mont Roland</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </div>
</body>
<!-- partial -->
  
</body>
</html>

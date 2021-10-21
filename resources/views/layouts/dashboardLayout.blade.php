<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale=1.0>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{url('css/dashboard.css')}}">
        <link rel="icon" href="{{ url('img/school.ico') }}">
    </head>
    <body>
        <div class="container">
            @if(Auth::user()->roles->profileType == "Admin")
                <div class="navigation">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                                <span class="title">Apprenti Recrutor 2000</span>
                            </a>
                        </li>
                        @if(Route::is('home') )
                        <li class="hovered">
                            <a href="#">
                                <span class="icon"><ion-icon name="home-outline"></ion-icon></ion-icon></span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="home-outline"></ion-icon></ion-icon></span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="{{route('showbulletinAdmin')}}">
                                <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                                <span class="title">Bulletin</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                                <span class="title">CRUD Matiere</span>
                            </a>
                        </li>

                        
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                                <span class="title">Paramètres</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('logout')}}">
                                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                                <span class="title">Deconnexion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @endif

            @if(Auth::user()->roles->profileType == "Eleve")
                <div class="navigation">
                    <ul>
                        <li>
                            <a href="{{route('home')}}">
                                <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                                <span class="title">Apprenti Recrutor 2000</span>
                            </a>
                        </li>
                        @if(Route::is('home') )
                        <li class="hovered">
                            <a href="{{route('home')}}">
                                <span class="icon"><ion-icon name="home-outline"></ion-icon></ion-icon></span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{route('home')}}">
                                <span class="icon"><ion-icon name="home-outline"></ion-icon></ion-icon></span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        @endif


                        @if(Route::is('bulletin.index') )
                        <li class="hovered">
                            <a href="{{route('bulletin.index')}}">
                                <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                                <span class="title">Bulletins</span>
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{route('bulletin.index')}}">
                                <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                                <span class="title">Bulletins</span>
                            </a>
                        </li>
                        @endif
                        

                        @if(Route::is('offre.index') )
                        <li class="hovered">
                            <a href="{{route('offre.index')}}">
                                <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                                <span class="title">Offres</span>
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{route('offre.index')}}">
                                <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                                <span class="title">Offres</span>
                            </a>
                        </li>
                        @endif
                        

                        @if(Route::is('settings') )
                        <li class="hovered">
                            <a href="{{route('settings')}}">
                                <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                                <span class="title">Paramètres</span>
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{route('settings')}}">
                                <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                                <span class="title">Paramètres</span>
                            </a>
                        </li>
                        @endif
                        

                        <li>
                            <a href="{{route('logout')}}">
                                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                                <span class="title">Deconnexion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @endif

            <div class="navigation">
                <ul>
                    <li class="border">
                        <a href="#">
                            <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                            <span class="title">Apprenti Recrutor 2000</span>
                        </a>
                    </li>
                    @if(Route::is('home') )
                    <li class="hovered">
                        <a href="#">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></ion-icon></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></ion-icon></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{route('bulletin.index')}}">
                            <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                            <span class="title">Bulletins</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                            <span class="title">Offres</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                            <span class="title">Paramètres</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('logout')}}">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">Deconnexion</span>
                        </a>
                    </li>
                </ul>
            </div>


            <!-- main -->
            <div class="main">
                <div class="topbarfull">
                <div class="topbarfullright">     
                <div class="topbar">
                <div class="inverted-border-radius"></div> 
                <div class="inverted-border-right"></div>                 
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                    <h2 class="nameColored Cooper">{{Auth::user()->name}} {{Auth::user()->fristname}}</h2>
                    <!-- userImg -->
                    <div class="user">
                        <img src="{{ Gravatar::src(Auth::user()->email) }}">
                    </div>
                </div>
                </div>
                </div>

                <!-- cards -->
                <div class="cardBox">
                    <div class="card">
                        <div>
                            <div class="numbers">1,504</div>
                            <div class="cardName">Offres Totales</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">1</div>
                            <div class="cardName">Bulletins</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="newspaper-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">284</div>
                            <div class="cardName">Notifications</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="notifications-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">10.25/20</div>
                            <div class="cardName">Moyenne Général Semestre 1</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="school-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                
                <div class="details">
                @section('main')
                @show
                </div>

            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>    
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            // MenuToggle
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function()
            {
                navigation.classList.toggle('active');
                main.classList.toggle('active');
            }

        </script>
    </body>
</html>
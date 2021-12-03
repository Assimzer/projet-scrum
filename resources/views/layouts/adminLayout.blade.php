<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" href="{{ url('images/icons/graduation.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <!-- Bootstrap core CSS     -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="{{url('assets/css/paper-dashboard.css')}}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{url('assets/css/demo.css')}}" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{url('assets/css/themify-icons.css')}}" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
	    <div class="sidebar" data-background-color="brown" data-active-color="primary">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="{{route('home')}}" class="simple-text logo-mini">
					AR
				</a>

				<a href="{{route('home')}}" class="simple-text logo-normal">
					AR2000
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<div class="user">
	                <div class="info">
						<div class="photo">
                            <img src="{{ Gravatar::src(Auth::user()->email) }}">
		                </div>

	                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        <span>
                                {{Auth::user()->name}} {{Auth::user()->fristname}}
		                        <b class="caret"></b>
							</span>
	                    </a>
						<div class="clearfix"></div>

	                    <div class="collapse" id="collapseExample">
	                        <ul class="nav">
	                            <li>
									<a href="{{route('ProfilePage')}}">
										<span class="sidebar-mini">P</span>
										<span class="sidebar-normal">Profile</span>
									</a>
								</li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
                @if(Auth::user()->roles->profileType == "ResponsableDispositif")
                    <ul class="nav">
                        @if(Route::is('home') )
                            <li class="active">
                                <a href="{{route('home')}}">
                                    <i class="fas fa-home"></i>
                                    <p>Home</p>
                                </a>
                            </li>
                        @else
                            <li class="">
                                <a href="{{route('home')}}">
                                    <i class="fas fa-home"></i>
                                    <p>Home</p>
                                </a>
                            </li>
                        @endif

                        <li>
                            <a href="{{route('Matiere.index')}}">
								<i class="fas fa-book-reader"></i>
                                <p>Groupe_Matieres</p>
                            </a>
                        </li>
						<li>
                            <a href="{{route('Matiere.index')}}">
								<i class="fas fa-book-reader"></i>
                                <p>Sous_Matieres</p>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('logout')}}">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Bulletins</p>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('logout')}}">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Notes</p>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('logout')}}">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Déconnexion</p>
                            </a>
                        </li>
                            
                    </ul>
                @endif
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-default">
	            <div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
					</div>
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar bar1"></span>
	                        <span class="icon-bar bar2"></span>
	                        <span class="icon-bar bar3"></span>
	                    </button>
	                </div>
	                <div class="collapse navbar-collapse" style="margin-left: 45%;">

						<form class="navbar-form navbar-left navbar-search-form" role="search">
	    					<div class="input-group">
	    						<span class="input-group-addon"><i class="fa fa-search"></i></span>
	    						<input type="text" value="" class="form-control" placeholder="Search...">
	    					</div>
	    				</form>

	                    <ul class="nav navbar-nav navbar-right">
	                        <li class="dropdown">
	                            <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
	                                <i class="ti-bell"></i>
	                                <span class="notification">5</span>
									<p class="hidden-md hidden-lg">
										Notifications
										<b class="caret"></b>
									</p>
	                            </a>
	                            <ul class="dropdown-menu">
	                                <li><a href="#not1">Notification 1</a></li>
	                                <li><a href="#not2">Notification 2</a></li>
	                                <li><a href="#not3">Notification 3</a></li>
	                                <li><a href="#not4">Notification 4</a></li>
	                                <li><a href="#another">Another notification</a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </nav>

	        <div class="content">
            @section('content')
            @show
	        </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p>©2021 Pasteur Mont Roland</p>
                </div>
            </footer>
	    </div>
	</div>
</body>

	<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
	<script src="{{url('assets/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src="{{url('assets/js/jquery.validate.min.js')}}"></script>

	<!-- Promise Library for SweetAlert2 working on IE -->
	<script src="{{url('assets/js/es6-promise-auto.min.js')}}"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="{{url('assets/js/moment.min.js')}}"></script>

	<!--  Date Time Picker Plugin is included in this js file -->
	<script src="{{url('assets/js/bootstrap-datetimepicker.js')}}"></script>

	<!--  Select Picker Plugin -->
	<script src="{{url('assets/js/bootstrap-selectpicker.js')}}"></script>

	<!--  Switch and Tags Input Plugins -->
	<script src="{{url('assets/js/bootstrap-switch-tags.js')}}"></script>

	<!-- Circle Percentage-chart -->
	<script src="{{url('assets/js/jquery.easypiechart.min.js')}}"></script>

	<!--  Charts Plugin -->
	<script src="{{url('assets/js/chartist.min.js')}}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{url('assets/js/bootstrap-notify.js')}}"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src="{{url('assets/js/sweetalert2.js')}}"></script>

	<!-- Vector Map plugin -->
	<script src="{{url('assets/js/jquery-jvectormap.js')}}"></script>

	<!-- Wizard Plugin    -->
	<script src="{{url('assets/js/jquery.bootstrap.wizard.min.js')}}"></script>

	<!--  Bootstrap Table Plugin    -->
	<script src="{{url('assets/js/bootstrap-table.js')}}"></script>

	<!--  Plugin for DataTables.net  -->
	<script src="{{url('assets/js/jquery.datatables.js')}}"></script>

	<!--  Full Calendar Plugin    -->
	<script src="{{url('assets/js/fullcalendar.min.js')}}"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src="{{url('assets/js/paper-dashboard.js')}}"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="{{url('assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){
			demo.initOverviewDashboard();
			demo.initCirclePercentage();

    	});
	</script>

</html>

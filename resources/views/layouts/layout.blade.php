<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>site teacher</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" >

    <!-- Custom Fonts -->
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    @section('navigation')
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top" >
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/')}}" style="color: #7eaa08;">Дистанційне навчання</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{url('/')}}" style="color: #7eaa08;" >Головна</a>
                    </li>
                    <li>
                        <a href="{{url('/about')}}" style="color: #7eaa08;">Учитель</a>
                    </li>
                    <li>
                        <a href="{{url('/send_sms')}}" style="color: #7eaa08;">Надиіслати повідомлення</a>
                    </li>
                    <li>
                        <a href="{{url('/login')}}" style="color: #7eaa08;">Увійти/Зареєструватись</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    @show

    <!-- Page Header -->
@section('pageHeader')
    <header class="intro-header" style="background-color: #e7efd2;">
        <!-- background-image:url({{asset('assets/img/home-bg.jpg')}}) -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1 style="color: #7eaa08;">Добрий день!</h1>
                       
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@show
    <!-- Main Content -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="{{url('/post')}}">
                        <h2 class="post-title">
                            Урок №1
                        </h2>
                        <h3 class="post-subtitle">
                            Вводный урок для детей аутистов
                        </h3>
                    </a>
                    <p class="post-meta">автор <a href="#">Олейник Ольга</a> Июль 24, 2018</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Еще уроки &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
  @show
    <!-- Footer -->
    @section('footer')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                    <li><a href="" style="text-decoration:none;" class="copyright text-muted">разработка 
                    <span style="color:blue;">T</span><span style="colore:green;">F</span><span style="color:red;">N</span></a></li>
                    <li class="copyright text-muted"> version 1.0.0</li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; site oleynik-olga 2018</p>
                </div>
            </div>
        </div>
    </footer>
    @show

    <!-- jQuery -->
    @section('scripts')
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('assets/js0/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('assets/js0/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('assets/js0/clean-blog.min.js')}}"></script>
    @show
</body>

</html>

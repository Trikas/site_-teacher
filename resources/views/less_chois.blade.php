@extends('layouts.layout')
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
                    @if($user=='Trikaka')
                    @else
                    <li>
                        <a href="{{url('/send_sms')}}" style="color: #7eaa08;">Надиіслати повідомлення</a>
                    </li>
                    @endif
                    @if(!Auth::user())
                    <li>
                        <a href="{{url('/login')}}" style="color: #7eaa08;">Увійти/Зареєструватись</a>
                    </li>
                    @endif
                    @if($user=='Trikaka')
                    <li>
                        <a href="{{url('/admin')}}" style="color: #7eaa08;">Увійти до адмін панелі</a>
                    </li>
                    @endif
                    @if(Auth::user())
                   <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                        @csrf
                       <input type="submit" value="Выйти" class="btn btn-success">
                    </form>
                   </li>
                   @endif
                  
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
@endsection
@section('pageHeader')
    <header class="intro-header" style="background-color: #e7efd2;">
        <!-- background-image:url({{asset('assets/img/home-bg.jpg')}}) -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1 style="color:#00bc71;">
                          {{$lessName}}
                        </h1>
                       
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            	@foreach($lesson as $less)
                <div class="post-preview">
                    <a href="{{url('/lessons/'.$less->id.'/'.$less->title1)}}">
                        <h2 class="post-title" style="color: #0c6a99;">
                           {{$less->title1}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$less->title2}}
                        </h3>
                    </a>
                    <p class="post-meta">автор <a href="#">{{$less->author}} </a>{{$less->date}}</p>
                </div>
                <hr>
                @endforeach
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                       {{$lesson->render()}}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
  @endsection
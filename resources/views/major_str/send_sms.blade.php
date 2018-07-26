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
                           Надіслати повідомлення
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
            <p>Надішліть свое смс та чекайте відповіді на електрону пошту</p>
            <h2>{{$status}}</h2>
            <form action="/send_sms" method="post" >
                @csrf
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Прізвище Ім'я По-батькові</label>
                        <input type="text" class="form-control" placeholder="Ф.И.О" id="name" required data-validation-required-message="Please enter your name." name="name">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address." name="email">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label> Номер телефону</label>
                        <input type="tel" class="form-control" placeholder="Номер телефона" id="phone" required data-validation-required-message="Please enter your phone number." name="phone">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Смс</label>
                        <textarea rows="5" class="form-control" placeholder="Смс" id="message" required data-validation-required-message="Please enter a message." name="msg"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <input type="submit" class="btn btn-default value="Надиіслати">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
@endsection

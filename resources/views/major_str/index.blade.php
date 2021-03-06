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
@section('content')

  <div class="container">
    <div class="row">
       <div class="col-md-4 col-sm-12 col-xs-12 my-col text-center">
       </div>
       <div class="col-md-4 col-sm-12 col-xs-12 my-col text-center">
        <h1>Оберіть урок</h1>
        <hr>
       </div>
       <div class="col-md-4 col-sm-12 col-xs-12 my-col text-center">
       </div>
    </div>    
    <div class="row">
        
        <a href="{{url('/lesson/choice/less_read')}}"><div class="col-md-4 col-sm-12 col-xs-12 my-col text-center" style="background-color:#e2f2bc;">
            <h2>Уроки  <br>читання</h2>
        </div></a>
       
        <a href="{{url('/lesson/choice/less_mat')}}"><div class="col-md-4 col-sm-12 col-xs-12 my-col text-center" style="background-color:#f1f1bb;">
            <h2>Уроки <br>математики</h2>
        </div></a>
       
        <a href="{{url('/lesson/choice/less_lang')}}"><div class="col-md-4 col-sm-12 col-xs-12 my-col text-center" style="background-color:#d2efe3;" >
           <h2>Уроки  <br> української мови</h2>
        </div></a>
       
    </div>
    <div class="row">
        <div>
            <div class="col-md-4 col-sm-12 col-xs-12">

             </div>   
        </div>
    </div>
    <div class="row">
         <a href="{{url('/lesson/choice/less_art')}}"><div class="col-md-4 col-sm-12 col-xs-12 my-col text-center" style="background-color:#efe7d2;" >
           <h2>Природознавство та <br>мистецтво</h2>
        </div></a>
    </div><br>
     <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
        </div>   
       <div class="col-md-4 col-sm-12 col-xs-12 my-col text-center">
        <h1>Новини</h1>
        <hr>
       </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
        </div> 
     </div>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
        </div>   
       <div class="col-md-4 col-sm-12 col-xs-12 my-col text-center">
        <p>Цей модуль знаходиться у розробці</p>
       </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
        </div> 
     </div>    
</div>    
  @endsection
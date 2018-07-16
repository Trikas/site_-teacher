
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            	@foreach($lesson as $less)
                <div class="post-preview">
                    <a href="{{url('/lesson/'.$less->id.'/'.$less->title)}}">
                        <h2 class="post-title">
                            Урок №{{$less->id}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$less->title}}
                        </h3>
                    </a>
                    <p class="post-meta">автор <a href="#">{{$less->author}} </a>{{$less->date}}</p>
                </div>
                <hr>
                @endforeach
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
  @endsection
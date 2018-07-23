@extends('layouts.layout')
@section('content')

            @foreach($lesson as $less)
             {!!$less->content!!}
             @endforeach

<p class="copyright text-muted text-center" >Для відкриття презинтації на весь екран <a href="https://docs.google.com/presentation/d/e/2PACX-1vQjp9T0cG7ziJILfp2HxWcAUUv5T2LbsdfKuchzSfSlrJWh3PHDoZB7UbuX1kzSyoA5ztgeFEhoaeDM/pub?start=false&loop=false&delayms=3000" >натисніть</a></p>
<hr>
@endsection

@extends('layouts.layout')
@section('content')
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($lesson as $less)
             {!!$less->content!!}
             @endforeach
            </div>
        </div>
    </div>
</article>

<hr>
@endsection

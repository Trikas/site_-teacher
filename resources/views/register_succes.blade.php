@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	<a href="{{url('/admin')}}">Перейти в админ панель</a><p></p>
            	<h1>Пользователь зарегестрирован</h1>
        </div>
    </div>
</div>
@endsection

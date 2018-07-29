@extends('layouts.adminLayout')
@section('content_header')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Все уроки</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">Главная</a></li>
              <li class="breadcrumb-item">Уроки</li>
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Таблица всех уроков</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                  
                    <th>Заголовок</th>
                    <th>Подзаголовок</th>
                    <th>Дата создания</th>
                    <th>Автор</th>
                    <th style="width: 150px;">Редактировать</th>
                    <th>Удалить</th>
                  </tr>
                @foreach($lessons as $less)
                  <tr>
                    <td>{{$less->title1}}</td>
                    <td>{{$less->title2}}</td>
                    <td>{{$less->date}}</td>
                    <td>{{$less->author}} </td>
                	  <td><a href="{{route('post', $less->id)}}" button class="btn btn-default"><i class="fas fa-pencil-alt"></i></i></button></a></td>
                 <td><a href="{{route('postDel', $less->id)}}">Удалить</a></td>
                  </tr>
                   
                @endforeach 
                {{$lessons->render()}}
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection
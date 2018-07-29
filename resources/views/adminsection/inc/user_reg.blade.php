@extends('layouts.adminLayout')
@section('content_header')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Пользователи</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">Главная</a></li>
              <li class="breadcrumb-item">Пользователи</li>
            
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
                <h3 class="card-title">Зарегестрированные пользователи</h3>

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
                    <th>Имя Пользователя</th>
                    <th>email</th>
                    <th>дата регистрации</th>
                    <th>Отправить Смс</th>
                    <th>Удалить пользователя</th>
                  </tr>
                  <tr>
                  @foreach($user_reg as $user)
                  @if($user->id==1)             
                    <td>{{$user->name}}:admin</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>-----</td>
                    <td>-----</td>
                  @else 
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>ссылка на форму отправки смс</td>
                    <td><a href="{{url('/admin/user_reg/'.$user->id)}}">Удалить пользователя</a></td>

                @endif
                   
                  </tr>
                @endforeach 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection
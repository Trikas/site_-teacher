@extends('layouts.adminLayout')
@section('content')
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

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
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Почта</th>
                    <th>Телефон</th>
                    <th>Зарегестрировать</th>
                    <th>Удалить</th>
                  </tr>
                @foreach($user_wait as $user)  
                  <tr>
                    <td>{{$user->familia}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->otchestvo}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td><a href="{{route('register650287', $user->id)}}">Зарегестрировать</a></td>
                    <td><a href="{{url('/admin/waiting_reg/'.$user->id)}}">удалить</a></td>
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
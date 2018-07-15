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
                    <th>ID</th>
                    <th>Страна</th>
                    <th>Город</th>
                    <th>Координаты</th>
                    <th>Время посещения</th>
                  </tr>
                @foreach($user_visits as $user)  
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->country_name}}</td>
                    <td>{{$user->region_name}}</td>
                    <td>{{$user->latitude_longitude}}</td>
                    <td>{{$user->date_visits}}</td>
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
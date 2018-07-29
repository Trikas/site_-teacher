@extends('layouts.adminLayout')
@section('reg_user_col')
  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              
                <h3>{{$count_user}}</h3>
             
                <p>Зарегестрировалось</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('/admin/user_reg')}}" class="small-box-footer">Больше Информации <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
@endsection    
@section('user_visits_col')      
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$count_visits}}</h3>

                <p>Посещений сайта</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{url('/admin/user_visits')}}" class="small-box-footer">Больше информации<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
@endsection
@section('wait_reg_users')      
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$count_wait}}</h3>

                <p>Ожидают регистрации</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{url('/admin/waiting_reg')}}" class="small-box-footer">Больше информации<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
@endsection
   @section('chat_head')
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title" id="destination">test</h3>
                <div class="card-tools">
                  <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                          data-widget="chat-pane-toggle">
                    <i class="fa fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
@endsection

@section('users-list')
   <div class="card">
                <!-- users-list  -->
                  <div class="card-header">
                    <h3 class="card-title">Чаты</h3>

                    <div class="card-tools">
                      <span class="badge badge-success">3 новых сообщений</span>
                      <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0" >
                    <ul class="users-list clearfix">
                    @foreach($user_reg as $user_regis)	
                      <li>
                        <img src="{{asset('assets/dist/img/user1-128x128.jpg')}}" alt="User Image" style="cursor: pointer;"></a>
                        <a class="users-list-name" href="#" style="cursor: pointer;">{{$user_regis->name}}
                        <span class="users-list-date"><span class="badge badge-succebass" style="font-size: 12px;">3</span></a>
                      </li>
                    @endforeach  
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
              </div>
@endsection

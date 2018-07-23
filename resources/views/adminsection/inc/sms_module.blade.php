@extends('layouts.adminLayout')
@section('content')
<div class="card direct-chat direct-chat-primary">
    <div class="card-header">
        <h3 class="card-title">Имя</h3>
        <div class="card-tools">
            <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
            <button type="button" class="btn btn-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
            data-widget="chat-pane-toggle">
                <i class="fa fa-comments"></i>
            </button>
            <button type="button" class="btn btn-tool" data-widget="remove">
                <i class="fa fa-times"></i>
            </button>
        </div>
    </div>
              <!-- /.card-header -->
         
    <div class="card-body">
                <!-- Conversations are loaded here -->
           
        <div class="direct-chat-messages">
             <!-- Message. Default to the left -->
            @foreach($all_message as $all_msg)   
            @if($all_msg->user_send==$user)        
            <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name float-right">{{$user}}</span>
                      <span class="direct-chat-timestamp float-left">{{$all_msg->date_send}}</span>
                    </div>
                    <img class="direct-chat-img" src="{{asset('assets/dist/img/user3-128x128.jpg')}}" alt="message user image">
                    <div class="direct-chat-text">
                      {{$all_msg->content}}
                    </div>
                  </div>
            @else
            <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name float-left">{{$all_msg->user_send}}</span>
                      <span class="direct-chat-timestamp float-right">{{$all_msg->date_send}}</span>
                    </div>
                    <img class="direct-chat-img" src="{{asset('assets/dist/img/user3-128x128.jpg')}}" alt="message user image">
                    <div class="direct-chat-text">
                        {{$all_msg->content}}
                    </div>
                  </div>
            @endif           
            @endforeach <!--/.direct-chat-messages-->
        </div> <!-- /.direct-chat-pane -->
    </div>
     
    <div class="card-footer">
        <form action="#" method="post">
            <div class="input-group">
                <input type="text" name="message" placeholder="Отправить смс" class="form-control type_sms">
                <span class="input-group-append">
                    <button type="button" class="btn btn-primary send_sms">Отправить</button>
                </span>
            </div>
        </form>
    </div>
           <!-- /.card-footer-->
</div>
@endsection  

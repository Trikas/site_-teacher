@extends('layouts.adminLayout')
@section('content')
<div class="card direct-chat direct-chat-primary" id="sms">
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
           
        
    </div>
     
    <div class="card-footer">
        <form method="post">
              @csrf
            <div class="input-group">
                <textarea id="type_sms" name="message" placeholder="Отправить смс" class="form-control"></textarea>
                <span class="input-group-append">
                    <button type="button" class="btn btn-primary" id="send_sms">Отправить</button>
                </span>
            </div>
        </form>
    </div>   <!-- /.card-footer-->
</div>
@endsection  

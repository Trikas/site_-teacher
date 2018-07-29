
@extends('layouts.adminLayout')
@section('content_header')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Редактор Урока</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">Главная</a></li>
              <li class="breadcrumb-item">Редактор Урока</li>
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
<form action="/admin/make_lesson/to_bd" method="post">
  @csrf
  <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
               
                <small>Просто и быстро</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
               <!--  <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button> -->
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <label for="exampleInputEmail1">Заголовок урока</label>
                <textarea type="text" class="form-control" name="title1" placeholder="Название" value="{{$title1}}">{{$title1}}</textarea><br>
                <label for="exampleInputEmail1">Подзаголовок урока</label>
                <textarea type="text" class="form-control" name="title2" placeholder="Название" value="{{$title2}}">{{$title2}}</textarea><br>
                <label for="exampleInputEmail1">Выбрать урок</label>
                <p><select size="4" multiple name="hero[]">
                <option value="less_read">Урок читання</option>
                <option value="less_mat">Урок математики</option>
                <option value="less_lang">Ураїнська мова</option>
                <option value="less_art">Природознавство та мистецтво</option>
                </select></p>
           
                <textarea id="editor" name="txt" cols="100" rows="20" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$lesson}}</textarea>
                    
                    <script type="text/javascript">
                    var editor = CKEDITOR.replace('editor',{height: 500});
                    AjexFileManager.init({returnTo: 'ckeditor', editor: editor});
                    </script>
              </div>
             
              <input type="hidden" name="id" value="{{$id}}">
              <input type="submit" class="btn btn-block btn-primary btn-sm" value="Опубликовать">
            </div>
          </div>
</form>          


@endsection

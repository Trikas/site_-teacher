@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Адміністація сайту розгляне вашу заявку та надішле вам смс с логіном та паролем для входу</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ім'я</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="famil" class="col-md-4 col-form-label text-md-right">Прізвище</label>

                            <div class="col-md-6">
                                <input id="famil" type="text" class="form-control" name="famil" value="{{ old('name') }}" required autofocus>    
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="otch" class="col-md-4 col-form-label text-md-right">По батькові</label>

                            <div class="col-md-6">
                                <input id="otch" type="text" class="form-control" name="otch" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Пошта</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Телефон</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div> 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Надіслати
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

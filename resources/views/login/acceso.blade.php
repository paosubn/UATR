@extends('template.main')

@section('content')
@if(isset($mensaje))
<div class="alert alert-danger">
    <ul>
        <li>{{ $mensaje }}</li>
    </ul>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio de sesión') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('verificar') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="user" class="col-sm-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="user" type="user" class="form-control{{ $errors->has('user') ? ' is-invalid' : '' }}" name="user" value="{{ old('user') }}" required autofocus>

                                @if ($errors->has('user'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="grupo" class="col-sm-4 col-form-label text-md-right">{{ __('Grupo') }}</label>
                            
                            <div class="col-md-6">
                                <select class="form-control" id="grupo" name="grupo">
                                    @foreach($users as $user)
                                    <option value="{{$user->grupo}}">{{$user->descripcion}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('grupo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('grupo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
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

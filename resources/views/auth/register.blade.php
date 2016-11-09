@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Fecha de nacimiento</label>

                            <div class="col-md-6">
                                <input id ="fecha" type="text" class="form-control datepicker" name="fecha">
                                @if ($errors->has('fecha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha') }}</strong>
                                    </span>
                                @endif
                            </div><span class="glyphicon glyphicon-th"></span>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Genero</label>

                            <div class="col-md-6">
                              <label class="radio-inline">
                                <input type="radio" name="genero" id="genero" value="M"> Hombre
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="genero" id="genero" value="F"> Mujer
                              </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Sobre mi</label>

                            <div class="col-md-6">
                                <textarea name="sobremi" cols="50" rows="10"></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-md-4 control-label">País</label>

                            <div class="col-md-6">
                              <select name="parentProj">
                                {{-- @foreach($projects as $project) --}}
                                 {{-- <option value="{{ $project->id }}">{{ $project->projectName}}</option> --}}
                                {{-- @endforeach --}}
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="redirect/facebook" class="btn btn-block btn-social btn-facebook"><span class="fa fa-facebook"></span>Facebook</a>
                                <a href="redirect/google"class="btn btn-block btn-social btn-google"><span class="fa fa-google"></span>Google+</a>
                                <a href="redirect/twitter"class="btn btn-block btn-social btn-twitter"><span class="fa fa-twitter"></span>Twitter</a>
                                {{-- <a href="redirect/linkedin"class="btn btn-block btn-social btn-linkedin"><span class="fa fa-linkedin"></span>Google+</a> --}}
                                {{-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> --}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$('.datepicker').datepicker({
 format: "dd-mm-yyyy",
 language: "es",
 autoclose: true
});
</script>
@endsection

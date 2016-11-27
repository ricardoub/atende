@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <nav class="navbar navbar-default border-0 margin-bottom-0">
          <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-menu-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <h1 class="margin-top-5">
              <i class="fa fa-user"></i>
              Editar Usuário <small>- {{ $user->name }}</small>
            </h1>
          </div>

          <div class="btn-group pull-right margin-top-10" >
            @if (!Auth::guest())
              <a href="{{ route('users.index') }}" class="btn btn-default" >
                <i class="fa fa-reply fa-fw"></i>
                <span class="hidden-xs hidden-sm">
                  Voltar
                </span>
              </a>
            @endif
          </div>

        </nav>
      </div>

      <div class="panel-body">

        @include('partials.messages')

        {{ Form::model($user, ['route' => ['users.update', $user->id] ]) }}

          @include('users.partials.form')

          <hr>

          @include('users.partials.form-buttons')

        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@endsection

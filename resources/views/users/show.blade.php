@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading padding-bottom-0">
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
            <h3 class="margin-top-10 margin-bottom-0">
              <i class="fa fa-user"></i>
              <span class="hidden-xs hidden-sm">
                  Exibir Usuário <small>-</small>
              </span>
              <small> {{ $user->name }}</small>
          </h3>
          </div>

          <div class="collapse navbar-collapse" id="app-menu-collapse">
              <div class="btn-group pull-right margin-top-0" >
                  @if (!Auth::guest())
                  <a href="{{ route('users.index') }}" class="btn btn-default" >
                      <i class="fa fa-reply fa-fw"></i>
                      <span class="hidden-xs hidden-sm">
                          Voltar
                      </span>
                  </a>
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-default" >
                      <i class="fa fa-edit fa-fw"></i>
                      <span class="hidden-xs hidden-sm">
                          Editar
                      </span>
                  </a>
                  <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-default btn-delete" >
                      <i class="fa fa-trash fa-fw"></i>
                      <span class="hidden-xs hidden-sm">
                          Excluir
                      </span>
                  </a>
                  @endif
              </div>
          </div>
        </nav>
      </div>

      <div class="panel-body">

        @include('partials.messages')

        {{ Form::model($user, ['route' => ['users.update', $user->id] ]) }}

          @include('users.partials.form')

        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script src="/js/button-delete.js"></script>
@stop

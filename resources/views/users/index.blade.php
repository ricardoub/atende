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
              Usuários
            </h1>
          </div>

          <div class="collapse navbar-collapse" id="app-menu-collapse">
            <div class="btn-group pull-right margin-top-10" >
              @if (!Auth::guest())
              <a href="{{ route('home') }}" class="btn btn-default" >
                <i class="fa fa-home fa-fw"></i>
                Voltar
              </a>
              <a href="{{ route('users.create') }}" class="btn btn-default" >
                <i class="fa fa-plus fa-fw"></i>
                Incluir
              </a>
              @endif
            </div>
          </div>
        </nav>
      </div>

      <div class="panel-body">


        <table class="table table-bordered table-stripped">
          <thead>
            <tr>
              <th>ID</th>
              <th class="col-md-6">Nome</th>
              <th class="col-md-5">E-mail</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td class="text-right">{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td >{{$user->email}}</td>
              <td width="%1" nowrap="nowrap">
                @if (!Auth::guest())
                <a href="{{ route('users.update', $user->id) }}" class="btn btn-default btn-xs" >
                  <i class="fa fa-plus fa-fw"></i>
                  Alterar
                </a>
                <a href="{{ route('users.delete', $user->id) }}" class="btn btn-default btn-xs btn-remover" >
                  <i class="fa fa-plus fa-fw"></i>
                  Excluir
                </a>
                @endif
              </td>
            </tr>
            @endforeach()
          </tbody>
        </table>
        <div class="text-center">
          {{ $users->render() }}
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('scripts')
  <script src="/js/users.js"></script>
@stop

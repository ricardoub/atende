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
<<<<<<< HEAD
                <span class="hidden-xs hidden-sm">
                  Voltar
                </span>
              </a>
              <a href="{{ route('users.create') }}" class="btn btn-default" >
                <i class="fa fa-plus fa-fw"></i>
                <span class="hidden-xs hidden-sm">
                  Incluir
                </span>
=======
                Voltar
              </a>
              <a href="{{ route('users.create') }}" class="btn btn-default" >
                <i class="fa fa-plus fa-fw"></i>
                Incluir
>>>>>>> Users
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
<<<<<<< HEAD
              <th class="col-lg-5 col-md-5">Nome</th>
              <th class="col-lg-5 col-md-4">E-mail</th>
              <th class="col-lg-2 col-md-3 col-sm-2">Ações</th>
=======
              <th class="col-md-6">Nome</th>
              <th class="col-md-5">E-mail</th>
              <th>Ações</th>
>>>>>>> Users
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td class="text-right">{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td >{{$user->email}}</td>
<<<<<<< HEAD
              <td>
                <div class="btn-group margin-top-0" >
                  @if (!Auth::guest())
                  <a href="{{ route('users.update', $user->id) }}" class="btn btn-default btn-sm" >
                    <i class="fa fa-edit fa-fw"></i>
                    <span class="hidden-xs hidden-sm">
                      Alterar
                    </span>
                  </a>
                  <a href="{{ route('users.delete', $user->id) }}" class="btn btn-default btn-sm btn-remover" >
                    <i class="fa fa-trash fa-fw"></i>
                    <span class="hidden-xs hidden-sm">
                      Excluir
                    </span>
                  </a>
                  @endif
                </div>
                @if (!Auth::guest())

=======
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
>>>>>>> Users
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

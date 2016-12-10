@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="Icon group">
                        <button type="button" class="btn btn-default" disabled>
                            <i class="fa fa-user"></i>
                            <span class="hidden-xs hidden-sm"> Usuários </span>
                        </button>
                        <button type="button" class="btn btn-default" disabled>
                            Listar
                        </button>
                    </div>
                    <div class="btn-group pull-right" role="group" aria-label="Action group">
                        @if (!Auth::guest())
                        <a href="{{ route('home') }}" class="btn btn-default" >
                          <i class="fa fa-home fa-fw"></i>
                          <span class="hidden-xs hidden-sm">
                            Voltar
                          </span>
                        </a>
                        <a href="{{ route('users.incluir') }}" class="btn btn-default" >
                          <i class="fa fa-plus fa-fw"></i>
                          <span class="hidden-xs hidden-sm">
                            Incluir
                          </span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="panel-body">
                @include('partials.messages')
                @include('users.partials.table')
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
  <script src="/js/users.js"></script>
@stop

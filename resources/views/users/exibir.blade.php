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
                            Exibir
                        </button>
                    </div>
                    <div class="btn-group pull-right" role="group" aria-label="Action group">
                        @if (!Auth::guest())
                        <a href="{{ route('users.index') }}" class="btn btn-default" >
                            <i class="fa fa-reply fa-fw"></i>
                            <span class="hidden-xs hidden-sm"> Voltar </span>
                        </a>
                        <a href="{{ route('users.editar', $user->id) }}" class="btn btn-default" >
                            <i class="fa fa-edit fa-fw"></i>
                            <span class="hidden-xs hidden-sm"> Editar </span>
                        </a>
                        <button type="button" class="btn btn btn-default"
                            data-toggle="modal" data-target="#modalExcluir">
                            <i class="fa fa-trash fa-fw"></i>
                            <span class="hidden-xs hidden-sm"> Excluir </span>
                        </button>
                        @endif
                    </div>
                </div>
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
@include('users.partials.modal-excluir')
@endsection
@section('scripts')
    <script src="/js/button-delete.js"></script>
@stop

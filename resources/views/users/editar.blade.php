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
                            Editar
                        </button>
                    </div>
                    <div class="btn-group pull-right" role="group" aria-label="Action group">
                        @if (!Auth::guest())
                        <a href="{{ route('users.index') }}" class="btn btn-default" >
                            <i class="fa fa-reply fa-fw"></i>
                            <span class="hidden-xs hidden-sm"> Voltar </span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="panel-body">
                @include('partials.messages')
                {{ Form::model($user, ['route' => ['users.update', $user->id] ]) }}
                    @include('users.partials.form')
                    <hr>
                    @include('users.partials.form-password')
                    <hr>
                    @include('users.partials.form-buttons')
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection

<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('password', 'Senha', ['class' => 'form-label']) }}
        {{ Form::password('password', ['class' => 'form-control', 'disabled' => $formEdit]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('password_confirmation', 'Confirmar senha', ['class' => 'form-label']) }}
        {{ Form::password('password_confirmation', ['class' => 'form-control', 'disabled' => $formEdit]) }}
    </div>
</div>

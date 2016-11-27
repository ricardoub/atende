<div class="form-group">
  {{ Form::label('name', 'Nome completo', ['class' => 'form-label']) }}
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome completo', 'disabled' => $disabled]) }}
</div>

<div class="form-group">
  {{ Form::label('email', 'E-mail', ['class' => 'form-label']) }}
  {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email@exemplo.com', 'disabled' => $disabled]) }}
</div>

<div class="form-group">
  {{ Form::label('password', 'Senha', ['class' => 'form-label']) }}
  {{ Form::password('password', ['class' => 'form-control', 'disabled' => $disabled]) }}
</div>

<div class="form-group">
  {{ Form::label('password_confirmation', 'Confirmar senha', ['class' => 'form-label']) }}
  {{ Form::password('password_confirmation', ['class' => 'form-control', 'disabled' => $disabled]) }}
</div>

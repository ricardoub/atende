<div class="form-group">
  {{ Form::label('name', 'Nome completo', ['class' => 'form-label']) }}
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome completo', 'disabled' => $formEdit]) }}
</div>

<div class="form-group">
  {{ Form::label('email', 'E-mail', ['class' => 'form-label']) }}
  {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email@exemplo.com', 'disabled' => $formEdit]) }}
</div>

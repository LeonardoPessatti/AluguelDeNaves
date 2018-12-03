<!-- Nome Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Raça Field -->
<div class="form-group col-sm-12">
    {!! Form::label('raça', 'Raça:') !!}
    {!! Form::text('raça', null, ['class' => 'form-control']) !!}
</div>

<!-- Planeta Origem Field -->
<div class="form-group col-sm-12">
    {!! Form::label('planeta_origem', 'Planeta Origem:') !!}
    {!! Form::text('planeta_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('modelClientes.index') !!}" class="btn btn-default">Cancelar</a>
</div>

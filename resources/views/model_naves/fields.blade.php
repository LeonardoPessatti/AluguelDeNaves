<!-- Placa Field -->
<div class="form-group col-sm-12">
    {!! Form::label('placa', 'Placa:') !!}
    {!! Form::text('placa', null, ['class' => 'form-control']) !!}
</div>

<!-- Modelo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ano Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ano', 'Ano:') !!}
    {!! Form::text('ano', null, ['class' => 'form-control']) !!}
</div>

<!-- Pressao Maxima Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pressao_maxima', 'Pressão Máxima:') !!}
    {!! Form::text('pressao_maxima', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('modelNaves.index') !!}" class="btn btn-default">Cancelar</a>
</div>

<!-- Naves Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('clientes_id', 'ID do cliente:') !!}
    {!! Form::number('clientes_id', null, ['class' => 'form-control']) !!}
</div>
<!-- Naves Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('naves_id', 'Naves Id:') !!}
    {!! Form::number('naves_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Field -->
<div class="form-group col-sm-12">
    {!! Form::label('hora', 'Hora:') !!}
    {!! Form::date('hora', null, ['class' => 'form-control','type' => 'date']) !!}
</div>

<!-- Planeta Field -->
<div class="form-group col-sm-12">
    {!! Form::label('planeta', 'Planeta:') !!}
    {!! Form::text('planeta', null, ['class' => 'form-control']) !!}
</div>

<!-- Finalizado Field -->
<div class="form-group col-sm-12">
    {!! Form::label('finalizado', 'Finalizado:') !!}
    {!! Form::date('finalizado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('modelAluguels.index') !!}" class="btn btn-default">Cancelar</a>
</div>

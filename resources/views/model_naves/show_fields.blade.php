<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $modelNaves->id !!}</p>
</div>

<!-- Placa Field -->
<div class="form-group">
    {!! Form::label('placa', 'Placa:') !!}
    <p>{!! $modelNaves->placa !!}</p>
</div>

<!-- Modelo Field -->
<div class="form-group">
    {!! Form::label('modelo', 'Modelo:') !!}
    <p>{!! $modelNaves->modelo !!}</p>
</div>

<!-- Ano Field -->
<div class="form-group">
    {!! Form::label('ano', 'Ano:') !!}
    <p>{!! $modelNaves->ano !!}</p>
</div>

<!-- Pressao Maxima Field -->
<div class="form-group">
    {!! Form::label('pressao_maxima', 'Pressao Maxima:') !!}
    <p>{!! $modelNaves->pressao_maxima !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $modelNaves->deleted_at !!}</p>
</div>


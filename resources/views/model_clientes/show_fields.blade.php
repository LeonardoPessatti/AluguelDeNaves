<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $modelClientes->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $modelClientes->nome !!}</p>
</div>

<!-- Sexo Field -->
<div class="form-group">
    {!! Form::label('sexo', 'Sexo:') !!}
    <p>{!! $modelClientes->sexo !!}</p>
</div>

<!-- Raça Field -->
<div class="form-group">
    {!! Form::label('raça', 'Raça:') !!}
    <p>{!! $modelClientes->raça !!}</p>
</div>

<!-- Planeta Origem Field -->
<div class="form-group">
    {!! Form::label('planeta_origem', 'Planeta Origem:') !!}
    <p>{!! $modelClientes->planeta_origem !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $modelClientes->deleted_at !!}</p>
</div>


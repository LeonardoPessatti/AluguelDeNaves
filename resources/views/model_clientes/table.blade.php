<table class="table table-responsive" id="modelClientes-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Sexo</th>
        <th>Raça</th>
        <th>Planeta Origem</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($modelClientes as $modelClientes)
        <tr>
            <td>{!! $modelClientes->nome !!}</td>
            <td>{!! $modelClientes->sexo !!}</td>
            <td>{!! $modelClientes->raça !!}</td>
            <td>{!! $modelClientes->planeta_origem !!}</td>
            <td>
                {!! Form::open(['route' => ['modelClientes.destroy', $modelClientes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('modelClientes.show', [$modelClientes->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('modelClientes.edit', [$modelClientes->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-pencil-alt"></i></a>
                    {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza??')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<table class="table table-responsive" id="modelAluguels-table">
    <thead>
        <tr>
            <th>Naves Id</th>
        <th>Hora</th>
        <th>Planeta</th>
        <th>Finalizado</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($modelAluguels as $modelAluguel)
        <tr>
            <td>{!! $modelAluguel->naves_id !!}</td>
            <td>{!! $modelAluguel->hora !!}</td>
            <td>{!! $modelAluguel->planeta !!}</td>
            <td>{!! $modelAluguel->finalizado !!}</td>
            <td>
                {!! Form::open(['route' => ['modelAluguels.destroy', $modelAluguel->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('modelAluguels.show', [$modelAluguel->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('modelAluguels.edit', [$modelAluguel->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-pencil-alt"></i></a>
                    {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

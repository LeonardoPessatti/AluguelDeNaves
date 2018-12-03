<table class="table table-responsive" id="modelNaves-table">
    <thead>
        <tr>
            <th>Placa</th>
        <th>Modelo</th>
        <th>Ano</th>
        <th>Pressão Máxima</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($modelNaves as $modelNaves)
        <tr>
            <td>{!! $modelNaves->placa !!}</td>
            <td>{!! $modelNaves->modelo !!}</td>
            <td>{!! $modelNaves->ano !!}</td>
            <td>{!! $modelNaves->pressao_maxima !!}</td>
            <td>
                {!! Form::open(['route' => ['modelNaves.destroy', $modelNaves->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('modelNaves.show', [$modelNaves->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('modelNaves.edit', [$modelNaves->id]) !!}" class='btn btn-default btn-xs'><i class="fas fa-pencil-alt"></i></a>
                    {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza??')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

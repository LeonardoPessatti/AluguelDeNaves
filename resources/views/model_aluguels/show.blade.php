@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Aluguel
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('model_aluguels.show_fields')
                    <a href="{!! route('modelAluguels.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection

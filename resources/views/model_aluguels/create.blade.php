@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Novo Aluguel
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'modelAluguels.store']) !!}

                        @include('model_aluguels.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

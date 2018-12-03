@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Aluguel
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($modelAluguel, ['route' => ['modelAluguels.update', $modelAluguel->id], 'method' => 'patch']) !!}

                        @include('model_aluguels.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

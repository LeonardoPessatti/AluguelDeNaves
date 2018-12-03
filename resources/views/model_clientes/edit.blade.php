@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Clientes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($modelClientes, ['route' => ['modelClientes.update', $modelClientes->id], 'method' => 'patch']) !!}

                        @include('model_clientes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Naves
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($modelNaves, ['route' => ['modelNaves.update', $modelNaves->id], 'method' => 'patch']) !!}

                        @include('model_naves.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

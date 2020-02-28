@extends('layout')
@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-info">
                {{Session::get('success')}}
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo movil</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('movil.store') }}" role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-md-8 pt-4">
                                    
                                        <input type="text" name="modelo" id="modelo" class="form-control input-sm"
                                            placeholder="Modelo del movil">
                                   
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8 pt-4">
                                  
                                        <input type="text" name="marca" id="marca" class="form-control input-sm"
                                            placeholder="Marca del movil">
                                  
                                </div>
                           

                          
                            <div class="col-xs-12 col-sm-10 col-md-8 pt-4">
                           
                            <input type="number" name="rom" id="rom" class="form-control input-sm"
                                            placeholder="Rom del movil">
                           
                            </div>
                           
                                <div class="col-xs-12 col-sm-10 col-md-8 pt-4">
                                   
                                        <input type="number" name="ram" id="ram" class="form-control input-sm"
                                            placeholder="Ram del movil">
                                    
                                </div>
                                <div class="col-xs-12 col-sm-10 col-md-8 pt-4">
                                  
                                        <input type="number" name="bateria" id="bateria" class="form-control input-sm"
                                            placeholder="Bateria del movil">
                                   
                                </div>
                        
                                <div class="col-xs-12 col-sm-12 col-md-8 pt-4">
                            <input type="number" name="precio" id="precio" class="form-control input-sm"
                                            placeholder="Precio del movil">                            </div>
                                            </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 pt-5">
                                    <input type="submit" value="Guardar" class="btn btn-secondary btn-block">
                                    <a href="{{ route('movil.index') }}" class="btn btn-danger btn-block">Atrás</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection
@extends('admin.plantilla.master')

@section('titulo','Clientes')

@section('breadcrumb')
    <li class="breadcrumb-item active"><i class="fas fa-user-lock"></i> Listado Clientes</li>
    <li class="breadcrumb-item active"><i class="fas fa-user-lock"></i> Registrar Cliente</li>
@stop 

@section('titulo-modulo','Clientes')

@section('contenido')

<div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><strong>Registrar Cliente</strong></h3>                
                </div>
              <!-- /.card-header -->
              
                <!-- form start -->
                {!! Form::open(['url' => '/admin/cliente/registrar', 'files' => true]) !!}

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">                                            
                                <div class="form-group">                                    
                                    <label for="exampleInputEmail1">Primer Nombre</label>                                    
                                    <input type="text" name="p_nombre" class="form-control form-control-border border-width-2" id="p_nombre" placeholder="primer nombre">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Segundo Nombre</label>
                                    <input type="text" name="s_nombre" class="form-control form-control-border border-width-2" id="s_nombre" placeholder="segundo nombre">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Primer Apellido</label>
                                    <input type="text" name="p_apellido" class="form-control form-control-border border-width-2" id="p_apellido" placeholder="primer apellido">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Segundo Apellido</label>
                                    <input type="text" name="s_apellido" class="form-control form-control-border border-width-2" id="s_apellido" placeholder="segundo apellido">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nit</label>
                                    <input type="text" name="nit" class="form-control form-control-border border-width-2" id="nit" placeholder="nit">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Celular Contacto</label>
                                    <input type="text" name="contacto" class="form-control form-control-border border-width-2" id="contacto" placeholder="contacto">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" name="fecha_nac" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                

                                <div class="form-group">
                                    <label>Red Social Contacto</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                        <option value="1" selected="selected">Instagram</option>
                                        <option value="2" >Facebook</option>
                                        <option value="3" >WhatsApp</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Usuario Red Social</label>
                                    <input type="text" name="usuario_red_social" class="form-control form-control-border border-width-2" id="usuario_red_social" placeholder="usuario red social">
                                </div>
                            </div>
                        </div>                                     
                    </div>
                <!-- /.card-body -->

                    <div class="card-footer">
                        {!! Form::submit('Guardar', ['class'=>'btn btn-success mtop16']) !!}
                        
                        <a href="{{ url('/admin/clientes') }}" class="btn btn-warning">Regresar</a>
                    
                    </div>
                {!! Form::close() !!}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

@stop
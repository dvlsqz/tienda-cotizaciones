@extends('admin.plantilla.master')

@section('titulo','Clientes')

@section('breadcrumb')
    <li class="breadcrumb-item active"><i class="fas fa-user-lock"></i> Listado Clientes</li>
@stop 

@section('titulo-modulo','Clientes')

@section('contenido')

<div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><strong>Listado de Clientes</strong></h3>
                <div class="float-right d-none d-sm-block">
                 <a href="{{ url('/admin/cliente/registrar') }}" class="btn btn-block btn-outline-primary btn-sm">Registrar</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><strong> OPCIONES </strong></th>
                    <th><strong> NIT </strong></th>
                    <th><strong> NOMBRE </strong></th>
                    <th><strong> CONTACTO </strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                  <tfoot>
                  <tr>
                    <th><strong> OPCIONES </strong></th>
                    <th><strong> NIT </strong></th>
                    <th><strong> NOMBRE </strong></th>
                    <th><strong> CONTACTO </strong></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

@stop
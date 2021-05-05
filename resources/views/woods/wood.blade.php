@extends('layouts.base')

<div class="container mt-5">   
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Pedidos</h2>
            <a class="btn btn-success mb-4" href="{{url('/form')}}">Agregar nuevo pedido</a>
            <table class="table table-borderer table-striped text-center">
                <thead>
                  <tr>
                    <th>Tipo de madera</th>
                    <th>Largo</th>
                    <th>Ancho</th>
                    <th>Espesor</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($woods as $wood)
                  <tr>
                    <td>{{$wood->nombre}}</td>
                    <td>{{$wood->largo_cm}}</td>
                    <td>{{$wood->ancho_cm}}</td>                   
                    <td>{{$wood->espesor_mm}}</td>
                    <td>{{$wood->cantidad}}</td>
                    <td>
                        <a href="{{route('editform',$wood->id)}}" class="btn btn-primary">Modificar</a>
                        <form action="{{route('delete',$wood->id)}}" method="POST">
                            @csrf   @method('DELETE')
                            <button type="submit" onclick="return comfirm('¿borrar?') "class="btn btn-danger">borrar</button>
                        
                        </form>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
            </table>
            {{$woods->links()}}
        </div>
    </div>
</div>
@extends('layouts.base')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-7 mt-5">
            <div class="card">
                <form action="{{ Route('edit',$woods->id) }}" method="POST">    
                @csrf @method('PATCH')
                    <div class="card-header text-center">Modificar pedido</div>
                    <div class="card-body">
                        <div class="row form-group"> 
                            <label for="" class="col-2">Tipo de Madera</label>
                            <input type="text" name="nombre" class="form-control col-md-9" value="{{$woods->nombre}}">
                        </div>
                        <div class="row form-group"> 
                            <label for="" class="col-2">Largo cm</label>
                            <input type="text" name="largo_cm" class="form-control col-md-9" value="{{$woods->largo_cm}}"> 
                        </div>
                        <div class="row form-group"> 
                            <label for="" class="col-2">Ancho cm</label>
                            <input type="text" name="ancho_cm" class="form-control col-md-9" value="{{$woods->ancho_cm}}">
                        </div>
                        <div class="row form-group"> 
                            <label for="" class="col-2">Espesor mm</label>
                            <input type="text" name="espesor_mm" class="form-control col-md-9" value="{{$woods->espesor_mm}}">
                        </div>
                        <div class="row form-group"> 
                            <label for="" class="col-2">Cantidad</label>
                            <input type="text" name="cantidad" class="form-control col-md-9" value="{{$woods->cantidad}}">
                        </div>
                        <div class="row form-group"> 
                            <button type="submit" class="btn btn-success col-md-9 offset-2">Guardar</button>
                        </div>
                    </div>
                
                
                </form>
            </div> 
        </div>
    </div>
    <a class="btn btn-primary mt-5" href="{{ url ('/')}}">volver</a>
</div>
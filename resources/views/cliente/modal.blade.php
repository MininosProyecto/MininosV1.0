<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
     id="modal-delete-{{$cli->id_cliente}}">

    {!! Form::open(array('method'=>'DELETE','action'=>array('ClienteController@destroy',$cli->id_cliente))) !!}
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Eliminar Cliente</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>

            </div>

            <div class="modal-body">
                <p style="color: #333333; font-size: medium">Confirme si desea eliminar el cliente: {{$cli->nombre_cliente}}</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

</div>

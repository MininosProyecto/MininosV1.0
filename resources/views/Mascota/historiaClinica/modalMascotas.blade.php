<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Consultar informacion mascotas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="{{url('/Mascota/diagnostico')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Diagnosticos</button></a>
                    <a href="{{url('/Mascota/tratamiento')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Tratamientos</button></a>
                    <a href="{{url('/Mascota/notasProgreso')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Notas Progreso</button></a>
                    <a href="{{url('/Mascota/ExamenFisico')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Examenes Fisicos</button></a>
                    <a href="{{url('/Mascota/infoAdd')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion Adicional</button></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

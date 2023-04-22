<div class="row" id="formulario" style="display:none">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Seleccione la Operación a Realizar</h4>
                <br><br>
                <div class="row">
                    <x-select.select-v2 class="col-md-3" for="id_persona" name="id_persona" id="id_persona" title="Seleccionar Paciente">
                    </x-select.select-v2>
                    <div class="col-md-1">
                        <div class="form-row">
                            <label for="edad"><b>Edad</b></label>
                            <input type="text" class="form-control" name="edad" id="edad" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-row">
                            <label for="usuario"><b>Usuario</b></label>
                            <input type="text" class="form-control" name="usuario" id="usuario" value='{{ Auth::user()->nombre }}' disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <ul class="p-0 mt-4 list-inline">
                            <li class="list-inline-item"><span class="badge badge-success px-3">Nivel 1</span></li>
                            <li class="list-inline-item">3 a 4 años</li>
                            <li class="list-inline-item"><span class="badge badge-danger px-3">Nivel 2</span></li>
                            <li class="list-inline-item">5 a 6 años</li>
                            <li class="list-inline-item"><span class="badge badge-warning px-3">Nivel 3</span></li>
                            <li class="list-inline-item">7 a 8 años</li>
                        </ul>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="mx-auto col-md-8">
                            <div id="div_tree"></div>
                    </div>
                </div> 
                <div class="row">
                    <div class="mx-auto col-md-8">
                        <x-table.table id="tblEjecutandoEjercicios">
                            <tr>
                                <th>Numero Pregunta</th>
                                <th>Tipo Test</th>
                                <th>Descripcion</th>
                                <th>Cuerpo</th>
                                <th>Imagen</th>
                                <th>Sonido</th>
                                <th>Respuestas</th>
                                <th>Respuesta</th>
                            </tr>
                        </x-table.table>
                    </div>
                </div> 
                <br>
            </div>
        </div>
        <div class="row">
            <div class="mx-auto">
                <br>
                <button class="btn btn-gradient-danger" id="btncancelarRegistro"  onclick="limpiarFormulario()"><i class="em em-no_entry"></i>Cancelar</button>
            </div>
        </div><br><br>
    </div>
</div>
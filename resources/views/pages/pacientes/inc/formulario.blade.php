<div class="row" id="formulario" style="display:none">
    <div class="col-sm-12">
        <input name="id_persona" id="id_persona" type="hidden">
        <x-bootstrap.card>
            <x-bootstrap.card-body>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mt-0 header-title">Registro y Gestión</h4>
                        <p class="text-muted mb-3">En este formulario se registran los datos</p>
                    </div>
                </div>
            </x-bootstrap.card-body>
        </x-bootstrap.card>

        <x-bootstrap.card>
            <x-bootstrap.card-body>
                    <div class="row">
                        <x-bootstrap.input class="col-md-6" for="nombres_apellidos" type="text" name="nombres_apellidos" id="nombres_apellidos" title="Nombres y Apellidos">
                            <x-message.feedback id="nombres_apellidos_ck"></x-message.feedback>
                        </x-bootstrap.input>
                        <x-select.select-v2 class="col-md-3" for="id_ciudad" name="id_ciudad" id="id_ciudad" title="Ciudad">
                            <x-message.feedback id="id_ciudad_ck"></x-message.feedback>
                        </x-select.select-v2>
                        <x-select.select-v2 class="col-md-3" for="id_barrio" name="id_barrio" id="id_barrio" title="Barrio">
                            <x-message.feedback id="id_barrio_ck"></x-message.feedback>
                        </x-select.select-v2>
                    </div>
                    <div class="row">
                        
                        <x-bootstrap.input class="col-md-3" for="ci_persona" type="number" name="ci_persona" id="ci_persona" title="Cedula de Identidad">
                            <x-message.feedback id="ci_persona_ck"></x-message.feedback>
                        </x-bootstrap.input>
                        <x-bootstrap.input class="col-md-3" for="edad" type="number" name="edad" id="edad" title="Edad">
                            <x-message.feedback id="edad_ck"></x-message.feedback>
                        </x-bootstrap.input>
                        <x-bootstrap.input class="col-md-3" for="telefono" type="number" name="telefono" id="telefono" title="Telefono">
                            <x-message.feedback id="telefono_ck"></x-message.feedback>
                        </x-bootstrap.input>
                        <x-bootstrap.input class="col-md-3" for="direccion" type="text" name="direccion" id="direccion" title="Dirección">
                            <x-message.feedback id="direccion_ck"></x-message.feedback>
                        </x-bootstrap.input>
                    </div>
                    
                    <div class="row">
                        {{-- <x-select.select-v2 class="col-md-3" for="id_tutor" name="id_tutor" id="id_tutor" title="Tutor/a">
                        </x-select.select-v2> --}}
                        <div class="col-md-3" id="tutores">
                            <div class="form-row">
                                <label for="id_tutor"><b>Tutor/a:</b></label>
                                <select name="id_tutor" id="id_tutor" class="selectpicker form-control show-tick required" data-live-search="true" data-style="btn-danger" width: 'auto' data-size="5">
                                    <option select value="">Seleccione un/a Tutor/a</option>
                                </select>                        
                            </div>
                        </div>
                        <div class="col-md-3" id="vinculo">
                            <div class="form-row">
                                <label for="vinculo_tutor"><b>Tutor/a:</b></label>
                                <select name="vinculo_tutor" id="vinculo_tutor" class="selectpicker form-control show-tick required" data-live-search="true" data-style="btn-warning" width: 'auto' data-size="5">
                                    <option select value="">Seleccione Vinculo</option>
                                </select>                        
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <div class="col-md-12">
                                <label for="" class=""><b></b></label>
                                <div class="form-group mb-0 row">
                                    <div class="form-check-inline my-1">
                                        <input class="form-check-input" type="checkbox" value="" id="es_paciente" name="es_paciente">
                                        <label class="form-check-label" for="es_paciente">Es Paciente?</label>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mx-auto">
                            <div class="col-md-12">
                                <div class="alert alert-success border-0" role="alert" id='paciente'>
                                    <strong>Esta Persona es un!</strong> Paciente.
                                </div>                           
                                <div class="alert alert-warning border-0" role="alert" id='tutor'>
                                    <strong>Esta Persona es un!</strong> Tutor.
                                </div>  
                            </div>
                        </div>
                    </div>
            </x-bootstrap.card-body>
        </x-bootstrap.card>

        <div class="row">
            <div class="mx-auto">
                <br>
                <button class="btn btn-gradient-success" id="btnGuardarRegistro" onclick="guardarRegistro()"><i class="em em-floppy_disk"></i> Guardar</button>
                <button class="btn btn-gradient-warning" id="btnActualizarRegistro" onclick="editarRegistro()"><i class="em em-floppy_disk"></i> Actualizar</button>
                <button class="btn btn-gradient-danger" id="btncancelarRegistro"  onclick="limpiarFormulario()"><i class="em em-no_entry"></i>Cancelar</button>
            </div>
        </div><br><br>
    </div>
</div>
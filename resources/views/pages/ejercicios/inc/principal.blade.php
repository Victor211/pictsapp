<div class="row" id="principal">
    <div class="col-12">
        <x-bootstrap.card>
            <x-bootstrap.card-body>
                <x-bootstrap.new-register color='success'/>

                <h4 class="mt-0 header-title">Registro y Gestión de Ejercicios y Practicas</h4>
                <p class="text-muted mb-3">Por favor seleccione la operación a realizar</p>
                <div class="row">
                    <!-- BUSCADOR -->
                </div>
                <br>
                <x-table.table id="tblEjercicios">
                    <tr>
                        <th>Opciones</th>
                        <th>Cedula</th>
                        <th>Paciente</th>
                        <th>Ejercicio</th>
                        <th>Tipo</th>
                        <th>Fecha</th>
                        <th>Usuario</th>
                        <th>Organización</th>
                        <th>Estado</th>
                    </tr>
                </x-table.table>
                <br>
                
            </x-bootstrap.card-body>
        </x-bootstrap.card>
    </div>
</div>

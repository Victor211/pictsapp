<div class="row" id="principal">
    <div class="col-12">
        <x-bootstrap.card>
            <x-bootstrap.card-body>
                <x-bootstrap.new-register color='pink'/>
                <h4 class="mt-0 header-title">Gestión de Pacientes y Tutores</h4>
                <p class="text-muted mb-3">Por favor ingrese los datos de pacientes y tutores</p>
                <div class="row">
                    <!-- BUSCADOR -->
                </div>
                <br>
                <x-table.table id="tblPacientesTutores">
                    <tr>
                        <th>Opciones</th>
                        <th>C.I.P</th>
                        <th>Nombres y Apellidos</th>
                        <th>es Paciente?</th>
                        <th>Edad</th>
                        <th>Barrio</th>
                        <th>Ciudad</th>
                        <th>Departamento</th>
                        <th>Estado</th>
                    </tr>
                </x-table.table>
                <br>
            </x-bootstrap.card-body>
        </x-bootstrap.card>
    </div>
</div>

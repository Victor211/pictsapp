<div class="row" id="principal">
    <div class="col-12">
        <x-bootstrap.card>
            <x-bootstrap.card-body>
                {{-- <x-bootstrap.new-register color='pink'/> --}}
                <h4 class="mt-0 header-title">Gestión de Barrios</h4>
                <p class="text-muted mb-3"></p>
                <div class="row">
                    <x-select.select-v2 class="col-md-3" for="id_ciudad" name="id_ciudad" id="id_ciudad" title="Ciudad">
                    </x-select.select-v2>
                </div>
                <br>
                <x-table.table id="tblBarrios">
                    <tr>
                        <th>Denominación</th>
                        <th>Ciudad</th>
                        <th>Departamento</th>
                        <th>Pais</th>
                        <th>Estado</th>
                    </tr>
                </x-table.table>
                <br>
            </x-bootstrap.card-body>
        </x-bootstrap.card>
    </div>
</div>

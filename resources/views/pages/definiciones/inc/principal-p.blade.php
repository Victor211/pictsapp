<div class="row" id="principal">
    <div class="col-12">
        <x-bootstrap.card>
            <x-bootstrap.card-body>
                {{-- <x-bootstrap.new-register color='pink'/> --}}
                <h4 class="mt-0 header-title">Gestión de Paises</h4>
                <p class="text-muted mb-3"></p>
                <div class="row">
                    <!-- BUSCADOR -->
                </div>
                <br>
                <x-table.table id="tblPaises">
                    <tr>
                        <th>Denominación</th>
                        <th>Codigo Alfabetico</th>
                        <th>Estado</th>
                    </tr>
                </x-table.table>
                <br>
            </x-bootstrap.card-body>
        </x-bootstrap.card>
    </div>
</div>

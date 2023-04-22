document.addEventListener('DOMContentLoaded', function() {
});

let tblCiudades = $("#tblCiudades").DataTable({
    aProcessing: true,
    aServerSide: true,
    bFilter: true,
    scrollX: false,
    language: {
        //"url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    dom: "Bfrtip",
    buttons: [{
        extend: 'pdf',
        title: 'Listado de Paises',
        filename: 'listado_paises',
        text: 'Exportar a PDF <i class="fa fa-file-pdf"></i>'
    },
    {
        extend: 'excelHtml5',
        title: 'Listado de Paises',
        filename: 'listado_paises',
        text: 'Exportar a Excel <i class="fa fa-file-excel"></i>'
    }
    ],
    lengthChange: false,
    bDestroy: true,
    iDisplayLength: 10,
    order: [
        [0, "desc"]
    ]
});

const initForm=()=>{
    listarCiudades()
}

const listarCiudades=()=>{
    $('#tblCiudades').DataTable().clear().draw();
    axios.get('listarciudades')
    .then(function (response) {
        let data=response.data
        console.log(data)
        let estado
        Array.from(data).forEach(function (ciudad) {
            if(ciudad.estado==1) {
                estado='<span class="badge badge-success mr-2 ml-0"><i class="far fa-thumbs-up"></i> Activo</span>'
            }else{
                estado='<span class="badge badge-danger mr-2 ml-0"><i class="far fa-thumbs-down"></i> Inactivo</span>'
            }
            tblCiudades.row.add([
                    ciudad.ciudad,
                    ciudad.departamento,
                    ciudad.pais,
                    estado,
            ]).draw(false);
        })
    })
    .catch(function (error) {
        console.log(error);
    })
    
}

initForm()
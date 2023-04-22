export const listarCiudades=()=>{
    axios.get('listarciudades')
    .then(function (response) {
        let ciudades=response.data
        //console.log(ciudades)
        ciudades.forEach(ciudad=>{
            document.getElementById("id_ciudad").innerHTML += "<option value='"+ciudad.id_ciudad+"'>"+ciudad.ciudad+"</option>";           
        })
        $('#id_ciudad').selectpicker('refresh')
        $('#id_ciudad').val('');
        $('#id_ciudad').selectpicker('render');
    })
    .catch(function (error) {
      console.log(error);
    })
}

export const listarTutores=()=>{
    axios.get('listartutores')
    .then(function (response) {
        let tutores=response.data
        //console.log(tutores)
        tutores.forEach(tutor=>{
            document.getElementById("id_tutor").innerHTML += "<option value='"+tutor.id_persona+"'>"+tutor.denominacion+"</option>";           
        })
        $('#id_tutor').selectpicker('refresh')
        $('#id_tutor').val('');
        $('#id_tutor').selectpicker('render');
    })
    .catch(function (error) {
      console.log(error);
    })
}

export const ocultarErrorCampo=()=>{
    let camp=document.querySelectorAll('.form-control-feedback')
    let sele=document.querySelectorAll('.dropdown-toggle')
    let entradass=document.querySelectorAll('input')
    
    camp.forEach(function(campoControl) {
        campoControl.style.visibility='hidden'
    });
    sele.forEach(function(seleect) {
        seleect.style=''
    });

    entradass.forEach(function(controlesCampo) {
        controlesCampo.style=''
    })
    entradass=document.querySelectorAll('select')
    entradass.forEach(function(controlesCampo) {
        controlesCampo.style=''
    })

    entradass=document.querySelectorAll('textarea')
    entradass.forEach(function(controlesCampo) {
        controlesCampo.style=''
    })
}

export const cargarBarrios=(id_ciudad)=>{
    axios.get('listarbarriosxidciudad/'+id_ciudad)
    .then(function (response) {
        let barrios=response.data
        barrios.forEach(barrio=>{
            document.getElementById("id_barrio").innerHTML += "<option value='"+barrio.id_barrio+"'>"+barrio.nombre+"</option>";           
        })
        $('#id_barrio').selectpicker('refresh')
        $('#id_barrio').val('');
        $('#id_barrio').selectpicker('render');
    })
    .catch(function (error) {
      console.log(error);
    })
}

export const listarVinculos=()=>{
    axios.get('listarvinculos')
    .then(function (response) {
        let vinculos=response.data
        //console.log(vinculos)
        vinculos.forEach(vinculo=>{
            document.getElementById("vinculo_tutor").innerHTML += "<option value='"+vinculo.id_vinculo+"'>"+vinculo.denominacion+"</option>";           
        })
        $('#vinculo_tutor').selectpicker('refresh')
        $('#vinculo_tutor').val('');
        $('#vinculo_tutor').selectpicker('render');
    })
    .catch(function (error) {
      console.log(error);
    })
}


//PROPIEDADES DE LA TABLA BARRIOS
let tblBarrios = $("#tblBarrios").DataTable({
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
export const listarBarriosTbl=(id_ciudad)=>{
    console.log(id_ciudad)
    $('#tblBarrios').DataTable().clear().draw();
    axios.get('listarbarriosxidciudadsp/'+id_ciudad)
    .then(function (response) {
        let data=response.data
        //console.log(data)
        let estado
        Array.from(data).forEach(function (barrio) {
            if(barrio.estado==1) {
                estado='<span class="badge badge-success mr-2 ml-0"><i class="far fa-thumbs-up"></i> Activo</span>'
            }else{
                estado='<span class="badge badge-danger mr-2 ml-0"><i class="far fa-thumbs-down"></i> Inactivo</span>'
            }
            tblBarrios.row.add([
                    barrio.barrio,
                    barrio.ciudad,
                    barrio.departamento,
                    barrio.pais,
                    estado
            ]).draw(false);
        })
    })
    .catch(function (error) {
        console.log(error);
    })
    
}
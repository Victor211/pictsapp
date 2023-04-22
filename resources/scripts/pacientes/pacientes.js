import { listarVinculos, cargarBarrios, listarTutores, listarCiudades, ocultarErrorCampo } from '../lib/definiciones.js';

document.addEventListener('DOMContentLoaded', function() {

  const es_paciente = document.getElementById("es_paciente");
  es_paciente.onclick = () => {
      if ($('#es_paciente').prop('checked')) {
          es_paciente.value = 1;
          $("#paciente").show();
          $("#tutor").hide();

          $("#tutores").show();
            $("#vinculo").show();
      } else {
          es_paciente.value = 0;
          $("#paciente").hide();
          $("#tutor").show();
          $("#tutores").hide();
        $("#vinculo").hide();
      }
    //console.log('es_paciente valor:::   ' + es_paciente.value)
  };

  const id_ciudad=document.getElementById("id_ciudad")
  id_ciudad.addEventListener('change', ()=>{
      let opcionbarrio = '<option select value="">Seleccione un Barrio</option>';
      $("#id_barrio").html(opcionbarrio);
      $("#id_barrio").selectpicker("render");
      document.getElementById("id_barrio").innerHTML = opcionbarrio;
      $("#id_barrio").val("");
      $("#id_barrio").selectpicker("refresh");
      cargarBarrios(id_ciudad.value)
  });

  const edad=document.getElementById("edad")
  edad.addEventListener('change', ()=>{
    /* if (condition) {
        
    } else {
        
    } */
  });

  
});

let tblPacientesTutores = $("#tblPacientesTutores").DataTable({
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
        title: 'Listado de Personas',
        filename: 'listado_personas',
        text: 'Exportar a PDF <i class="fa fa-file-pdf"></i>'
    },
    {
        extend: 'excelHtml5',
        title: 'Listado de Personas',
        filename: 'listado_personas',
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
    $("#tutores").hide();
    $("#vinculo").hide();

    $("#paciente").hide();
    $("#tutor").hide();
    listarVinculos()
    listarPersonas()
    listarCiudades()
    listarTutores()
    ocultarErrorCampo()
}

const listarPersonas=()=>{
    $('#tblPacientesTutores').DataTable().clear().draw();
    axios.get('listarpersonas')
    .then(function (response) {
        let personas=response.data
        //console.log(personas)
        let estado, es_paciente, botones
        Array.from(personas).forEach(function (persona) {
            if(persona.estado==1) {
                estado='<span class="badge badge-success mr-2 ml-0"><i class="far fa-thumbs-up"></i> Activo</span>'

                botones='<button class="btn btn-outline-warning btn-xs wishlist" data-toggle="tooltip" data-placement="top" title="Actualizar Persona" onclick="editar(' +
                persona.id_persona +')"><i class="far fa-edit"></i></button><button class="btn btn-outline-danger btn-xs wishlist" data-toggle="tooltip" data-placement="top" title="Inactivar Persona" onclick="desactivar(' +
                persona.id_persona +')"><i class="far fa-window-close"></i></button>'
            }else{
                estado='<span class="badge badge-danger mr-2 ml-0"><i class="far fa-thumbs-down"></i> Inactivo</span>'

                botones='<button class="btn btn-outline-warning btn-xs wishlist" data-toggle="tooltip" data-placement="top" title="Actualizar Persona" onclick="editar(' +
                persona.id_persona +')"><i class="far fa-edit"></i></button><button class="btn btn-outline-success btn-xs wishlist" data-toggle="tooltip" data-placement="top" title="Activar Persona" onclick="activar(' +
                persona.id_persona +')"><i class="fas fa-check "></i></button>'
            }

            if( persona.es_paciente==1 ) {
                es_paciente='<span class="badge badge-success mr-2 ml-0">Es paciente</span>'
            }else{
                es_paciente='<span class="badge badge-info mr-2 ml-0">Es Tutor</span>'
            }

            tblPacientesTutores.row.add([
                    botones,
                    persona.ci_persona,
                    persona.denominacion,
                    es_paciente,
                    persona.edad,
                    persona.barrio,
                    persona.ciudad,
                    persona.departamento,
                    estado,
            ]).draw(false);
        })
    })
    .catch(function (error) {
        console.log(error);
    })
    
}

initForm()
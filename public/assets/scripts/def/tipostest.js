document.addEventListener("DOMContentLoaded",(function(){}));let tblTipoTest=$("#tblTipoTest").DataTable({aProcessing:!0,aServerSide:!0,bFilter:!0,scrollX:!1,language:{decimal:"",emptyTable:"No hay información",info:"Mostrando _START_ a _END_ de _TOTAL_ Entradas",infoEmpty:"Mostrando 0 to 0 of 0 Entradas",infoFiltered:"(Filtrado de _MAX_ total entradas)",infoPostFix:"",thousands:",",lengthMenu:"Mostrar _MENU_ Entradas",loadingRecords:"Cargando...",processing:"Procesando...",search:"Buscar:",zeroRecords:"Sin resultados encontrados",paginate:{first:"Primero",last:"Ultimo",next:"Siguiente",previous:"Anterior"}},dom:"Bfrtip",buttons:[{extend:"pdf",title:"Listado de Paises",filename:"listado_paises",text:'Exportar a PDF <i class="fa fa-file-pdf"></i>'},{extend:"excelHtml5",title:"Listado de Paises",filename:"listado_paises",text:'Exportar a Excel <i class="fa fa-file-excel"></i>'}],lengthChange:!1,bDestroy:!0,iDisplayLength:10,order:[[0,"desc"]]});const initForm=()=>{listarTiposTest()},listarTiposTest=()=>{$("#tblTipoTest").DataTable().clear().draw(),axios.get("listartipostest").then((function(a){let e,t=a.data;console.log(t),Array.from(t).forEach((function(a){e=1==a.activo?'<span class="badge badge-success mr-2 ml-0"><i class="far fa-thumbs-up"></i> Activo</span>':'<span class="badge badge-danger mr-2 ml-0"><i class="far fa-thumbs-down"></i> Inactivo</span>',tblTipoTest.row.add([a.descripcion,e]).draw(!1)}))})).catch((function(a){console.log(a)}))};listarTiposTest();
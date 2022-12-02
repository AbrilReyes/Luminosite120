
// $(document).ready(function() {
//     $('#example').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//             'copy', 'csv', 'excel', 'pdf', 'print'
//         ]
//     } );
// } );
$(document).ready(function(){
    $('#example').DataTable({
        language: { 
            "lengthMenu":" Mostrar _MENU_  registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_al _END_ de un total de _TOTAL_ registros",
            "infoEmpty":"Mostrando registros del 0 al 0 de un total de 0 registros ",
            "infoFiltered":"(filtrado de un total de _MAX_ registros)",
            "sSearch":"Buscar:",
            "oPaginate":{
                "SFirst":"Primero",
                "sLast":"Ultimo",
                "sNext":"Siguiente",
                "sPrevious":"Anterior",
    
            },
            "sProcessing":"Procesando...", 
        },
        // para usar los botones 
        responsive: "true",
        dom:'Bfrtilp',
        buttons:[
        {
            extend: 'excelHtml5',
            text:'<i class="fas fa-file-excel"></i>',
            titleAttr:'Exportar a Excel',
            className: 'btn btn-success'
    
        },
        {
            extend: 'pdfHtml5',
            text:'<i class="fas fa-file-pdf"-</i>',
            titleAttr:'Exportar a PDF',
            className: 'btn btn-danger'
        },
        {
            extend: 'print',
            text:'<i class="fas fa-print"</i>',
            titleAttr:'Imprimir',
            className: 'btn btn-info'
        },
    
        ]
    
    });
    });
    
$(document).ready(function () {
    var $cambio_tabla = $("#cambio_tabla");
    var $tab = $("#tablas").val();
    $('#tablas').change(function () {
        $tab = $("#tablas").val();
    })

    $('#tabla thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#tabla thead');

    $('#tabla').DataTable({
        "columnDefs": [
            { "width": "1%", "targets": '_all' }
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
        },
        dom: 'lBfrtip',
        searchBuilder: {
            
        },
        buttons: [
            { extend: 'spacer' },
            {
                extend: 'searchBuilder',
                config: {
                    depthLimit: 2
                }
            },
            { extend: 'spacer' },
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                text: 'JSON',
                action: function ( e, dt, button, config ) {
                    var data = dt.buttons.exportData();
                    
                    $.fn.dataTable.fileSave(
                        new Blob( [ JSON.stringify( data ) ] ),
                        'Tabla.json'
                    );
                }
            },
            'colvis',
            {
                extend: 'collection',
                text: 'Cambio de tabla',
                buttons: [
                    {
                        text: 'Alumno',
                        action: function ( e, dt, node, config ) {
                            window.location = "index";
                        }
                    },
                    {
                        text: 'Profesor',
                        action: function ( e, dt, node, config ) {
                            window.location = "tablaprofesores";
                        }
                    },
                    {
                        text: 'Carrera',
                        action: function ( e, dt, node, config ) {
                            window.location = "tablacarrera";
                        }
                    },
                    {
                        text: 'Departamento',
                        action: function ( e, dt, node, config ) {
                            window.location = "tabladepartamento";
                        }
                    },
                    {
                        text: 'Gasto',
                        action: function ( e, dt, node, config ) {
                            window.location = "tablagasto";
                        }
                    },
                    {
                        text: 'Ramo',
                        action: function ( e, dt, node, config ) {
                            window.location = "tablaramo";
                        }
                    },
                    {
                        text: 'Tipo Carrera',
                        action: function ( e, dt, node, config ) {
                            window.location = "tablatipocarrera";
                        }
                    }
                ]
            },
        ],
        orderCellsTop: true,
        fixedHeader: true,
        responsive: true,
        initComplete: function () {
            var api = this.api();

            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');

                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})';

                            var cursorPosition = this.selectionStart;
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();

                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });

});

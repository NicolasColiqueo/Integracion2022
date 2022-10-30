$(document).ready(function () {
    var $cambio_tabla = $("#cambio_tabla");
    var $tab = $("#tablas").val();
    $('#tablas').change(function () {
        $tab = $("#tablas").val();
    })

    $cambio_tabla.on("click", function () {
        if ($tab == "Alumno") {
            window.location = "index";
        } else if ($tab == "Profesor") {
            window.location = "tablaprofesores";
        }
            else if ($tab == "Carrera") {
            window.location = "tablacarrera";
        }
            else if ($tab == "Departamento") {
            window.location = "tabladepartamento";
        }
            else if ($tab == "Gasto") {
            window.location = "tablagasto";
        }
            else if ($tab == "Ramo") {
            window.location = "tablaramo";
        }
            else if ($tab == "TipoCarrera") {
            window.location = "tablatipocarrera";
        }
    });

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
        dom: 'QlBfrtip',
        buttons: [
            { extend: 'spacer' }, 'copy', 'csv', 'excel', 'pdf',
            {
                text: 'JSON',
                action: function ( e, dt, button, config ) {
                    var data = dt.buttons.exportData();
 
                    $.fn.dataTable.fileSave(
                        new Blob( [ JSON.stringify( data ) ] ),
                        'Tabla.json'
                    );
                }
            }
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

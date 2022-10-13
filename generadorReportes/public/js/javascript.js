$(document).ready(function () {
    var $cambio_tabla = $("#cambio_tabla");
    var $tab = $("#tablas").val();
    $('#tablas').change(function () {
        $tab = $("#tablas").val();
    })

    $cambio_tabla.on("click", function () {
        if ($tab == "Alumno") {
            window.location = "tablaalumnos";
        } else if ($tab == "Profesor") {
            window.location = "tablaprofesores";
        }
    });

    $('#tabla').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
        },
        dom: 'lBfrtip',
        buttons: [
            {extend: 'spacer'}, 'copy', 'csv', 'excel', 'pdf'
        ]
    });
});
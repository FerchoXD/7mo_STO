function cerrar_sesion () {
    var controlador     =   "../../controllers/usuarios.controller.php?opcion=logout"
    $.alert({
        icon:       "fa fa-exclamation-circle",
        title:      "Cerrar Sesión",
        content:    "¿Desea cerrar la sesión actual?",
        type:       "red",
        animeteFromElement: false,
        buttons:    {
            Sí:     function () {
                $.ajax({
                    url:        controlador    
                }).done(function () {
                    location.reload()
                })
            },
            No:     function () {

            }
        }
    })
    
}
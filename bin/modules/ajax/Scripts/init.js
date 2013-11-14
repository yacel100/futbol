jQuery(document).ready(function($) {

    //Cookie
    jQuery("a.cerrar-cookies").click(function(e){
        e.preventDefault();
        jQuery("#privacyPolicyLayer").fadeOut(300);
    })

    //Cambiar competicion Calendario
    jQuery("#box_linea1_contenedor2 #box_iconos_liga_bbva_adelante a").click(function(e) {
        e.preventDefault();
        this_id = jQuery(this).attr("href");
        if (jQuery(this).hasClass("pestanya_inactiva")) {
            jQuery("#box_linea1_contenedor2 .fondo_degradado").fadeOut(300, function() {
                jQuery(this_id).show()
            })
            jQuery("#box_linea1_contenedor2 #box_iconos_liga_bbva_adelante a").addClass("pestanya_inactiva");
            jQuery(this).removeClass("pestanya_inactiva")
        }
    })

    //Cambiar competicion galeria
    jQuery("#box_linea3 #box_iconos_liga_bbva_adelante a").click(function(e) {
        e.preventDefault();
        this_id = jQuery(this).attr("href");
        if (jQuery(this).hasClass("pestanya_inactiva")) {
            if (this_id == "#galeria_2" && jQuery(this_id).find(".bottomNav").length == 0) {
                inicializar_galeria(2);
            }
            jQuery(".gallery_slider").fadeOut(300, function() {
                jQuery(this_id).show();
                jQuery('.tooltip').tipsy({html:true, gravity: 's' });
            })
            jQuery("#box_linea3 #box_iconos_liga_bbva_adelante a").addClass("pestanya_inactiva");
            jQuery(this).removeClass("pestanya_inactiva")
        }
    })

    inicializar_galeria(1);

    var params = {
        changeMonth: false,
        changeYear: false,
        showButtonPanel: false,
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesMin: ['D', 'L', 'M', 'X', 'J', 'V', 'S'],
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        firstDay: 1
                // defaultDate: new Date(fecha_actual),
    };
    jQuery(".date").datepicker(params);

    //Estadisticas historicas
    jQuery('#select_consultas_estadisticas_historicas').change(function() {
        jQuery("#box_estadisticas_historicas").html('<span class="loader" style="display:block"><\/span>');
        jQuery("#tipo").val(jQuery('#select_consultas_estadisticas_historicas').val());
        switch (jQuery('#select_consultas_estadisticas_historicas').val())
        {
            case "clasificacion_historica":
                jQuery("#select_temporada_primera_estadisticas_historicas").hide();
                jQuery("#select_temporada_segunda_estadisticas_historicas").hide();
                jQuery("#temporada_titulo").hide();
                jQuery("#select_competicion_estadisticas_historicas").hide();
                jQuery("#competicion_titulo").hide();
                jQuery("#select_equipos_estadisticas_historicas").hide();
                jQuery("#equipos_titulo").hide();
                jQuery("#jornada_estadisticas_historicas").hide();
                jQuery("#select_jornada_estadisticas_historicas").hide();
                jQuery("#jornada_titulo").hide();
                break;
            case "clasificacion":
                jQuery("#input_competicion").val(jQuery('#select_competicion_estadisticas_historicas').val());
                jQuery("#select_competicion_estadisticas_historicas").show();
                jQuery("#competicion_titulo").show();
                if (jQuery("#input_competicion").val() === 'Primera') {
                    var n = jQuery('#select_temporada_primera_estadisticas_historicas').val().split(",");
                jQuery("#input_temporada").val(n[0]);
                jQuery("#input_temporada_nombre").val(n[1]);
                    jQuery("#select_temporada_primera_estadisticas_historicas").show();
                    jQuery("#select_temporada_segunda_estadisticas_historicas").hide();
                } else {
                    var n = jQuery('#select_temporada_segunda_estadisticas_historicas').val().split(",");
                    jQuery("#input_temporada").val(n[0]);
                    jQuery("#input_temporada_nombre").val(n[1]);
                    jQuery("#select_temporada_segunda_estadisticas_historicas").show();
                    jQuery("#select_temporada_primera_estadisticas_historicas").hide();
                }
                jQuery("#temporada_titulo").show();
                jQuery("#input_jornada").val(jQuery('#select_jornada_estadisticas_historicas').val());
                jQuery("#jornada_estadisticas_historicas").show();
                jQuery("#select_jornada_estadisticas_historicas").show();
                jQuery("#jornada_titulo").show();
                jQuery("#select_equipos_estadisticas_historicas").hide();
                jQuery("#equipos_titulo").hide();
                $('#select_jornada_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
                jQuery.ajax({
                    type: "POST",
                    url: Ruta_Local + "/includes/ajax.php",
                    dataType: "html",
                    data: {action: "cargar_jornadas_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        jQuery("#select_jornada_estadisticas_historicas").html(data);
                    }
                });
                break;
            case "calendario":
                if (jQuery("#input_competicion").val() === 'Primera') {
                    var n = jQuery('#select_temporada_primera_estadisticas_historicas').val().split(",");
                jQuery("#input_temporada").val(n[0]);
                jQuery("#input_temporada_nombre").val(n[1]);
                    jQuery("#select_temporada_primera_estadisticas_historicas").show();
                    jQuery("#select_temporada_segunda_estadisticas_historicas").hide();
                } else {
                    var n = jQuery('#select_temporada_segunda_estadisticas_historicas').val().split(",");
                    jQuery("#input_temporada").val(n[0]);
                    jQuery("#input_temporada_nombre").val(n[1]);
                    jQuery("#select_temporada_segunda_estadisticas_historicas").show();
                    jQuery("#select_temporada_primera_estadisticas_historicas").hide();
                }
                jQuery("#temporada_titulo").show();
                jQuery("#input_competicion").val(jQuery('#select_competicion_estadisticas_historicas').val());
                jQuery("#select_competicion_estadisticas_historicas").show();
                jQuery("#competicion_titulo").show();
                jQuery("#input_equipo").val(jQuery('#equipos_estadisticas_historicas').val());
                jQuery("#select_equipos_estadisticas_historicas").show();
                jQuery("#equipos_titulo").show();
                jQuery("#input_jornada").val(jQuery('#select_jornada_estadisticas_historicas').val());
                jQuery("#jornada_estadisticas_historicas").show();
                jQuery("#select_jornada_estadisticas_historicas").show();
                jQuery("#jornada_titulo").show();
                $('#select_jornada_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
                jQuery.ajax({
                    type: "POST",
                    url: Ruta_Local + "/includes/ajax.php",
                    dataType: "html",
                    data: {action: "cargar_jornadas_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        jQuery("#select_jornada_estadisticas_historicas").html(data);
                    }
                });
                $('#select_equipos_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
                jQuery.ajax({
                    type: "POST",
                    url: Ruta_Local + "/includes/ajax.php", dataType: "html",
                    data: {action: "cargar_equipos_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        jQuery("#select_equipos_estadisticas_historicas").html(data);
                    }
                });
                break;
            case "plantillas":
                jQuery("#input_competicion").val(jQuery('#select_competicion_estadisticas_historicas').val());
                jQuery("#select_competicion_estadisticas_historicas").show();
                jQuery("#competicion_titulo").show();
                if (jQuery("#input_competicion").val() === 'Primera') {
                    var n = jQuery('#select_temporada_primera_estadisticas_historicas').val().split(",");
                    jQuery("#input_temporada").val(n[0]);
                    jQuery("#input_temporada_nombre").val(n[1]);
                    jQuery("#select_temporada_primera_estadisticas_historicas").show();
                    jQuery("#select_temporada_segunda_estadisticas_historicas").hide();
                } else {
                    var n = jQuery('#select_temporada_segunda_estadisticas_historicas').val().split(",");
                    jQuery("#input_temporada").val(n[0]);
                    jQuery("#input_temporada_nombre").val(n[1]);
                    jQuery("#select_temporada_segunda_estadisticas_historicas").show();
                    jQuery("#select_temporada_primera_estadisticas_historicas").hide();
        }
                jQuery("#temporada_titulo").show();
                //jQuery("#input_jornada").val(jQuery('#select_jornada_estadisticas_historicas').val());
                jQuery("#jornada_estadisticas_historicas").hide();
                jQuery("#select_jornada_estadisticas_historicas").hide();
                jQuery("#jornada_titulo").hide();
                jQuery("#input_equipo").val(jQuery('#select_equipos_estadisticas_historicas').val());
                jQuery("#select_equipos_estadisticas_historicas").show();
                jQuery("#equipos_titulo").show();
                $('#select_equipos_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
                    data: {action: "cargar_equipos_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        jQuery("#select_equipos_estadisticas_historicas").html(data);
                    }
                });
                break;
        }
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: jQuery("#form_filtro_estadisticas_historicas").serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#box_estadisticas_historicas").html(data);
            }
        });
    });

    jQuery('#select_temporada_primera_estadisticas_historicas').change(function() {
        jQuery("#box_estadisticas_historicas").html('<span class="loader" style="display:block"><\/span>');
        jQuery("#input_equipo").val("");
        var n = jQuery('#select_temporada_primera_estadisticas_historicas').val().split(",");
        jQuery("#input_temporada").val(n[0]);
        jQuery("#input_temporada_nombre").val(n[1]);
        $('#select_jornada_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: {action: "cargar_jornadas_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#select_jornada_estadisticas_historicas").html(data);
            }
        });
        $('#select_equipos_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: {action: "cargar_equipos_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#select_equipos_estadisticas_historicas").html(data);
            }
        });
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: jQuery("#form_filtro_estadisticas_historicas").serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#box_estadisticas_historicas").html(data);
            }
        });
    });

    jQuery('#select_temporada_segunda_estadisticas_historicas').change(function() {
        jQuery("#box_estadisticas_historicas").html('<span class="loader" style="display:block"><\/span>');
        jQuery("#input_equipo").val("");
        var n = jQuery('#select_temporada_segunda_estadisticas_historicas').val().split(",");
        jQuery("#input_temporada").val(n[0]);
        jQuery("#input_temporada_nombre").val(n[1]);
        $('#select_jornada_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: {action: "cargar_jornadas_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#select_jornada_estadisticas_historicas").html(data);
            }
        });
        $('#select_equipos_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: {action: "cargar_equipos_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#select_equipos_estadisticas_historicas").html(data);
            }
        });
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: jQuery("#form_filtro_estadisticas_historicas").serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#box_estadisticas_historicas").html(data);
            }
        });
    });

    jQuery('#select_competicion_estadisticas_historicas').change(function() {
        jQuery("#box_estadisticas_historicas").html('<span class="loader" style="display:block"><\/span>');
        jQuery("#input_equipo").val("");
        jQuery("#input_competicion").val(jQuery('#select_competicion_estadisticas_historicas').val());
        if (jQuery("#input_competicion").val() === 'Primera') {
            jQuery("#select_temporada_primera_estadisticas_historicas").show();
            jQuery("#select_temporada_segunda_estadisticas_historicas").hide();
        } else {
            var tmp = jQuery('#select_temporada_segunda_estadisticas_historicas').val().split(",");
            jQuery("#input_temporada").val(tmp[0]);
            jQuery("#input_temporada_nombre").val(tmp[1]);
            jQuery("#select_temporada_segunda_estadisticas_historicas").show();
            jQuery("#select_temporada_primera_estadisticas_historicas").hide();
        }
        $('#select_jornada_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: {action: "cargar_jornadas_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#select_jornada_estadisticas_historicas").html(data);
            }
        });
        $('#select_equipos_estadisticas_historicas').html('<option value="">Cargando...espere</option>');
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: {action: "cargar_equipos_estadisticas_historicas", temporada: jQuery("#input_temporada").val(), competicion: jQuery("#input_competicion").val()},
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#select_equipos_estadisticas_historicas").html(data);
            }});
        jQuery("#box_estadisticas_historicas").html('<span class="loader" style="display:block"><\/span>');
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: jQuery("#form_filtro_estadisticas_historicas").serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#box_estadisticas_historicas").html(data);
            }
        });
    });

    jQuery('#select_equipos_estadisticas_historicas').change(function() {
        jQuery("#box_estadisticas_historicas").html('<span class="loader" style="display:block"><\/span>');
        jQuery("#input_equipo").val(jQuery('#select_equipos_estadisticas_historicas').val());
        jQuery.ajax({
            type: 'POST',
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: jQuery("#form_filtro_estadisticas_historicas").serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#box_estadisticas_historicas").html(data);
            }
        });
    });

    jQuery('#select_jornada_estadisticas_historicas').change(function() {
        jQuery("#box_estadisticas_historicas").html('<span class="loader" style="display:block"><\/span>');
        jQuery("#input_jornada").val(jQuery('#select_jornada_estadisticas_historicas').val());
        jQuery.ajax({
            type: "POST",
            url: Ruta_Local + "/includes/ajax.php",
            dataType: "html",
            data: jQuery("#form_filtro_estadisticas_historicas").serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery("#box_estadisticas_historicas").html(data);
            }
        });
    });

    switch (jQuery('#select_consultas_estadisticas_historicas').val())
    {
        case "clasificacion_historica":
            jQuery("#select_temporada_estadisticas_historicas").hide();
            jQuery("#select_competicion_estadisticas_historicas").hide();
            jQuery("#select_equipos_estadisticas_historicas").hide();
            jQuery("#equipos_titulo").hide();
            jQuery("#competicion_titulo").hide();
            jQuery("#temporada_titulo").hide();
            jQuery("#select_jornada_estadisticas_historicas").hide();
            jQuery("#jornada_titulo").hide();
            break;
        case "clasificacion":
            jQuery("#select_temporada_estadisticas_historicas").show();
            jQuery("#select_competicion_estadisticas_historicas").show();
            jQuery("#select_equipos_estadisticas_historicas").hide();
            jQuery("#equipos_titulo").hide();
            jQuery("#competicion_titulo").show();
            jQuery("#temporada_titulo").show();
            jQuery("#select_jornada_estadisticas_historicas").show();
            jQuery("#jornada_titulo").show();
            break;
        case "calendario":
            jQuery("#select_temporada_estadisticas_historicas").show();
            jQuery("#select_competicion_estadisticas_historicas").show();
            jQuery("#select_equipos_estadisticas_historicas").show();
            jQuery("#equipos_titulo").show();
            jQuery("#competicion_titulo").show();
            jQuery("#temporada_titulo").show();
            jQuery("#select_jornada_estadisticas_historicas").show();
            jQuery("#jornada_titulo").show();
            break;
    }

    jQuery("#select_consultas_estadisticas_historicas").select(0);
    jQuery('#select_consultas_estadisticas_historicas').change();

    //Calendario
    jQuery('#select_competicion').ddslick({
        //data: ddData,
        width: 165,
        imagePosition: "left",
        onSelected: function(data) {
            if (jQuery("#form_filtro_calendario #action_calendario").val() != "") {
                jQuery(".container_jornadas").empty().html('<span class="loader" style="display:block"><\/span>');
                jQuery("input#input_equipo").val("");
                jQuery("#input_competicion").val(jQuery('#select_competicion .dd-selected-value').val());
                jQuery("#filtro_calendario .equipos .dd-container").hide();
                jQuery("#filtro_calendario #equipos_" + jQuery('#select_competicion .dd-selected-value').val()).show();
                jQuery.ajax({
                    type: 'POST',
                    url: "/includes/ajax.php?action=cambiar_calendario",
                    data: jQuery("#form_filtro_calendario").serialize(),
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        jQuery(".container_jornadas").html(data);
                        if (jQuery("input#fecha_inicio").val() != "" && jQuery("input#fecha_fin").val() != "" && jQuery("#input_equipo").val() == "")
                            jQuery(".jornada:gt(4)").hide();
                    }
                })
            }
            else {
                jQuery("#form_filtro_calendario #action_calendario").val(1);
                jQuery("#filtro_calendario .inner.equipos").addClass("comp_actual_" + jQuery('#select_competicion .dd-selected-value').val());
                //.not("#equipos"+jQuery('#select_competicion .dd-selected-value').val())
            }

        }
    });

    jQuery('#equipos_1').ddslick({
        //data: ddData,
        width: 165,
        imagePosition: "left",
        onSelected: function(data) {
            if (jQuery("#form_filtro_calendario #action_calendario").val() != "1") {
                jQuery(".container_jornadas").empty().html('<span class="loader" style="display:block"><\/span>');
                jQuery("#input_equipo").val(jQuery('#equipos_1 .dd-selected-value').val());
                jQuery.ajax({
                    type: 'POST',
                    url: "/includes/ajax.php?action=cambiar_calendario",
                    data: jQuery("#form_filtro_calendario").serialize(),
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        jQuery(".container_jornadas").html(data);
                        // Paginacion calendario
                        if (jQuery("input#fecha_inicio").val() != "" && jQuery("input#fecha_fin").val() != "" && jQuery("#input_equipo").val() == "")
                            jQuery(".jornada:gt(4)").hide();
                    }
                })
            }
            else {
                jQuery("#form_filtro_calendario #action_calendario").val(2);
            }
        }
    });

    jQuery('#equipos_2').ddslick({
        //data: ddData,
        width: 165,
        imagePosition: "left",
        onSelected: function(data) {
            if (jQuery("#form_filtro_calendario #action_calendario").val() != "1" && jQuery("#form_filtro_calendario #action_calendario").val() != "2") {
                jQuery(".container_jornadas").empty().html('<span class="loader" style="display:block"><\/span>');
                jQuery("#input_equipo").val(jQuery('#equipos_2 .dd-selected-value').val());
                jQuery.ajax({
                    type: 'POST',
                    url: "/includes/ajax.php?action=cambiar_calendario",
                    data: jQuery("#form_filtro_calendario").serialize(),
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        jQuery(".container_jornadas").html(data)
                        // Paginacion calendario
                        if (jQuery("input#fecha_inicio").val() != "" && jQuery("input#fecha_fin").val() != "" && jQuery("#input_equipo").val() == "")
                            jQuery(".jornada:gt(4)").hide();
                    }
                });
            }
            else {
                jQuery("#form_filtro_calendario #action_calendario").val(3)
            }
        }
    });

    jQuery("#form_filtro_calendario input").change(function() {
        jQuery(".container_jornadas").empty().html('<span class="loader" style="display:block"><\/span>');
        jQuery.ajax({
            type: 'POST',
            url: "/includes/ajax.php?action=cambiar_calendario",
            data: jQuery("#form_filtro_calendario").serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                jQuery(".container_jornadas").html(data);
                // Paginacion calendario
                if (jQuery("input#fecha_inicio").val() != "" && jQuery("input#fecha_fin").val() != "" && jQuery("#input_equipo").val() == "")
                    jQuery(".jornada:gt(4)").hide();

            }
        })

    })




    //Hover estadisticas home
    jQuery(".velo_estadisticas").not(".no-hover").hover(function() {
        jQuery("#hover_" + jQuery(this).parent().attr("id")).show();
    }, function() {
        jQuery("#hover_" + jQuery(this).parent().attr("id")).hide();
    })

    //Cambiar competicion estadisticas
    jQuery(".box_estadisticas #box_iconos_linea2_container2 a").click(function(e) {
        e.preventDefault();
        this_id = jQuery(this).attr("href");
        if (jQuery(this).hasClass("pestanya_inactiva")) {
            jQuery(".box_estadisticas .box_informacion_container2").fadeOut(300, function() {
                jQuery(this_id).show()
            })
            jQuery(".box_estadisticas #box_iconos_linea2_container2 a").addClass("pestanya_inactiva");
            jQuery(this).removeClass("pestanya_inactiva")
        }
    })

    jQuery('#select_temporadas').ddslick({
        //data: ddData,
        width: 265,
        imagePosition: "left",
        onSelected: function(data) {
            if (jQuery("#form_filtro_calendario #action_calendario").val() != "") {
                jQuery(".container_jornadas").empty().html('<span class="loader" style="display:block"><\/span>');
                jQuery.ajax({
                    type: 'POST',
                    url: "/includes/ajax.php?action=cambiar_estadisticas",
                    data: jQuery("#form_filtro_calendario").serialize(),
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        jQuery(".container_jornadas").html(data)
                    }
                })
            }
            else {
                jQuery("#form_filtro_calendario #action_calendario").val(1)
            }

        }
    });

    //Form login
    jQuery("form#form_create,form#form_password").validate({
        rules: {
            pass: {
                required: true,
                minlength: 6,
                maxlength: 15
            },
            confirm_password: {
                required: true,
                minlength: 6,
                equalTo: "#pass",
                maxlength: 15
            }
        }
    })

    var params2 = {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: false,
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesMin: ['D', 'L', 'M', 'X', 'J', 'V', 'S'],
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        firstDay: 1,
        yearRange: "1920:c"
                // defaultDate: new Date(fecha_actual),
    };
    jQuery(".date_birth").datepicker(params2);
    jQuery(".date_birth").change(function() {
        fecha = jQuery(this).val();
        anios = calcular_edad(fecha);
        if (anios >= 18) {
            jQuery(".hide_registro").hide();
        }
        else
            jQuery(".hide_registro").show();
    })
    /*jQuery("form#form_login .line.user a.register").click(function(e) {
     e.preventDefault();
     jQuery("#container-register").slideToggle(300)
     })*/

    jQuery("form#form_login a.recuperar").click(function(e) {
        e.preventDefault();
        jQuery("form#form_login").fadeOut(300, function() {
            jQuery("form#form_recover").fadeIn(300);
        });
    });
    jQuery("form#form_recover a.recuperar_volver").click(function(e) {
        e.preventDefault();
        jQuery("form#form_recover").fadeOut(300, function() {
            jQuery("form#form_login").fadeIn(300);
        })
    })
    jQuery("form#form_recover").validate();

    //Lightbox noticias
    jQuery('.fancybox-thumbs-gallery').fancybox({
        padding: 8,
        prevEffect: 'none',
        nextEffect: 'none',
        openEffect: 'none',
        closeEffect: 'none',
        closeBtn: true,
        arrows: true,
        nextClick: true,
        loop: false,
        enableEscapeButton: false,
        helpers: {
            title: {
                type: 'inside'
            },
            buttons: {tpl: ''}
        },
        afterLoad: function() {
            this.title = (this.index + 1) + ' / ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
    });
    
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        jQuery('#link-liga-bbva,#link-liga-adelante').unbind("hover");
        jQuery(".show-mobile").css("display","block");
        jQuery("#menu2 #link-liga-bbva").click(function(e) {
           e.preventDefault(); 
           jQuery("#liga_adelante_equipos_desplegable").hide();
           if(jQuery("#liga_bbva_equipos_desplegable").is(":hidden")){
            jQuery("#liga_bbva_equipos_desplegable").fadeIn(200);
            jQuery("#menu2 #link-liga-bbva").attr("style","");
            }
           else{
               jQuery("#liga_bbva_equipos_desplegable").fadeOut(200);
               jQuery("#menu2 #link-liga-bbva").css("background","none");
           }
           
           $("#estadisticas_box_elementos_menu").fadeOut(100);
           $("#estadisticas_btn").removeClass('fondo_degradado_bbva_adelante');
           
        })
        jQuery("#menu2 #link-liga-adelante").click(function(e) {
           e.preventDefault(); 
           //jQuery("#link-liga-bbva").removeClass("link_menu_current");
           jQuery("#liga_bbva_equipos_desplegable").hide();
           
           if(jQuery("#liga_adelante_equipos_desplegable").is(":hidden")){
               jQuery("#menu2 #link-liga-adelante").attr("style","");
                jQuery("#liga_adelante_equipos_desplegable").fadeIn(200);
           }
           else{
               jQuery("#liga_adelante_equipos_desplegable").fadeOut(200);
               jQuery("#menu2 #link-liga-adelante").css("background","none");
           }
           
           $("#estadisticas_box_elementos_menu").fadeOut(100);
           $("#estadisticas_btn").removeClass('fondo_degradado_bbva_adelante');
        })
        
        // Gestión del submenú estadísticas
        $("#box_menu_estadisticas #estadisticas_btn a").click(function(e) {
            e.preventDefault();
            if(jQuery("#estadisticas_box_elementos_menu").is(":hidden")){
                $("#estadisticas_box_elementos_menu").fadeIn(100);
                $("#estadisticas_btn").addClass('fondo_degradado_bbva_adelante');
                //Oculto submenu BBVA y Adelante
                jQuery("#liga_adelante_equipos_desplegable").fadeOut(200);
                jQuery("#menu2 #link-liga-adelante").css("background","none");
                jQuery("#liga_bbva_equipos_desplegable").fadeOut(200);
                jQuery("#menu2 #link-liga-bbva").css("background","none");
            }
            else{
                $("#estadisticas_box_elementos_menu").fadeOut(100);
                $("#estadisticas_btn").removeClass('fondo_degradado_bbva_adelante');
            }
        });
        
    }
    else{
        //Hover header Liga BBVA y Adelante 
        jQuery("#menu2 #link-liga-bbva").hover(function(e) {
            e.preventDefault();
            if (!jQuery("#liga_adelante_equipos_desplegable").is(':animated')) {

                jQuery("#liga_adelante_equipos_desplegable").hide();
                jQuery("#liga_bbva_equipos_desplegable").fadeIn(200)
            }
        }, function() {
            jQuery("#liga_bbva_equipos_desplegable").hide();
        })

        jQuery("#menu2 #link-liga-adelante").hover(function(e) {
            e.preventDefault();
            if (!jQuery("#liga_bbva_equipos_desplegable").is(':animated')) {

                jQuery("#liga_bbva_equipos_desplegable").hide();
                jQuery("#liga_adelante_equipos_desplegable").fadeIn(200);
            }
        }, function() {
            jQuery("#liga_adelante_equipos_desplegable").hide();
        })

        jQuery("#liga_bbva_equipos_desplegable,#liga_adelante_equipos_desplegable").mouseleave(function() {
            //jQuery(this).slideUp(300)
            jQuery(this).hide()
        })

        jQuery("#liga_bbva_equipos_desplegable,#liga_adelante_equipos_desplegable").mouseenter(function() {
            //jQuery(this).slideUp(300)
            jQuery(this).show()
        })

        jQuery(".link_menu").hover(function() {
            if (jQuery(this).attr("id") != "link-liga-bbva" && jQuery(this).attr("id") != "link-liga-adelante")
                jQuery(".header_equipos").hide();
        })
        
        // Gestión del submenú estadísticas
        $("#box_menu_estadisticas").mouseover(function() {
            $("#estadisticas_box_elementos_menu").fadeIn(100);
            $("#estadisticas_btn").addClass('fondo_degradado_bbva_adelante');
        });
        $("#box_menu_estadisticas").mouseleave(function() {
            $("#estadisticas_box_elementos_menu").fadeOut(100);
            $("#estadisticas_btn").removeClass('fondo_degradado_bbva_adelante');
        });
    }
    
    
    
    
    /*if(!jQuery.browser.mobile)
    {
        jQuery("#menu2 #link-liga-bbva").click(function(e) {
           e.preventDefault(); 
        })
    }*/

    //Chat
    /*jQuery("#userid").keyup(function(event) { 
     
     var username = jQuery(this).val();
     
     jQuery.ajax({
     type: "POST",
     url: "/includes/chat_jumpin.php",
     data: { userid : username },
     dataType: "json",
     success: function(data){
     jQuery("#status").html(data.result);
     
     if (data.inuse == "inuse") { 
     jQuery("#jumpin").val("Check");   
     } else {
     jQuery("#jumpin").val("Go in!");
     }
     
     }
     });
     
     });*/

    jQuery("form#form_login_chat").validate({
        invalidHandler: function(form, validator) {
            validator.showErrors();
        },
        submitHandler: function(form) {
            jQuery("#jumpin").hide();
            jQuery(form).find(".myloader").show();
            jQuery.ajax({
                type: 'POST',
                url: "/includes/chat_jumpin.php",
                data: jQuery("form#form_login_chat").serialize(),
                // Mostramos un mensaje con la respuesta de PHP
                success: function(data) {
                    //window.location.href = window.location.href
                    form.submit();
                }
            })

            return false;
        }
    });

    jQuery("#sendie").keydown(function(event) {

        var key = event.which;

        // all keys including return 
        if (key >= 33) {

            var maxLength = jQuery(this).attr("maxlength");
            var length = this.value.length;

            if (length >= maxLength) {
                event.preventDefault();
            }
        }
    });

    jQuery('#sendie').keyup(function(e) {

        if (e.keyCode == 13) {

            var text = jQuery(this).val();
            var maxLength = jQuery(this).attr("maxlength");
            var length = text.length;

            if (length <= maxLength + 1) {
                chat.send(text, name);
                jQuery(this).val("");
            } else {
                jQuery(this).val(text.substring(0, maxLength));
            }

        }

    });

    jQuery("#cabecera_chat a").click(function(e) {
        e.preventDefault();
        jQuery("input#action").val("salir_chat");
        document.forms["go_chat"].submit();

    })



    // ZM
    jQuery("form#form_login").validate();

    //Directo
    //Cambiar competicion estadisticas
    jQuery("#clasificacion_directo #box_iconos_liga_bbva_adelante a").click(function(e) {
        e.preventDefault();
        this_id = jQuery(this).attr("href");
        if (jQuery(this).hasClass("pestanya_inactiva")) {
            jQuery("#clasificacion_directo .box_clasificacion").fadeOut(300, function() {
                jQuery(this_id).show()
            })
            jQuery("#clasificacion_directo #box_iconos_liga_bbva_adelante a").addClass("pestanya_inactiva");
            jQuery(this).removeClass("pestanya_inactiva")
        }
    })


    // Directo home next/prev


    // Muestro el primero si no hay ninguno visible
    if (jQuery(".box-partidos-directo:visible").size() == 0) {
        if(jQuery(".box-partidos-directo").hasClass("estado-7"))
            jQuery(".box-partidos-directo:last").show();
        else
            jQuery(".box-partidos-directo:first").show();
    }

    // Gestión del selector de idiomas
    $("#box_idiomas").mouseover(function() {
        $("#idiomas_box_menu").fadeIn(100);
        $("#idiomas_btn").addClass('fondo_degradado_bbva_adelante');
    });
    $("#box_idiomas").mouseleave(function() {
        $("#idiomas_box_menu").fadeOut(100);
        $("#idiomas_btn").removeClass('fondo_degradado_bbva_adelante');
    });

    
    
        // Search
    jQuery(".btn-search").click(function(e){
       e.preventDefault();
       jQuery(".search-input").show()
   })
   jQuery(".search-input a.close").click(function(e){
       e.preventDefault();
       jQuery(".search-input").hide()
   })
   
   jQuery("form#form_search_news").validate({
       submitHandler: function(form) {
           action = jQuery("form#form_search_news").attr("action");
           action = action + "/"+ jQuery("input#input_search").val();
           location.href = (action)
           //form.submit();
       }
   });
   
   
   jQuery('#user').focusout( function(){
        if(jQuery('#user').val()!= ""){
            jQuery.ajax({
                type: "POST",
                url: "/includes/ajax.php?action=validar_nick",
                data: "nick="+$('#user').val(),
                beforeSend: function(){
                jQuery('#msgUsuario').html('<span class="loading"><\/span>');
                },
                success: function( respuesta ){
                if(respuesta == '1')
                    jQuery('#msgUsuario').html("<span class='ok'></span>");
                else{
                    jQuery('#msgUsuario').html("<span class='ko'></span>");
                    jQuery("#user").val("");
                }
                }
            });
        }
    });
    
    jQuery('#userid').focusout( function(){
        if(jQuery('#userid').val()!= ""){
            jQuery.ajax({
                type: "POST",
                url: "/includes/ajax.php?action=validar_nick_chat",
                data: "nick="+$('#userid').val(),
                beforeSend: function(){
                jQuery('#msgUsuario').html('<span class="loading"><\/span>');
                },
                success: function( respuesta ){
                if(respuesta == '1')
                    jQuery('#msgUsuario').html("<span class='ok'></span>");
                else{
                    jQuery('#msgUsuario').html("<span class='ko'></span>");
                    jQuery("#userid").val("");
                }
                }
            });
        }
    });
    

jQuery('.tooltip').tipsy({html:true, gravity: 's' });

//Videos
jQuery(".video-fancybox").fancybox({
    maxWidth	: 800,
    maxHeight	: 600,
    fitToView	: false,
    width		: '70%',
    height		: '70%',
    autoSize	: false,
    closeClick	: false,
    openEffect	: 'none',
    closeEffect	: 'none'
});

//Multimedia vídeos

jQuery("#box_videos #box_iconos_liga_bbva_adelante a").click(function(e) {
        e.preventDefault();
        this_id = jQuery(this).attr("href");
        if (jQuery(this).hasClass("pestanya_inactiva")) {
            jQuery(".video_slider").hide();
            jQuery(this_id).show();
            jQuery("#box_videos #box_iconos_liga_bbva_adelante a").addClass("pestanya_inactiva");
            jQuery(this).removeClass("pestanya_inactiva")
        }
    })

jQuery("#container_videos #line_jornadas a").click(function(e){
    e.preventDefault();
    id = jQuery(this).attr("href").replace("#","");
    jQuery(this).parent().parent().parent().parent().find(".container_videos_jornada").hide();
    jQuery(this).parent().parent().parent().parent().find("#container_videos_jornada"+id).show();
    jQuery(this).parent().parent().parent().find(".current").removeClass("current");
    jQuery(this).addClass("current");
})

//Form
    jQuery("form#form_comentarios").validate({
        invalidHandler: function(form, validator) {
            validator.showErrors();
        },
        submitHandler: function(form) {
            jQuery(form).find(".myloader").show();
            jQuery.ajax({
                type: 'POST',
                url: "/includes/ajax.php?action=send_comentario",
                data: jQuery("form#form_comentarios").serialize(),
                // Mostramos un mensaje con la respuesta de PHP
                success: function(data) {
                    //window.location.href = window.location.href
                    //form.submit();
                    jQuery("form#form_comentarios").empty().append(data);
                }
            })

            return false;
        }
    });

jQuery(".link-fancybox").fancybox({
        maxWidth	: 900,
        maxHeight	: 600,
        fitToView	: false,
        width		: '70%',
        height		: '70%',
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none'
    });

jQuery("#box_videos .icono_categorias").click(function(e){
        e.preventDefault();
        id = jQuery(this).attr("href").replace("#","");
        jQuery(this).parent().find("a").not(jQuery(this)).addClass("pestanya_inactiva");
        jQuery(".video_slider").hide();
        jQuery("#otros_videos_"+id).show();
    })
    
    
    // vídeos home

jQuery("#videos_home #box_iconos_liga_bbva_adelante a").click(function(e) {
        e.preventDefault();
        this_id = jQuery(this).attr("href");
        if (jQuery(this).hasClass("pestanya_inactiva")) {
            jQuery(".video_slider").hide();
            jQuery(this_id).show();
            jQuery("#videos_home #box_iconos_liga_bbva_adelante a").addClass("pestanya_inactiva");
            jQuery(this).removeClass("pestanya_inactiva")
        }
    })

});

if (jQuery("#box_partidos_juego.home .flecha_partido").attr("href") != "") {
    jQuery(document).on("click", "#box_partidos_juego.home .flecha_partido", function(e) {
        e.preventDefault();
        aux = jQuery(this).attr("href").split("#");
        id_box = aux[1];
        jQuery(".box-partidos-directo").hide();
        jQuery(".box-partidos-directo#directo-" + id_box).show();

    })
}

jQuery(document).on("click", ".flecha_jornada_siguiente,.flecha_jornada_anterior", function(e) {
    e.preventDefault();
    _this = jQuery(this);
    paso = jQuery(this).attr("href");
    paso = paso.replace("#", "");
    aux = paso.split("_");
    jornada = aux[0];
    comp = aux[1];
    temp = aux[2];
    action = jQuery(this).attr("rel")
    jQuery(this).parent().parent().parent().find(".container_jornadas").hide();

    if (jQuery("#div_jornada_" + paso).length > 0) {
        jQuery("#div_jornada_" + paso).show();
    }
    else {
        jQuery.ajax({
            type: 'POST',
            url: "/includes/ajax.php?action=" + action,
            data: {num_jornada: jornada, competicion: comp, temporada: temp},
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                _this.parent().parent().parent().append(data)
            }
        })
    }
})


// Paginacion calendario
jQuery(document).on("click", ".paginacion-calendario a.siguiente", function(e) {
    e.preventDefault();
    limite_pag_aux = jQuery(this).attr("href");
    limite_paginacion = limite_pag_aux.replace("#", "");
    actual = jQuery('.jornada:visible:last').index();
    prev = actual - 1;
    next = prev + 5;
    //next= prev+limite_paginacion;

    jQuery(".jornada:lt(" + next + ")").show();
    jQuery(".jornada:lt(" + prev + ")").hide();

    first = jQuery("#contenido_calendario .jornada:visible:first .fondo_degradado span").html();
    last = jQuery("#contenido_calendario .jornada:visible:last .fondo_degradado span").html();
    next_html = "";
    prev_html = "";
    if (jQuery(".jornada:gt(" + actual + "):hidden").length > 0)
        next_html = '<a class="siguiente" href="#' + limite_paginacion + '">»</a>';

    if (jQuery(".jornada:lt(" + prev + "):hidden").length > 0)
        prev_html = '<a class="anterior" href="#' + limite_paginacion + '">«</a>';

    jQuery("#paginacion_otras_noticias").empty().html(prev_html + '<span>' + first + '-' + last + '</span>' + next_html);
})

jQuery(document).on("click", ".paginacion-calendario a.anterior", function(e) {
    e.preventDefault();
    limite_pag_aux = jQuery(this).attr("href");
    limite_paginacion = limite_pag_aux.replace("#", "");
    actual = jQuery('.jornada:visible:first').index();

    prev = actual - 3;
    prev2 = actual - 8;

    if (prev2 < 0) {
        prev2 = 0;
        prev = 0;
        jQuery(".jornada:eq(0),.jornada:gt(0)").show();
        jQuery(".jornada:gt(4)").hide();
    }
    else {

        jQuery(".jornada:gt(" + prev2 + ")").show();
        jQuery(".jornada:gt(" + prev + ")").hide();
    }




    first = jQuery("#contenido_calendario .jornada:visible:first .fondo_degradado span").html();
    last = jQuery("#contenido_calendario .jornada:visible:last .fondo_degradado span").html();
    next_html = "";
    prev_html = "";


    if (jQuery(".jornada:gt(" + actual + "):hidden").length > 0 || jQuery(".jornada:eq(" + actual + "):hidden").length > 0)
        next_html = '<a class="siguiente" href="#' + limite_paginacion + '">»</a>';

    if (jQuery(".jornada:lt(" + prev + "):hidden").length > 0)
        prev_html = '<a class="anterior" href="#' + limite_paginacion + '">«</a>';

    jQuery("#paginacion_otras_noticias").empty().html(prev_html + '<span>' + first + '-' + last + '</span>' + next_html);




})


jQuery(window).bind("load", function() {
    igualar_columnas_sidebar(jQuery(".same_height"));

});

function inicializar_galeria(competicion) {
    jQuery('#galeria_' + competicion + ' .allinone_carousel_charming').allinone_carousel({
        skin: 'charming',
        width: 500,
        height: 315,
        autoPlay: 0,
        resizeImages: true,
        autoHideBottomNav: false,
        autoHideNavArrows: false,
        showElementTitle: true,
        verticalAdjustment: 50,
        showPreviewThumbs: false,
        numberOfVisibleItems: 5,
        nextPrevMarginTop: 23,
        playMovieMarginTop: 0,
        bottomNavMarginBottom: -10,
        elementsHorizontalSpacing: 40,
        elementsVerticalSpacing: 20,
        verticalAdjustment: 80,
                enableTouchScreen: false,
        animationTime: 0.2
    });
}

function igualar_columnas_sidebar(group) {
    tallest = 0;
    group.each(function() {
        thisHeight = jQuery(this).height();
        if (thisHeight > tallest) {
            tallest = thisHeight;
        }
    });
    group.css("height", (tallest) + "px");
    $(".sidebar").css("height", (tallest) + "px");
}


var intervaloDeRecarga = 90;
function cuentaAtrasHome() {
    if (intervaloDeRecarga >= 0) {
        intervaloDeRecarga--;
        setTimeout('cuentaAtrasHome()', 1000);
    } else {
        timerEventHome();
    }
}
//RECARGAS UNICAS
function timerEventHome() {
    try {
        jQuery("#box_partidos_juego.home").append("<div id='loading_home' style='display:block;z-index:2'><span></\span></\div>");
        delay(function() {
            jQuery.ajax({
                type: 'POST',
                url: "/includes/ajax.php?action=reload_home",
                // Mostramos un mensaje con la respuesta de PHP
                success: function(data) {
                    //alert(data);
                    jQuery("#box_partidos_juego.home").empty().html(data);
                    if (jQuery(".box-partidos-directo:visible").size() == 0) {
                        jQuery(".box-partidos-directo:first").show();
                    }
                }
            })
        }, 1000);


    } catch (error0) {
    }
    intervaloDeRecarga = 90;
    cuentaAtrasHome();
}


var delay = (function() {
    var timer = 0;
    return function(callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();

function PopupCenter(pageURL, title, w, h) {
    var left = (screen.width / 2) - (w / 2);
    var top = (screen.height / 2) - (h / 2);
    var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

}

function calcular_edad(birthday) {
    var year, month, day, age, year_diff, month_diff, day_diff;
    var myBirthday = new Date();
    var today = new Date();
    var array = birthday.split("/");
    year = array[2];
    month = array[1];
    day = array[0];
    year_diff = today.getFullYear() - year;
    month_diff = (today.getMonth() + 1) - month;
    day_diff = today.getDate() - day;
    if (month_diff < 0) {
        year_diff--;
    } else if ((month_diff === 0) && (day_diff < 0)) {
        year_diff--;
    }
    return year_diff;
}

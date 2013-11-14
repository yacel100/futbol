<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Liga Profesional</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="../Fonts/fonts.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/estilos.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/estilos_otros_escudos.css" media="screen" />
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="../css/ddslick.css" media="screen" />

<script type="text/javascript" src="Scripts/jquery-1.9.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="Scripts/jquery.timers.js"></script>
<script type="text/javascript" src="Scripts/jquery.autoScroller.js"></script>
<script type="text/javascript" src="Scripts/jquery.carousel_fotos_home.js"></script>
<script type="text/javascript" src="Scripts/ddslick.js"></script>
<script type="text/javascript" src="Scripts/validation.js"></script>
<script type="text/javascript" src="Scripts/jquery.fancybox.js"></script>
<script type="text/javascript" src="Scripts/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="Scripts/tooltip.js"></script>
<script type="text/javascript" src="Scripts/init.js"></script>


<!--<script type="text/javascript" src="../../../lib/jquery/jquery-1.7.2.min.js"></script>-->

</head>

<body>

<div id="fondo">
	<noscript><img src='' alt='' /></noscript>
</div>

<div id="cuerpo">

    <div id="header">
    	<!--<style type="text/css" >
			#menu_login #box_idiomas .li{text-align: center;}
			#menu_login #box_idiomas .li a{padding: 3px 20px 0 20px;}
			#menu_login #box_idiomas .li.letra-grande{padding-bottom: 10px;padding-top: 0;}
			#menu_login #box_idiomas .li a.letra-grande{font-size: 1.5em;padding-top: 0;}
			#menu2 .li a{padding: 6px 16px 10px !important;}
			#raya_separadora_zona{left: 480px !important;}
			#menu_zonas {left: 490px !important;}
        </style>-->
    	<!--<link rel="stylesheet" type="text/css" href="Styles/css_menu.css" media="screen" />-->
        <div id="logo_liga">
        	<a class="block" href="http://127.0.0.1/futbol/bin/modules/ajax/clienteDesktop.php"></a>
        </div>
        <div id="menu_login">
        	<div class="li">
            	<a class="link_menu" href="http://127.0.0.1/futbol/bin/modules/ajax/login-registro" onclick="gtm_event('Conversion', 'Login-Registro_P1', 'Header', '')">login/registro</a>
            </div>
        </div>
        
        <div id="header_informacion">
        	<div id="menu">
            	<div class="li">
                	<a class="link_menu_current" href="http://127.0.0.1/futbol/bin/modules/ajax/clienteDesktop.php">Inicio</a>
                </div>
                <div class="li">
                	<a class="link_menu" href="http://127.0.0.1/futbol/bin/modules/ajax/noticias.php">noticias</a>
                </div>
                <div class="li">
                	<a class="link_menu" href="http://127.0.0.1/futbol/bin/modules/ajax/equipos.php">equipos</a>
                </div>
                <div id="box_menu_estadisticas">
                	<div id="estadisticas" class="link_menu">
                    	<a href="http://127.0.0.1/futbol/bin/modules/ajax/estadisticas.php">estadísticas</a>
                    </div>
                    <div id="estadisticas_box_elementos_menu" style="display:none">
                    	<div class="li">
                        	<div class="icono_estadisticas_temporada comun_informacion_desplegable"></div>
                            <a href="http://127.0.0.1/futbol/bin/modules/ajax/estadisticas.php">2013/14</a>
                        </div>
                        <div class="li">
                        	<div class="icono_estadisticas_historicas comun_informacion_desplegable"></div>
                            <a href="http://127.0.0.1/futbol/bin/modules/ajax/historicas.php">históricas</a>
                        </div>
                    </div>
                </div>
                <div class="li">
                	<a class="link_menu" href="http://127.0.0.1/futbol/bin/modules/ajax/posiciones.php">posiciones</a>
                </div>
                <div class="li">
                	<a class="link_menu" href="http://127.0.0.1/futbol/bin/modules/ajax/calendario.php">calendario</a>
                </div>                
            </div>
            <div id="menu_2">
            	<div class="li">
                	<a id="link-lfp" class="link_menu" href="http://127.0.0.1/futbol/bin/modules/ajax/fpc.php">sobre FPC</a>
                </div>
                <div class="li">
                	<a id="link-liga-bbva" class="link_menu" href="http://127.0.0.1/futbol/bin/modules/ajax/tpostobon.php">Torneo Postobón</a>
                </div>
                <div class="li">
                	<a id="link-liga-bbva" class="link_menu" href="http://127.0.0.1/futbol/bin/modules/ajax/libertadores.php">Copa Libertadores</a>
                </div>
                <div class="li">
                	<a id="link-liga-bbva" class="link_menu" href="http://127.0.0.1/futbol/bin/modules/ajax/otros.php">Otras competiciones</a>
                </div>
            </div>
            <div id="header_redes_sociales">
            	<a href="http://instagram.com/ligafutbolprofesional" target="_blank" onclick="gtm_social('Instagram', 'Ir_Canal_Header', 'statigr.am/tag/lfp')">
                	<div id="instagram" class="comun_redes_sociales"></div>
                </a>
                <a href="https://twitter.com/LFPnews" target="_blank" onclick="gtm_social('Twitter', 'Ir_Canal_Header', 'twitter.com/LFPnews')">
                	<div id="twitter" class="comun_redes_sociales"></div>
                </a>
                <a href="https://www.facebook.com/lfpoficial" target="_blank" onclick="gtm_social('Facebook', 'Ir_Canal_Header', 'www.facebook.com/lfpoficial')">
                	<div id="facebook" class="comun_redes_sociales"></div>
                </a>
            </div>
        </div>
    </div>
    <div id="balon_lateral"></div>
    <div id="contenido">
    	<script type="text/javascript" src=""></script>
        <div id="box_linea1" class="box_980">
        	<div id="box_noticia_1">
            	<div id="box_foto_noticia_1">
                	<img src="" width="640">
                    <span class="velo_blanco" style="display: inline; opacity: 0;"></span>
                    <div id="degrado_noticia">
                    	<a class="block" onclick="gtm_event('Modulo_Noticias', 'Destacada', 'http://www.lfp.es/noticias/el-numancia-crece-con-paso-firme', '')" href="http://www.lfp.es/noticias/el-numancia-crece-con-paso-firme" target=""></a>
                    </div>                    
                </div>
                <div id="box_titular_noticia">
                	<div id="tipo_noticia">Actualidad</div>
                    <table>
                    	<tbody>
                        	<tr>
                            	<td>
                                	<div id="titulo">
                                    	<a class="block" onclick="gtm_event('Modulo_Noticias', 'Destacada', 'http://www.lfp.es/noticias/el-numancia-crece-con-paso-firme', '')" href="http://www.lfp.es/noticias/el-numancia-crece-con-paso-firme" target="">El Numancia crece con paso firme</a>
                                    </div>
                                    <div id="subtitulo">
                                    	<a class="block" onclick="gtm_event('Modulo_Noticias', 'Destacada', 'http://www.lfp.es/noticias/el-numancia-crece-con-paso-firme', '')" href="http://www.lfp.es/noticias/el-numancia-crece-con-paso-firme" target="">Con seis jornadas consecutivas sin perder, el equipo soriano se ha situado en los puestos de playoff de ascenso a la Liga BBVA.</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="box_global_noticias2">
                	<div id="contenedor-slider" style="left:auto">
                    	<div id="subnoticia_1" class="box_noticia_2 width_305">...</div>
                        <div id="subnoticia_1" class="box_noticia_2 width_305">...</div>
                        <div id="subnoticia_1" class="box_noticia_2 width_305">...</div>
                        <div id="subnoticia_1" class="box_noticia_2 width_305">...</div>
                        <div id="subnoticia_1" class="box_noticia_2 width_305">...</div>
                    </div>
                </div>
            </div>
            
            <div id="box_linea1_contenedor2">
            	<div id="box_iconos_liga_bbva_adelante">
                	<!--<a id="icono_liga_bbva" class="fondo_degradado_bbva_adelante" onclick="gtm_event('Modulo_Horario', 'Tab_Liga', 'LigaBBVA', '')" href="#box_partidos_1"><img src="http://statics.lfp.es/img/liga-bbva.png"></a>
                    <a id="icono_liga_adelante" class="fondo_degradado_bbva_adelante pestanya_inactiva" onclick="gtm_event('Modulo_Horario', 'Tab_Liga', 'LigaAdelante', '')" href="#box_partidos_2"><img src="http://statics.lfp.es/img/liga-adelante.png"></a>-->
                	<p>Liga Postobon</p>
                    <p>Copa Libertadores</p>
                </div>
                <div id="box_partidos_1" class="fondo_degradado">
                	<div id="div_Jornada_13_1_1" class="container-jornadas">
                    	<div id="fecha_jornada">
                        	<a rel="cambiar_jornada_widget_home" href="#12_1_1" class="flecha_jornada_anterior pointer flecha_fecha" onclick="gtm_event('Modulo_Horario', 'Cambio_Jornada', 'Anterior', 'bbva')"></a>
                            <p>Jornada 13</p>
                            <a rel="cambiar_jornada_widget_home" href="#14_1_1" class="flecha_jornada_siguiente pointer flecha_fecha" onclick="gtm_event('Modulo_Horario', 'Cambio_Jornada', 'Siguiente', 'bbva')"></a>
                        </div>
                        <div class="box_horario_jornada">
                        	<p>Viernes, 08 noviembre de 2013</p>
                            <div id="box_horario_partido">
                            	<div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/osasuna_almeria">
                                    	<span class="nombre_equipo equipo_local">Osasuna</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">0-1</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Almería</span>
                                    </a>
                                </div>
                                <div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/granada_malaga">
                                    	<span class="nombre_equipo equipo_local">Granada</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">3-1</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Málaga</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box_horario_jornada">
                        	<p>Sábado, 09 noviembre de 2013</p>
                            <div id="box_horario_partido">
                            	<div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/real-madrid_real-sociedad">
                                    	<span class="nombre_equipo equipo_local">Real Madrid</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">5-1</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Real Sociedad</span>
                                    </a>
                                </div>
                                <div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/getafe_elche">
                                    	<span class="nombre_equipo equipo_local">Getafe</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">3-1</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Elche</span>
                                    </a>
                                </div>
                                <div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/athletic_levante">
                                    	<span class="nombre_equipo equipo_local">Athletic</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">2-1</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Levante</span>
                                    </a>
                                </div>
                                <div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/celta_rayo">
                                    	<span class="nombre_equipo equipo_local">Celta</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">0-2</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Rayo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box_horario_jornada">
                        	<p>Domingo, 10 noviembre de 2013</p>
                            <div id="box_horario_partido">
                            	<div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/espanyol_sevilla">
                                    	<span class="nombre_equipo equipo_local">Español</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">1-3</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Sevilla</span>
                                    </a>
                                </div>
                                <div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/valencia_valladolid">
                                    	<span class="nombre_equipo equipo_local">Valencia</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">2-2</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Valladolid</span>
                                    </a>
                                </div>
                                <div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/villarreal_atletico">
                                    	<span class="nombre_equipo equipo_local">Villarreal</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">1-1</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Atlético</span>
                                    </a>
                                </div>
                                <div class="linea_partido linea_partido3">
                                	<span class="pixel_video"></span>
                                    <a href="http://www.lfp.es/directo/temporada-2013-2014/liga-bbva/13/betis_barcelona">
                                    	<span class="nombre_equipo equipo_local">R. Bétis</span>
                                        <span class="escudo_comun sprite_escudos osasuna_thumb"></span>
                                        <span class="horario_partido ">1-4</span>
                                        <span class="escudo_comun sprite_escudos almeria_thumb"></span>
                                        <span class="nombre_equipo equipo_visitante">Barcelona</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="Ver más"></div>
                    </div>
                </div>
                <div id="box_partidos_2" class="fondo_degradado" style="display:none"></div>
            </div>
        </div>
        
        <div id="box_lineal2" class="box_980">
        	Más noticias y estadísticas
        </div>
        
        <div id="box_lineal3" class="box_980">
        	Imágenes
        </div>
    </div>
    <div id="degradado_fondo"></div>
    <di id="box_footer">
    </div>

</div>

</body>
</html>
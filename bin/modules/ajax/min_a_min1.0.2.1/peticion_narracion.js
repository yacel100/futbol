$(document).ready(function (){
	$("#miselect").change(function (){
		$("#carga").html('<img src="../../../../varios/imagenes/ajax-loader.gif"></img>')
		$("#caja").empty()
		peticion()
		setInterval(function(){	peticion(); }, 20000)
	})
})                                                   																													 		                              
function peticion()
{var id = $("#miselect").val()
$.getJSON("narracion.php",{id:id},llegadaDatos)													
}


    function llegadaDatos(datos)
    { $("#carga").empty()
	 $("#presentacion").empty()
	 
	 /*$("#presentacion").append( "<tr class=\"odd-row\"><th class=\"first\">Minuto</th><th>Suceso</th><th class=\"last\">Detalle</th><tr>")*/
	 /*$(function() {*/
		/* For zebra striping */
        /*$("table tr:nth-child(odd)").addClass("odd-row")*/
		/* For cell text alignment */
		/*$("table td:first-child, table th:first-child").addClass("first")*/
		/* For removing the last border */
		/*$("table td:last-child, table th:last-child").addClass("last")
	})*/
	
	 $("table").append( "<tr><th>Minuto</th><th>Suceso</th><th>Detalle</th><tr>")
	  
	 
	     for (var i = 0; i <= datos.length; i++)

		$("#presentacion").append( "<tr>"+ "<td>"+datos[i].tiempo+ "</td>"+"<td>"+datos[i].descripcion +"</td>"+"<td>"+datos[i].comentario+"</td>"+ "</tr>")
		  
	 
	 
    }
	

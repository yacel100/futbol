$(document).ready(function (){
                              $("#miselect").change(function (){
		                                                      var id = $("#miselect").val();
        	                                                  $.getJSON("data_equipos.php",{id:id},llegadaDatos);            
        
		                                                      });
                             });

    function llegadaDatos(datos)
    {
	  //$("#equipo").append("<h1>hola</h1>");
	  if (datos.Status == 1)
	  {
	    
	    $("#equipo").text(datos.Data.equipo).show("slow");
	    //$("#estrellas").text(datos.Data.estrellas).show("slow");
		render_estrellas(datos);
		//$("#imagen").append("<img src='http://127.0.0.1/sitio/futbol/Jfutbol_2/varios/imagenes/america%20de%20cali.jpeg'/>");
		if (datos.Data.estrellas > 8){
		  $("#estrellas").append("<h2>Buen equipo</h2>");
		  
		  }
		else
		 $("#estrellas").append("<h2>Equipo regularsito</h2>");  
	  }
	 else 
	  alert("Equipo no encontrado");
    }
	function render_estrellas(datos)
	{
	
	$("#estrellas").empty();
	if($("#miselect").val()==1||$("#miselect").val()==2)
	{
	    for(i=0;i<datos.Data.estrellas;i++)
		  {
		    $("#estrellas").append("<img src='http://127.0.0.1/sitio/futbol/varios/imagenes/roja.png'/>");
		  
		  
		  }
	}
	if($("#miselect").val()==3)
	{for(i=0;i<datos.Data.estrellas;i++)
		  {
	$("#estrellas").append("<img src='http://127.0.0.1/sitio/futbol/varios/imagenes/azul.png'/>");
	    }
	}
}
	/*$(function() {
		$("#result").html("<strong>Datos...</strong>");
	});*/
	
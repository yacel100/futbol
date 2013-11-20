<?php
/* @var $this NarracionController */
/* @var $dataProvider CActiveDataProvider */
/*/
$this->breadcrumbs=array(
	'Narracions',
);
/**/

$this->menu=array(
	array('label'=>'Create Narracion', 'url'=>array('create')),
	array('label'=>'Manage Narracion', 'url'=>array('admin')),
);
#echo "<pre>";
#var_dump($Equipos);
?>

<h1>Narracion</h1>

<style type="text/css">
	.estado{
		float: rigth;
	}
	
	.loading{
		padding: 20px;
		background-image: url('images/loading.gif');
		background-position: center center;
		background-repeat: no-repeat;
	}
	
	.error{
		background-image: url('images/error.png');
		background-position: center center;
		background-repeat: no-repeat;
	}

</style>

<script>
	$(document).ready(function(){
		$("#seleccionEncuentro").change(function(){
			$("#iniciar").prop('disabled',false);
	});
});
</script>

<?php
	/*echo CHtml::ajaxLink(
			"Enlace Envio",	//Nombre del enlace
			array('narracion'),	//Uri o ruta donde apunta la peticion ajax
			array(
				'update'=>'#resultado',
				'beforeSend'=>	"function(){
									$('#resultado').addClass('loading');
									$('#resultado').html('');
								}",
				'complete'=>"function(){
								$('#resultado').removeClass('loading');
							}",
				'error'=>"function(){
								$('#resulto').addClass('error');
							}",
				'success'=>"function(data){
								jQuery('#resultado').html(data)
							}"
			)	//Opciones de ajax
		);
	*/
?>
<div data-role = "page" data-theme = "b">
	<div id = "wrapper">
	<select id = "seleccionEncuentro" data-native-menu = "true">
		<option value = "0"> --Selecciona Encuentro-- </option>
		<?php foreach($Equipos as $equipo){ ?>
		<option value = "0"><?php echo $equipo["local"]." vs ".$equipo["visitante"]; ?></option>
		<?php } ?>
	</select>

	<br>

	<button id = "iniciar" data-role = "button" data-inline = "true" disabled = "disabled"> Iniciar </button>
	<button id = "pausar" data-role = "button" data-inline = "true" disabled = "disabled"> Pausar </button>
	<button id = "finalizar" data-role = "button" data-inline = "true" disabled = "disabled"> Finalizar </button>

	<div id = "contador"></div>

	<br>

	<button id = "evento" data-role = "button" data-inline = "true" disabled = "disabled"> Nuevo Evento </button> <br>

	<label> Minuto: </label> <label id = "minuto"> </label></label> <br>

	<select id = "seleccionEvento" disabled = "disabled">
		<option> --Selecciona Evento-- </option>
	</select>

	<br>

	<input type = "text" id = "comentario" data-clear-btn="true" disabled = "disabled">

	<br>
	<?php
	echo CHtml::ajaxSubmitButton(
			"Enviar",			//Nombre del enlace
			array('narracion'),	//Uri o ruta donde apunta la peticion ajax
			array(
				'update'=>'#resultado',
				'beforeSend'=>	"function(){
									$('#resultado').addClass('loading');
									$('#resultado').html('');
								}",
				'complete'=>"function(){
								$('#resultado').removeClass('loading');
							}",
				'error'=>"function(){
								$('#resulto').addClass('error');
							}",
				'success'=>"function(data){
								jQuery('#resultado').html(data)
							}"
			)	//Opciones de ajax
		);
	
?>
	<!--<button id = "enviar" data-role = "button" data-inline = "true" disabled = "disabled"> Enviar </button>
	-->		
	</div>
</div>

<div id="resultado" class="estado">Aqui se mostrara el resultado</div>

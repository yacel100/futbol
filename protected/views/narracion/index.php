<?php
/* @var $this NarracionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Narracions',
);

$this->menu=array(
	array('label'=>'Create Narracion', 'url'=>array('create')),
	array('label'=>'Manage Narracion', 'url'=>array('admin')),
);
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

<?php
	echo CHtml::ajaxLink(
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
	
?>
<div id="resultado" class="estado">Aqui se mostrara el resultado</div>

<?php
/* @var $this EquipoController */
/* @var $data Equipo */
?>

<div class="view">

	<center><?php echo CHtml::encode($data->nombre);  ?>
	<br />
	
	<?php
		$data->imagen = str_replace(' ','%20',$data->imagen); //Quitar espacios en blanco por %20
	?>
	
	<img src=<?php echo CHtml::encode(Yii::app()->request->baseUrl."/".$data->imagen); ?>>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estrellas')); ?>:</b>
	<?php echo CHtml::encode($data->estrellas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fundacion')); ?>:</b>
	<?php echo CHtml::encode($data->fundacion); ?>
	<br />
	
	</center>	

	<div align="right"><?php echo CHtml::link(CHtml::encode('Detalles'), array('view', 'id'=>$data->id_equipo));  ?></div>
	<br />


</div>
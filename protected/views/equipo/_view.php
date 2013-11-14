<?php
/* @var $this EquipoController */
/* @var $data Equipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_equipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_equipo), array('view', 'id'=>$data->id_equipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estrellas')); ?>:</b>
	<?php echo CHtml::encode($data->estrellas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fundacion')); ?>:</b>
	<?php echo CHtml::encode($data->fundacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />


</div>
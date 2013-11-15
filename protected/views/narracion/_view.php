<?php
/* @var $this NarracionController */
/* @var $data Narracion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_narracion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_narracion), array('view', 'id'=>$data->id_narracion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_encuentro')); ?>:</b>
	<?php echo CHtml::encode($data->cod_encuentro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_evento')); ?>:</b>
	<?php echo CHtml::encode($data->cod_evento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo); ?>
	<br />


</div>
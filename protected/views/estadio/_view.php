<?php
/* @var $this EstadioController */
/* @var $data Estadio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estadio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_estadio), array('view', 'id'=>$data->id_estadio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>
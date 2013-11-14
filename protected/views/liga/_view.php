<?php
/* @var $this LigaController */
/* @var $data Liga */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_liga')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_liga), array('view', 'id'=>$data->id_liga)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>
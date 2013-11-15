<?php
/* @var $this NarracionController */
/* @var $model Narracion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_narracion'); ?>
		<?php echo $form->textField($model,'id_narracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_encuentro'); ?>
		<?php echo $form->textField($model,'cod_encuentro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_evento'); ?>
		<?php echo $form->textField($model,'cod_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentario'); ?>
		<?php echo $form->textField($model,'comentario',array('size'=>60,'maxlength'=>900)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo'); ?>
		<?php echo $form->textField($model,'tiempo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
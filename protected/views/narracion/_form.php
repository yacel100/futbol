<?php
/* @var $this NarracionController */
/* @var $model Narracion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'narracion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_encuentro'); ?>
		<?php echo $form->textField($model,'cod_encuentro'); ?>
		<?php echo $form->error($model,'cod_encuentro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_evento'); ?>
		<?php echo $form->textField($model,'cod_evento'); ?>
		<?php echo $form->error($model,'cod_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comentario'); ?>
		<?php echo $form->textField($model,'comentario',array('size'=>60,'maxlength'=>900)); ?>
		<?php echo $form->error($model,'comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo'); ?>
		<?php echo $form->textField($model,'tiempo'); ?>
		<?php echo $form->error($model,'tiempo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
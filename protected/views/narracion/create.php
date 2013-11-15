<?php
/* @var $this NarracionController */
/* @var $model Narracion */

$this->breadcrumbs=array(
	'Narracions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Narracion', 'url'=>array('index')),
	array('label'=>'Manage Narracion', 'url'=>array('admin')),
);
?>

<h1>Create Narracion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
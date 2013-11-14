<?php
/* @var $this EstadioController */
/* @var $model Estadio */

$this->breadcrumbs=array(
	'Estadios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estadio', 'url'=>array('index')),
	array('label'=>'Manage Estadio', 'url'=>array('admin')),
);
?>

<h1>Create Estadio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
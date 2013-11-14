<?php
/* @var $this EstadioController */
/* @var $model Estadio */

$this->breadcrumbs=array(
	'Estadios'=>array('index'),
	$model->id_estadio,
);

$this->menu=array(
	array('label'=>'List Estadio', 'url'=>array('index')),
	array('label'=>'Create Estadio', 'url'=>array('create')),
	array('label'=>'Update Estadio', 'url'=>array('update', 'id'=>$model->id_estadio)),
	array('label'=>'Delete Estadio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_estadio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estadio', 'url'=>array('admin')),
);
?>

<h1>View Estadio #<?php echo $model->id_estadio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_estadio',
		'nombre',
	),
)); ?>

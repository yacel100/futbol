<?php
/* @var $this EstadioController */
/* @var $model Estadio */

$this->breadcrumbs=array(
	'Estadios'=>array('index'),
	$model->id_estadio=>array('view','id'=>$model->id_estadio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estadio', 'url'=>array('index')),
	array('label'=>'Create Estadio', 'url'=>array('create')),
	array('label'=>'View Estadio', 'url'=>array('view', 'id'=>$model->id_estadio)),
	array('label'=>'Manage Estadio', 'url'=>array('admin')),
);
?>

<h1>Update Estadio <?php echo $model->id_estadio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
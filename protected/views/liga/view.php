<?php
/* @var $this LigaController */
/* @var $model Liga */

$this->breadcrumbs=array(
	'Ligas'=>array('index'),
	$model->id_liga,
);

$this->menu=array(
	array('label'=>'List Liga', 'url'=>array('index')),
	array('label'=>'Create Liga', 'url'=>array('create')),
	array('label'=>'Update Liga', 'url'=>array('update', 'id'=>$model->id_liga)),
	array('label'=>'Delete Liga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_liga),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Liga', 'url'=>array('admin')),
);
?>

<h1>Liga <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_liga',
		'nombre',
	),
)); ?>

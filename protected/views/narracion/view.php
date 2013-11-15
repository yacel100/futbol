<?php
/* @var $this NarracionController */
/* @var $model Narracion */

$this->breadcrumbs=array(
	'Narracions'=>array('index'),
	$model->id_narracion,
);

$this->menu=array(
	array('label'=>'List Narracion', 'url'=>array('index')),
	array('label'=>'Create Narracion', 'url'=>array('create')),
	array('label'=>'Update Narracion', 'url'=>array('update', 'id'=>$model->id_narracion)),
	array('label'=>'Delete Narracion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_narracion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Narracion', 'url'=>array('admin')),
);
?>

<h1>View Narracion #<?php echo $model->id_narracion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_narracion',
		'cod_encuentro',
		'cod_evento',
		'comentario',
		'tiempo',
	),
)); ?>

<?php
/* @var $this NarracionController */
/* @var $model Narracion */
/*/
$this->breadcrumbs=array(
	'Narracions'=>array('index'),
	$model->id_narracion=>array('view','id'=>$model->id_narracion),
	'Update',
);
/**/
$this->menu=array(
	array('label'=>'List Narracion', 'url'=>array('index')),
	array('label'=>'Create Narracion', 'url'=>array('create')),
	array('label'=>'View Narracion', 'url'=>array('view', 'id'=>$model->id_narracion)),
	array('label'=>'Manage Narracion', 'url'=>array('admin')),
);
?>

<h1>Update Narracion <?php echo $model->id_narracion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
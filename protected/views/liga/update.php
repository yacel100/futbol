<?php
/* @var $this LigaController */
/* @var $model Liga */

$this->breadcrumbs=array(
	'Ligas'=>array('index'),
	$model->id_liga=>array('view','id'=>$model->id_liga),
	'Update',
);

$this->menu=array(
	array('label'=>'List Liga', 'url'=>array('index')),
	array('label'=>'Create Liga', 'url'=>array('create')),
	array('label'=>'View Liga', 'url'=>array('view', 'id'=>$model->id_liga)),
	array('label'=>'Manage Liga', 'url'=>array('admin')),
);
?>

<h1>Update Liga <?php echo $model->id_liga; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
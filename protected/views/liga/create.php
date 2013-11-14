<?php
/* @var $this LigaController */
/* @var $model Liga */

$this->breadcrumbs=array(
	'Ligas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Liga', 'url'=>array('index')),
	array('label'=>'Manage Liga', 'url'=>array('admin')),
);
?>

<h1>Create Liga</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
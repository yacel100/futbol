<?php
/* @var $this LigaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ligas',
);

$this->menu=array(
	array('label'=>'Create Liga', 'url'=>array('create')),
	array('label'=>'Manage Liga', 'url'=>array('admin')),
);
?>

<h1>Ligas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

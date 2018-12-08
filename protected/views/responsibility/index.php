<?php
/* @var $this ResponsibilityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Responsibilities',
);

$this->menu=array(
	array('label'=>'Create Responsibility', 'url'=>array('create')),
	array('label'=>'Manage Responsibility', 'url'=>array('admin')),
);
?>

<h1>Responsibilities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

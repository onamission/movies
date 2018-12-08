<?php
/* @var $this ResponsibilityController */
/* @var $model Responsibility */

$this->breadcrumbs=array(
	'Responsibilities'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Responsibility', 'url'=>array('index')),
	array('label'=>'Create Responsibility', 'url'=>array('create')),
	array('label'=>'Update Responsibility', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Responsibility', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Responsibility', 'url'=>array('admin')),
);
?>

<h1>View Responsibility #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'created_by',
		'created_date',
		'updated_by',
		'updated_date',
	),
)); ?>

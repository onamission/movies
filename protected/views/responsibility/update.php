<?php
/* @var $this ResponsibilityController */
/* @var $model Responsibility */

$this->breadcrumbs=array(
	'Responsibilities'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Responsibility', 'url'=>array('index')),
	array('label'=>'Create Responsibility', 'url'=>array('create')),
	array('label'=>'View Responsibility', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Responsibility', 'url'=>array('admin')),
);
?>

<h1>Update Responsibility <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
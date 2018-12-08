<?php
/* @var $this ResponsibilityController */
/* @var $model Responsibility */

$this->breadcrumbs=array(
	'Responsibilities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Responsibility', 'url'=>array('index')),
	array('label'=>'Manage Responsibility', 'url'=>array('admin')),
);
?>

<h1>Create Responsibility</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
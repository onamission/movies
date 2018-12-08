<?php
/* @var $this MoviePersonResponsibilityController */
/* @var $model MoviePersonResponsibility */

$this->breadcrumbs=array(
	'Movie Person Responsibilities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MoviePersonResponsibility', 'url'=>array('index')),
	array('label'=>'Manage MoviePersonResponsibility', 'url'=>array('admin')),
);
?>

<h1>Create MoviePersonResponsibility</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
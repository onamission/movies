<?php
/* @var $this MoviePersonResponsibilityController */
/* @var $model MoviePersonResponsibility */

$this->breadcrumbs=array(
	'Movie Person Responsibilities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MoviePersonResponsibility', 'url'=>array('index')),
	array('label'=>'Create MoviePersonResponsibility', 'url'=>array('create')),
	array('label'=>'View MoviePersonResponsibility', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MoviePersonResponsibility', 'url'=>array('admin')),
);
?>

<h1>Update MoviePersonResponsibility <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
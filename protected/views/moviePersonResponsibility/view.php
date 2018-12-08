<?php
/* @var $this MoviePersonResponsibilityController */
/* @var $model MoviePersonResponsibility */

$this->breadcrumbs=array(
	'Movie Person Responsibilities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MoviePersonResponsibility', 'url'=>array('index')),
	array('label'=>'Create MoviePersonResponsibility', 'url'=>array('create')),
	array('label'=>'Update MoviePersonResponsibility', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MoviePersonResponsibility', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MoviePersonResponsibility', 'url'=>array('admin')),
);
?>

<h1>View MoviePersonResponsibility #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'movie_id',
		'person_id',
		'responsibility_id',
		'created_by',
		'created_date',
		'updated_by',
		'updated_date',
	),
)); ?>

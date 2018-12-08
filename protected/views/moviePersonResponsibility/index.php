<?php
/* @var $this MoviePersonResponsibilityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movie Person Responsibilities',
);

$this->menu=array(
	array('label'=>'Create MoviePersonResponsibility', 'url'=>array('create')),
	array('label'=>'Manage MoviePersonResponsibility', 'url'=>array('admin')),
);
?>

<h1>Movie Person Responsibilities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

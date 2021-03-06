<?php
/* @var $this MoviePersonResponsibilityController */
/* @var $model MoviePersonResponsibility */

$this->breadcrumbs=array(
	'Movie Person Responsibilities'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MoviePersonResponsibility', 'url'=>array('index')),
	array('label'=>'Create MoviePersonResponsibility', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#movie-person-responsibility-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Movie Person Responsibilities</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'movie-person-responsibility-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'movie_id',
		'person_id',
		'responsibility_id',
		'created_by',
		'created_date',
		/*
		'updated_by',
		'updated_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
/* @var $this MoviePersonResponsibilityController */
/* @var $model MoviePersonResponsibility */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'movie-person-responsibility-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'movie_id'); ?>
		<?php echo $form->textField($model,'movie_id'); ?>
		<?php echo $form->error($model,'movie_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<?php echo $form->textField($model,'person_id'); ?>
		<?php echo $form->error($model,'person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsibility_id'); ?>
		<?php echo $form->textField($model,'responsibility_id'); ?>
		<?php echo $form->error($model,'responsibility_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_date'); ?>
		<?php echo $form->textField($model,'updated_date'); ?>
		<?php echo $form->error($model,'updated_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
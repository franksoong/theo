<?php
/* @var $this LibraryController */
/* @var $model Library */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'library-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'display_name'); ?>
		<?php echo $form->textField($model,'display_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'display_name'); ?>
	</div>

	<div class="row">
		<div>upload image:</div>
		<?php echo CHtml::activeFileField($model,'store_path'); ?>
		<?php echo $form->error($model,'store_path'); ?>
	</div>
	
	<div class="row">
		<?php echo 'Preview:' ?>
        <?php echo '<img src="'.$model->store_path.'" width="width:200px;height:300px;"/>'; ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
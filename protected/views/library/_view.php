<?php
/* @var $this LibraryController */
/* @var $data Library */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('display_name')); ?>:</b>
	<?php echo CHtml::encode($data->display_name); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('store_path')); ?>:</b>
	<?php echo CHtml::image($data->store_path); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />
</div>
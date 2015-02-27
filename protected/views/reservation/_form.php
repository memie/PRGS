<?php
/* @var $this ReservationController */
/* @var $model Reservation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
		
		<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
		<div class="row">
		<?php echo $form->labelEx($model,'businesshours'); ?>
		<?php echo $form->textField($model,'businesshours',array('size'=>45,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'businesshours'); ?>
	</div>
		<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>45,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
	
		<div class="row">
		<?php echo $form->labelEx($model,'link map'); ?>
		<?php echo $form->textField($model,'link map',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link map'); ?>
	</div>
	
	  <div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
	
		<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList ($model,'type', array (
				
				'1'=>'ไทย-พุทธ',
				' 2'=>'ไทย-มุสลิม',
			
				), array (	'prompt' => 'เลือกประเภทร้าน' 
		) ); ?>
		<div class="row">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->dropDownList ($model,'score', array (
				
				'1'=>'1',
				'2'=>'1.5',
				'3'=>'2',
				'4'=>'2.5',
				'5'=>'3',
				'6'=>'3.5',
				'7'=>'4',
				'8'=>'4.5',
				'9'=>'5',
			
				), array (	'prompt' => 'ให้คะแนนร้าน' 
		) ); ?>
		<?php echo $form->error($model,'occasion'); ?>
	</div>
		<?php echo $form->error($model,'occasion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
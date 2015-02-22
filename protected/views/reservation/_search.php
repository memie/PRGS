<?php
/* @var $this ReservationController */
/* @var $model Reservation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>


	<div class="row">
		 <?php   echo $form->labelEx($model,'date');  //ใส่ label ของ form ?>
		 <?php $this->widget(
		'zii.widgets.jui.CJuiDatePicker', 
		array(
			'attribute'=>'date',
			'model'=>$model,
			'options'=>array( // effect
				'showAnim'=>'fadeIn', //'fold', 'slideDown','fadeIn','blind,...
				//'showButtonPanel'=>true,
				'dateFormat'=>'dd-mm-yy',
				'changeMonth'=>true,
				'changeYear'=>true	,
				'yearRange'=>'2014:2014',
			),'htmlOptions'=>array(
		'style'=>''
),
	
)
);?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->dropDownList ($model,'time', array (
				
				'01:00 AM - 02:00 AM'=>'01:00 AM - 02:00 AM',
				'03:00 AM - 04:00 AM'=>'03:00 AM - 04:00 AM',
				'05:00 AM - 06:00 AM'=>'05:00 AM - 06:00 AM',
				'07:00 AM - 08:00 AM'=>'07:00 AM - 08:00 AM',
				'09:00 AM - 10:00 AM'=>'09:00 AM - 10:00 AM',
				'11:00 AM - 12:00 PM'=>'11:00 AM - 12:00 PM',
				'01:00 PM - 02:00 PM'=>'01:00 PM - 02:00 PM',
				'03:00 PM - 04:00 PM'=>'03:00 PM - 04:00 PM',
				'05:00 PM - 06:00 PM'=>'05:00 PM - 06:00 PM',
				'07:00 PM - 08:00 PM'=>'07:00 PM - 08:00 PM',
				'09:00 PM - 10:00 PM'=>'09:00 PM - 10:00 PM',
				'11:00 PM - 00:00 AM'=>'11:00 PM - 00:00 AM',
					), array ('prompt' => 'Please Select Time' 
		) ); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tb_num'); ?>
		<?php echo $form->dropDownList ($model,'tb_num', array (
				
				'VIP 1'=>'VIP 1',
				'VIP 2'=>'VIP 2',
				'VIP 3'=>'VIP 3',
				'VIP 4'=>'VIP 4',
				'VIP 5'=>'VIP 5',
				'VIP 6'=>'VIP 6',
				'VIP 7'=>'VIP 7',
				'VIP 8'=>'VIP 8',
				'VIP 9'=>'VIP 9',
				'VIP 10'=>'VIP 10',
				), array (	'prompt' => 'Please Select Table Number'  
		) ); ?>
		<?php echo $form->error($model,'tb_num'); ?>
	</div>
	
	


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
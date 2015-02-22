<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Review', 'url'=>array('index')),
	array('label'=>'Create Review', 'url'=>array('create')),
	array('label'=>'Update Review', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Review', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->name),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Review', 'url'=>array('admin')),
);
?>
<br><br><br>
<h1 style="color:#804000"><b>View Review #<?php echo $model->name; ?></b></h1>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Back',
    'type'=>'warning', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'small', // null, 'large', 'small' or 'mini'
		'url'=>array('index'),
)); 
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'title',
		'detail',
	array (
		'name' => 'webboard.image',
		'type' => 'html',
		'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/picture/' . $model->image, '', array (
				'width' => 200,
				'height' => 200
		) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/picture/noimage.jpg', '', array (
				'width' => 105,
				'height' => 105
		) )
),
		'name',
		'post_date',
	),
)); ?>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'topic-grid',
		'template'=>'{items}{pager}',
		'dataProvider' => $comment->search ( '$model=>id', 'search', array (
				'review_id' => $comment->review_id = $model->id
		) ),	
	'columns'=>array(
/*
			array (
		'name' => 'id',
		'value' => '$this->grid->dataProvider->pagination->offset+$row+1'
),
*/
		'comment',

			'name',
	'date_time',


	),
)); ?>


		<div class="form">

	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'topic1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
		
)); ?>
	
	
		
<div class="row">
		<?php echo $form->labelEx($comment,'comment'); ?>
		

<?php $this->widget('application.extensions.cleditor.ECLEditor', array(
		'model'=>$comment,
		'attribute'=>'comment', //Model attribute name. Nome do atributo do modelo.
		'options'=>array(
				'width'=>'500',
				'height'=>250,
				'useCSS'=>true,
		),
		'value'=>$comment->comment, //If you want pass a value for the widget. I think you will. Se vocÃª precisar passar um valor para o gadget. Eu acho irÃ¡.
));
        ?>
        
		<?php echo $form->error($comment,'comment'); ?>
		
			</div>
			<div class="row">
		<?php echo $form->labelEx($comment,'name'); ?>
		<?php echo $form->textField($comment,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($comment,'name'); ?>
	</div>
		<div class="row buttons">
		<?php echo CHtml::submitButton($comment->isNewRecord ? 'save' : 'save'); ?>
	</div>
		
	</div>
<?php $this->endWidget(); ?>		</div>
		
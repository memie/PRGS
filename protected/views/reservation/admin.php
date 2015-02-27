<?php
/* @var $this ReservationController */
/* @var $model Reservation */

$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Reservation', 'url'=>array('index')),
	array('label'=>'Create Reservation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#reservation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?><br><br><br>
<h1 style="color:#2f97ff"><b>จัดการร้าน ไทย-พุทธ</b></h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reservation-grid',
		'template'=>'{items}{pager}',
		'dataProvider' => $model->search ( '$model=>id', 'search', array (
				'status' => $model->status = array('confirm','Wait'),


		) ),

	//'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		//'description',
		'address',
		'businesshours',
		'phone',
		'score',
		'image',
		'datetime',
		//'name',
		//'email',
		//'phone',
		//'occasion',
		//'note', 
		//'tb_num',
		//'date',
		//'time',
		//'status',
		
		
		
		array(
		'class'=>'CButtonColumn',
		'htmlOptions'=>array('style'=>'width: 50px'),
		'template'=>'{update}',
),
	),
)); ?>
 <br> <br>
 <h1 style="color:#2f97ff"><b>จัดการร้าน ไทย-มุสลิม</b></h1>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reservation-grid',
		'template'=>'{items}{pager}',
		'dataProvider' => $model->search ( '$model=>id', 'search', array (
				'status' => $model->status = array('confirm','Wait'),


		) ),

	//'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		//'description',
		'address',
		'businesshours',
		'phone',
		'score',
		'image',
		'datetime',
		
		
		array(
		'class'=>'CButtonColumn',
		'htmlOptions'=>array('style'=>'width: 50px'),
		'template'=>'{update}',
),
	),
)); ?>


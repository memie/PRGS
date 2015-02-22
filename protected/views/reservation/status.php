
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
?><br>
<h1 style="color:#804000"><b>Reservations Status</b></h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reservation-grid',
		'template'=>'{items}{pager}',
		'dataProvider' => $model->search ( '$model=>id', 'search', array (
				'status' => $model->status = array('confirm','Wait') ,


		) ),

	//'filter'=>$model,
	'columns'=>array(
		'datetime',
		'name',
		'tb_num',
		'date',
		'time',
		'status',
		
		
		
	),
)); ?>


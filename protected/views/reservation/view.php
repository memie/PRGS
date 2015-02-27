<?php
/* @var $this ReservationController */
/* @var $model Reservation */



$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Reservation', 'url'=>array('index')),
	array('label'=>'Create Reservation', 'url'=>array('create')),
	array('label'=>'Update Reservation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Reservation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reservation', 'url'=>array('admin')),
);
?>
<br>

<h1 style="color:#2f97ff"><b> Restaurant View No.</b><?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Back',
    'type'=>'warning', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'small', // null, 'large', 'small' or 'mini'
		'url'=>array('admin'),
)); 
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'id',
		'title',
		'description',
		'address',
		'businesshours',
		'phone',
		'score',
		'image',
		'datetime',
	),
)); ?>




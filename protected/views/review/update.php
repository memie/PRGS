<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Review', 'url'=>array('index')),
	array('label'=>'Create Review', 'url'=>array('create')),
	array('label'=>'View Review', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Review', 'url'=>array('admin')),
);
?>
<br><br><br>
<h1 style="color:#804000"><b>Update Review #</b><?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
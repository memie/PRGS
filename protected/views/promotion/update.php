<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Promotion', 'url'=>array('index')),
	array('label'=>'Create Promotion', 'url'=>array('create')),
	array('label'=>'View Promotion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Promotion', 'url'=>array('admin')),
);
?>
<br><br><br>
<h1 style="color: #804000"><b>Update Promotion </b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
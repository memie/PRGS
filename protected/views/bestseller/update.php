<?php
/* @var $this BestsellerController */
/* @var $model Bestseller */

$this->breadcrumbs=array(
	'Bestsellers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bestseller', 'url'=>array('index')),
	array('label'=>'Create Bestseller', 'url'=>array('create')),
	array('label'=>'View Bestseller', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bestseller', 'url'=>array('admin')),
);
?>
<br><br><br>
<h1 style="color: #804000"><b>Update Bestseller </b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
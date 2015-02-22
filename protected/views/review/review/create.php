<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Review', 'url'=>array('index')),
	array('label'=>'Manage Review', 'url'=>array('admin')),
);
?>

<h1>Create Review</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
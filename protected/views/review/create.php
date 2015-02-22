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

<h1 style="color:#804000"><b>Create Review</b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
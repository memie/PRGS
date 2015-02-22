<?php
/* @var $this BestsellerController */
/* @var $model Bestseller */

$this->breadcrumbs=array(
	'Bestsellers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bestseller', 'url'=>array('index')),
	array('label'=>'Manage Bestseller', 'url'=>array('admin')),
);
?>
<br><br><br>
<h1 style="color:#804000"><b>Create Bestseller</b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
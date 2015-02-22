<?php
/* @var $this TypeController */
/* @var $model Type */

$this->breadcrumbs=array(
	'Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Type', 'url'=>array('index')),
	array('label'=>'Create Type', 'url'=>array('create')),
	array('label'=>'View Type', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Type', 'url'=>array('admin')),
);
?>
<br><br><br>
<h1 style="color:#804000"><b>Update Type #<?php echo $model->name; ?></b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
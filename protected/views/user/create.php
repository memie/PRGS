<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<br><br><br>
<h1 style="color:#804000"><b>Create New User</b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
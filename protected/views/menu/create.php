<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Menu', 'url'=>array('index')),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>
<br><br>
<h1 style="color:#804000"><b>Create Menu</b></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'type'=>$type)); ?>
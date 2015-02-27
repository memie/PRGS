<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Menu', 'url'=>array('index')),
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'View Menu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>
<br><br><br>
<h1 style="color:#2f97ff"><b>แก้ไขข้อมูลร้าน ลำดับที่  <?php echo $model->id; ?></b></h1>


<?php $this->renderPartial('_form', array('model'=>$model,'type'=>$type)); ?>
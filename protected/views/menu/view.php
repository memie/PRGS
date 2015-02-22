<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->title,
		
);

$this->menu=array(
	array('label'=>'List Menu', 'url'=>array('index')),
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'Update Menu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
	
);
?>
<br><br><br>

<h1 style="color:#804000"><b>View Menu </b></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		array (
		'name' => 'menu.image',
		'type' => 'html',
		'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/picture/' . $model->image, '', array (
				'width' => 200,
				'height' => 200
		) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/picture/noimage.jpg', '', array (
				'width' => 105,
				'height' => 105
		) )
),
		'price',
		'title',
		'datetime',

),


	
)); ?>

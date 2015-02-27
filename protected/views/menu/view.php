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

<h1 style="color:#2f97ff"><b>ดูข้อมูลร้าน ลำดับที่  <?php echo $model->id; ?></b></h1>
<?php echo CHtml::button('กลับไปก่อนหน้านี้', array('submit' => array('menu/admin'))); ?>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
			'title',
			'address',
			'business_hours',
			'phone',
			'score',
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
		'type.name',
	    'latitude',
		'longitude',
		'datetime',

),


	
)); ?>

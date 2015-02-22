<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs = array (
		'Promotions' => array (
				'index' 
		),
		$model->title 
);

$this->menu = array (
		array (
				'label' => 'List Promotion',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create Promotion',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Update Promotion',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Delete Promotion',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->id 
						),
						'confirm' => 'Are you sure you want to delete this item?' 
				) 
		),
		array (
				'label' => 'Manage Promotion',
				'url' => array (
						'admin' 
				) 
		) 
);
?>
<br>
<br>
<br>
<h1 style="color: #804000">
	<b>View Promotion #<?php echo $model->title; ?></b>
</h1>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Back',
    'type'=>'warning', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'small', // null, 'large', 'small' or 'mini'
		'url'=>array('admin'),
)); 
?>
<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'attributes' => array (
				
				array (
						'name' => 'bestseller.image',
						'type' => 'html',
						'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/picture/' . $model->image, '', array (
								'width' => 200,
								'height' => 200 
						) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/picture/noimage.jpg', '', array (
								'width' => 105,
								'height' => 105 
						) ) 
				),
				'title',
				'detail',
				'datetime' 
		) 
) ); ?>

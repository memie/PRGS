<?php
/* @var $this BestsellerController */
/* @var $model Bestseller */

$this->breadcrumbs = array (
		'Bestsellers' => array (
				'index' 
		),
		$model->id 
);

$this->menu = array (
		array (
				'label' => 'List Bestseller',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create Bestseller',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Update Bestseller',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Delete Bestseller',
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
				'label' => 'Manage Bestseller',
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
	<b>View Bestseller </b>
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
				'detail' 
		) 
) ); ?>

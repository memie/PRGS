<?php
/* @var $this ReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array (
		'Reviews' 
);

$this->menu = array (
		array (
				'label' => 'Create Review',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Manage Review',
				'url' => array (
						'admin' 
				) 
		) 
);
?>
<br><br>
<h1 style="color: #804000">
	<b>Reviews</b>
</h1>
<div class="row-fluid">
        <div class="span4"> 
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'title',
		'detail',
	array (
		'name' => 'webboard.image',
		'type' => 'html',
		'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/picture/' . $model->image, '', array (
				'width' => 200,
				'height' => 200
		) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/picture/noimage.jpg', '', array (
				'width' => 105,
				'height' => 105
		) )
),
		'name',
		'post_date',
	),
)); ?>
               
        
        
         </div><!--/span-->
         
         
          <div class="row-fluid">
        <div class="span4"> 
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'title',
		'detail',
	array (
		'name' => 'webboard.image',
		'type' => 'html',
		'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/picture/' . $model->image, '', array (
				'width' => 200,
				'height' => 200
		) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/picture/noimage.jpg', '', array (
				'width' => 105,
				'height' => 105
		) )
),
		'name',
		'post_date',
	),
)); ?>
               
        
        
         </div><!--/span-->
         
         
          <div class="row-fluid">
        <div class="span4"> 
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'title',
		'detail',
	array (
		'name' => 'webboard.image',
		'type' => 'html',
		'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/picture/' . $model->image, '', array (
				'width' => 200,
				'height' => 200
		) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/picture/noimage.jpg', '', array (
				'width' => 105,
				'height' => 105
		) )
),
		'name',
		'post_date',
	),
)); ?>
               
        
        
         </div><!--/span-->
         

      </div><!--/row-->





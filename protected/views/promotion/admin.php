<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs = array (
		'Promotions' => array (
				'index' 
		),
		'Manage' 
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
		) 
);

Yii::app ()->clientScript->registerScript ( 'search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#promotion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>
<br>
<br>
<br>
<h1 style="color: #804000">
	<b>Manage Promotions</b>
</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display: none">
<?php

$this->renderPartial ( '_search', array (
		'model' => $model 
) );
?>
</div>
<!-- search-form -->
<br><br>
<?php echo CHtml::button('Add Promotion', array('submit' => array('promotion/create'))); ?>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'promotion-grid',
'template'=>'{items}{pager}',

		'dataProvider' => $model->search (),
		//'filter' => $model,
		'columns' => array (
				
				array (
						'type' => 'raw',
						'name' => 'image',
						'value' => 'CHtml::image("' . Yii::app ()->request->baseUrl . '/picture/$data->image", "image" ,array("width"=>300))',
						'filter' => false 
				),
				'title',
				'detail',
				'datetime',
				array (
						'class' => 'CButtonColumn' 
				) 
		),
)); ?>

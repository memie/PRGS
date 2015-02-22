<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Menu', 'url'=>array('index')),
	array('label'=>'Create Menu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#menu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?><br><br><br>
<h1 style="color:#804000"><b>Manage Menu</b></h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form --><br>
<br><?php echo CHtml::button('Add Menu', array('submit' => array('menu/create'))); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menu-grid',
		'template'=>'{items}{pager}',
	
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
		
	'columns'=>array(
		
	array(
		'type' => 'raw',
		'name'=> 'image',
		'value' => 'CHtml::image("'.Yii::app()->request->baseUrl.'/picture/$data->image", "image" ,array("width"=>120))',
		'filter'=> false,
),
		'title',
		//'detail',
		'price',
		'datetime',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
/* @var $this BestsellerController */
/* @var $model Bestseller */

$this->breadcrumbs=array(
	'Bestsellers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bestseller', 'url'=>array('index')),
	array('label'=>'Create Bestseller', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bestseller-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br><br><br>
<h1 style="color:#804000"><b>Manage Bestsellers</b></h1>


<br><?php echo CHtml::button('Add Best Seller', array('submit' => array('bestseller/create'))); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bestseller-grid',
		'template'=>'{items}{pager}',
		
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		
		array(
			'type' => 'raw',
			'name'=> 'image',
			'value' => 'CHtml::image("'.Yii::app()->request->baseUrl.'/picture/$data->image", "image" ,array("width"=>300))',
			'filter'=> false,
	),
		'detail',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

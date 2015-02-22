<?php
/* @var $this TypeController */
/* @var $model Type */

$this->breadcrumbs=array(
	'Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Type', 'url'=>array('index')),
	array('label'=>'Create Type', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#type-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br><br><br>
<h1 style="color:#804000"><b>Manage Types</b></h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br><br>
<?php echo CHtml::button('Add Type', array('submit' => array('type/create'))); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'type-grid',
		'template'=>'{items}{pager}',
		
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		
		'name',
array(
		'class'=>'CButtonColumn',
		'htmlOptions'=>array('style'=>'width: 30px'),
		'template'=>'{update}{delete}',
),
	),
)); ?>

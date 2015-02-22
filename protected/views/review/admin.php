<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Review', 'url'=>array('index')),
	array('label'=>'Create Review', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#review-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br><br><br>
<h1 style="color: #804000"><b>Manage Reviews</b></h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'review-grid',
		'template'=>'{items}{pager}',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		
		'title',
		'detail',
		'image',
		'name',
		'post_date',
		array(
		'class'=>'CButtonColumn',
		'htmlOptions'=>array('style'=>'width: 30px'),
		'template'=>'{view}{delete}',
),
	),
)); ?>

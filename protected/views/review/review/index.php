<?php
/* @var $this ReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reviews',
);

$this->menu=array(
	array('label'=>'Create Review', 'url'=>array('create')),
	array('label'=>'Manage Review', 'url'=>array('admin')),
);
?>

<h1>Reviews</h1>

<?php echo CHtml::button('Create Review', array('submit' => array('review/create'))); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'review-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'detail',
		'image',
		'name',
		'post_date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

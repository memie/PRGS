<?php
/* @var $this BestsellerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bestsellers',
);

$this->menu=array(
	array('label'=>'Create Bestseller', 'url'=>array('create')),
	array('label'=>'Manage Bestseller', 'url'=>array('admin')),
);
?>

<h1>Bestsellers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

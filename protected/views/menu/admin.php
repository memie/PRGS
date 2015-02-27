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
<h1 style="color:#2f97ff"><b>จัดการข้อมูลร้าน </b></h1>

<?php echo CHtml::link('คลิกเพื่อค้นหา','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form --><br>
<br><?php echo CHtml::button('เพิ่มร้าน', array('submit' => array('menu/create'))); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menu-grid',
		'template'=>'{items}{pager}',
	
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
		
	'columns'=>array(
			'id',
			'title',
			'address',
			'business_hours',
			'phone',
			'latitude',
			'longitude',
			'score',
			
		
	array(
			
		'type' => 'raw',
			
		'name'=> 'image',
		'value' => 'CHtml::image("'.Yii::app()->request->baseUrl.'/picture/$data->image", "image" ,array("width"=>120))',
		'filter'=> false,
),
		'type.name',
		'datetime',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

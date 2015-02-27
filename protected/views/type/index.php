<?php
/* @var $this TypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array (
		'Types' 
);

$this->menu = array (
		array (
				'label' => 'Create Type',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Manage Type',
				'url' => array (
						'admin' 
				) 
		) 
);
?>
<br>
<br>

<h1 style="color: #804000">
	<b>Menu</b>
</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'type-grid',
'template'=>'{items}{pager}',
		'dataProvider' => $model->search (),
		// 'filter'=>$model,
		'columns' => array (
				
			
array('name'=>' ',
		'type'=>'raw',
		'value'=>'CHtml::link($data->name,array("type/view","id"=>$data->id))'),
		) ,

) ); ?>



<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Soups', 'url'=>array('type/view&id=1')),
        array('label'=>'Curries', 'url'=>array('type/view&id=5')),
        array('label'=>'Appetizer', 'url'=>array('type/view&id=3')),
   		 array('label'=>'Salads', 'url'=>array('type/view&id=4')),
		array('label'=>'Beverage', 'url'=>array('type/view&id=6')),
		array('label'=>'Smoothies', 'url'=>array('type/view&id=9')),

    		
    		
),
)); ?>


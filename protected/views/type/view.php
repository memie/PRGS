
<br><br><br>
<h1 style="color: #804000">
	<b>Menu</b>
</h1>



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
    	array('label'=>'Dessert', 'url'=>array('type/view&id=10')),
    
    		
    		
),
)); ?>
<?php

$this->widget ( 'bootstrap.widgets.TbGridView', array (
		'id' => 'menu-grid',
'template'=>'{items}{pager}',

		'dataProvider' => $menu->search ( '$model=>id', 'search', array (
				'type_id' => $menu->type_id = $model->id 
		) ),
		
		'columns' => array (
				// 'id',
				array (
						'type' => 'raw',
						'name' => ' ',
						'value' => 'CHtml::image("' . Yii::app ()->request->baseUrl . '/picture/$data->image", "image" ,array("width"=>300))',
						'filter' => false 
				),
				array ('type' => 'raw',
						'header'=>'Menu List',
						'name' => 'title',
						
				),
array ('type' => 'raw',
		'header'=>'Price ',
		'name' => 'price',

),
				
		// 'detail',
		// 'datetime',
				)

		 
) );
?>
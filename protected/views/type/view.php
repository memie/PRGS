
<br><br><br>
<h1 style="color: #2f97ff">
	<font face=angsananew size=5><b>แนะนำร้านอาหาร<?php echo $model->name; ?></b></font>
</h1>



<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'ไทย-พุทธ', 'url'=>array('type/view&id=1')),
        array('label'=>'ไทย-มุสลิม', 'url'=>array('type/view&id=3')),
        //array('label'=>'Appetizer', 'url'=>array('type/view&id=3')),
   		//array('label'=>'Salads', 'url'=>array('type/view&id=4')),
		//array('label'=>'Beverage', 'url'=>array('type/view&id=5')),
		//array('label'=>'Smoothies', 'url'=>array('type/view&id=6')),
    	//array('label'=>'Dessert', 'url'=>array('type/view&id=7')),
    
    		
    		
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
				array ('type' => 'raw',
						'header'=>'ชื่อร้าน  ',
						'name' => 'title',
				
				),
				array ('type' => 'raw',
						'header'=>'ที่ตั้ง ',
						'name' => 'address',
				
				),
				array ('type' => 'raw',
						'header'=>'เปิดปิดเวลา',
						'name' => 'business_hours',
				
				),
				array ('type' => 'raw',
						'header'=>'โทร.',
						'name' => 'phone',
				
				),
				array ('type' => 'raw',
						'header'=>'คะแนนความประทับใจ',
						'name' => 'score',
				
				),
				
				
				array (
						'type' => 'raw',
						'name' => ' ',
						'value' => 'CHtml::image("' . Yii::app ()->request->baseUrl . '/picture/$data->image", "image" ,array("width"=>300))',
						'filter' => false 
				),
				

				
		// 'detail',
		// 'datetime',
				)

		 
) );
?>


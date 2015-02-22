<?php
/* @var $this PromotionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array (
		'Promotions' 
);

$this->menu = array (
		array (
				'label' => 'Create Promotion',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Manage Promotion',
				'url' => array (
						'admin' 
				) 
		) 
);
?>
<br>
<br>
<h1 style="color: #804000">
	<b>Promotions</b>
</h1>

<?php

$this->widget ( 'zii.widgets.CListView', array (
		'dataProvider' => $dataProvider,
		'itemView' => '_view' 
) ); ?>

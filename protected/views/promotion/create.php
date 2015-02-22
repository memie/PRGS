<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs = array (
		'Promotions' => array (
				'index' 
		),
		'Create' 
);

$this->menu = array (
		array (
				'label' => 'List Promotion',
				'url' => array (
						'index' 
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
<br>
<h1 style="color: #804000">
	<b>Create Promotion</b>
</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
	Yii::app()->clientscript
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/form.css' )
?>
<!DOCTYPE html>
<html lang="th">

<head>
<meta charset="utf-8">
<meta name="language" content="th" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<style type="text/css">
  body {
	padding-top: 60px;
	padding-bottom: 40px;
  }
  .sidebar-nav {
	padding: 9px 0;
  }

	@media (max-width: 980px) {
		body{
			padding-top: 0px;
		}
	}
	h1,h2{color:#FFD700;}
	
</style>

<!-- Le fav and touch icons -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo Yii::app()->homeURL; ?>">   <img src="images/logo.jpg"  width="198" height="60"></a>
				<div class="nav-collapse">
				<br>
				<?php

				if(Yii::app()->user->isGuest){
				 $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav' ),
						'activeCssClass'=> 'active',
						'items'=>array(
			
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'Restaurant Promote', 'url'=>array('/reservation/index'),),
						array('label'=>'Menu', 'url'=>array('/type/view','id'=>'1')),
						//array('label'=>'Reservation Status', 'url'=>array('/reservation/status')),
						array('label'=>'Review', 'url'=>array('/review/index')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Singup', 'url'=>array('/site/singup'), 'visible'=>Yii::app()->user->isGuest)
						
								),
								
								));
								
								}
								?>
								
								
				<div class="brand"> <img src="images/fb.png"  width="71" height="22"></div>
				
				<div class="search">
								<form method="get" action="/search/">
								<div class="keyword">
								<input name="q" value="search..." style="color: #999999">
								
								<a href="#" title="search" class="global-search"></a>
								</div>
								</form>
								</div>
								
							
		<?php if(!Yii::app()->user->isGuest): ?>
					
						<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav' ),
						'activeCssClass'	=> 'active',
						'items'=>array(
				
						array('label'=>'Management User', 'url'=>array('/User/admin'),'visible'=>Yii::app()->user->isAdmin(),),
						array('label'=>'Management Reservation', 'url'=>array('/reservation/admin'),),
						array('label'=>'Management Type Menu', 'url'=>array('/type/admin'),),
						array('label'=>'Management Menu', 'url'=>array('/menu/admin'),),
						array('label'=>'Management Best Seller', 'url'=>array('/bestSeller/admin'),),
			
						array('label'=>'Management Promotion', 'url'=>array('/promotion/admin'),),
						array('label'=>'Management Review', 'url'=>array('/review/admin'),),
	
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					
						),
					)); ?>
					<?php endif; ?>
						
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

    <div class="container-fluid">
     <div class="span2">
      
    <div class="span10">
      <?php echo $content ?>

    
</div></div> </div><!--/.fluid-container-->
 <hr>
      <footer>
        <p><center>&copy;AROY-DEE PHUKET <br> By Phuket Restaurant Guide System Team</center></p>
      </footer>

    
</body>
</html>

<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<br><br>
	<div class="row-fluid">
     
        <div class="span5">
          <div id="content">
			<?php echo $content ?>
          </div>
        </div><!--/span-->
        
        
           <div class="span7">
           <br><br><br>
    <?php   echo CHtml::image('images/z.jpg');?>
             
             <br><br>
             <div class="span4">  
             detail
       </div> </div><!--/span-->
        
        
        
      </div><!--/row-->
<?php $this->endContent(); ?>

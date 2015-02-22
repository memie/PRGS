<marquee>
	<h2 style="color: #2f97ff">
		<b>ยินดีต้อนรับสู่ <i><?php echo CHtml::encode(Yii::app()->name); ?></b></i>
	</h2>
</marquee>

<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app ()->name;
?>
<?php /* @var $this Controller */ ?>

<?php
$this->widget ( 'ext.slider.slider', array (
		'container' => 'slideshow',
		'width' => 805,
		'height' => 500,
		'timeout' => 5000,
		'infos' => true,
		'constrainImage' => true,
		'images' => array (
				's1.png',
				's2.png',
				's3.png',
				's4.png',
				's5.png' 
		),
		'alts' => array (
				'AROY DEE PHUKET',
				'AROY DEE PHUKET',
				'AROY DEE PHUKET',
				'AROY DEE PHUKET ',
				'AROY DEE PHUKET ',
				'AROY DEE PHUKET' 
		),
		'defaultUrl' => Yii::app ()->request->baseURL 
) );
?>
<br><br>
	<div class="row-fluid">
        <div class="span6">
         
<h2 style="color: #2f97ff">
	<b>ประวัติจังหวัดภูเก็ต</b>
</h2><div class="gridviewset">
	
	 " ภูเก็ต " ได้มีการค้นพบหลักฐานทางโบราณคดีที่บ้านกมลา อำเภอกะทู้ จังหวัดภูเก็ต 
	 ซึ่งได้ขุดพบเครื่องมือหินและขวานหินเป็นการแสดงให้ทราบว่ามี มนุษย์อาศัยในดินแดนแถบนี้ไม่ต่ำกว่า 3,000 ปี มาแล้ว
	 และได้มีหลักฐานการ กล่าวถึงดินแดนในแถบนี้อีกครั้ง
	 <br> ...เมื่อปี พ .ศ.700 หรือ คริสต์ศตวรรษที่ 2 ในบันทึกของนักเดินเรือ ชื่อ คลอดิอุส ปโตเลมี
	  กล่าวถึงผืนดินหรือแผ่นดินในส่วนนี้ว่า แหลมตะโกลา เป็นผืนดินที่ถูกดันออกมาทางใต้กลายเป็นแหลมยาวๆ อยู่ส่วนปลายสุดของจังหวัดพังงา
	   อันเนื่องมาจากการเคลื่อนไหวของรอยเลื่อน ของเปลือกโลกขนาดใหญ่ ที่เรียกว่า รอยเลื่อนคลองมารุย (Klong Marui Fault) 
	   ซึ่งวางตัวเป็นแนวยาวจากจังหวัดสุราษฎร์ธานีและพังงา ลงมาทางทิศตะวันออกของภูเก็ต ต่อมาได้ถูกคลื่นลมในทะเลกัดเซาะ
	  และตัดพื้นที่ดังกล่าวนี้ ออกจากผืนแผ่นดินใหญ่ จนกลายเป็นเกาะโดยเกิดร่องน้ำระหว่างจังหวัดภูเก็ตและพังงาขึ้น ที่เรียกว่า ช่องแคบปากพระ 
	  ในปัจจุบัน


</div>
        </div><!--/span-->
        <div class="span6">
          <div id="content">

<h2 style="color: #2f97ff">
	<b>แผนที่จังหวัดภูเก็ต</b>
</h2>
<iframe width="400" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d252897.6651750395!2d98.33447177246096!3d7.944467008266001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305031e2c462524f%3A0xe9ca9a85063dba21!2z4Lig4Li54LmA4LiB4LmH4LiVIOC4m-C4o-C4sOC5gOC4l-C4qOC5hOC4l-C4og!5e0!3m2!1sth!2sus!4v1424422154940" ></iframe><br />

          
          </div>
        </div><!--/span-->
      </div><!--/row-->

      
    



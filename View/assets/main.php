<div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner" role="listbox">
	<?php 
		$item = array('b','c','d','e','f','g','h','i','j','k');
	?>
      <div class="item active background a"></div>
	  <?php for($a=0;$a<count($item);$a++){?>
      <div class="item background <?=$item[$a];?>"></div>
	  <?php }?>
    </div>
  </div>
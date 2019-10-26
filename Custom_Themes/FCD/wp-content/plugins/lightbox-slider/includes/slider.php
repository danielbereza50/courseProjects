<?php

# Every class should have a single purpose, all of it's functions satisfying a single goal	
# SIMPLE design pattern, amongst others
# algorithmic run time efficiency

class slider {
    public function printSlider() {
		echo '
	
	<div class="container">
  <div class="col-md-12">
    <h1>Bootstrap 3.1.1 Thumbnail Slider</h1>

    <div class="well-none">
      <div id="myCarousel" class="carousel slide">

        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <a href="#x"><img src="http://placehold.it/500x500" alt="Image" class="img-responsive"></a>
              </div>
              <div class="col-sm-3 col-xs-6">
                <a href="#x"><img src="http://placehold.it/500x500" alt="Image" class="img-responsive"></a>
              </div>
              <div class="col-sm-3 col-xs-6">
                <a href="#x"><img src="http://placehold.it/500x500" alt="Image" class="img-responsive"></a>
              </div>
              <div class="col-sm-3 col-xs-6">
                <a href="#x"><img src="http://placehold.it/500x500" alt="Image" class="img-responsive"></a>
              </div>
            </div>
            <!--/row-->
          </div>
          <!--/item-->
          <div class="item">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <a href="#x col-xs-6" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
              </div>
              <div class="col-sm-3 col-xs-6">
                <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
              </div>
              <div class="col-sm-3 col-xs-6">
                <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
              </div>
              <div class="col-sm-3 col-xs-6">
                <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
              </div>
            </div>
            <!--/row-->
          </div>
          <!--/item-->
          <div class="item">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
              </div>
              <div class="col-sm-3 col-xs-6">
                <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
              </div>
              <div class="col-sm-3 col-xs-6">
                <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
              </div>
              <div class="col-sm-3 col-xs-6">
                <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
              </div>
            </div>
            <!--/row-->
          </div>
          <!--/item-->
        </div>
        <!--/carousel-inner-->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
      </div>
      <!--/myCarousel-->
    </div>
    <!--/well-->
  </div>
</div>



	';
		?>
<script>
	
	
	jQuery('#myCarousel').carousel({
	interval: 0
	})
    
    jQuery('#myCarousel').on('slid.bs.carousel', function() {
    	alert("slid");
	});
    
  


</script>
<?php 
		
    }
    
}









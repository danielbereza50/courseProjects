<?php

class animations {
    public function smart_slider_animations() {
        ?>
<style>
@keyframes mymove {
  from {top: 500px;}
  to {top: 0px;}
}

.n2-font-1009-hover{
    position :relative;
  -webkit-animation: mymove 5s; /* Safari 4.0 - 8.0 */
  animation: mymove 1s;
}   


/* mobile headertxt */
[class = "n2-font-4196ac28d43530adeeda14b0fe22b248-hover n2-style-298e99c54f2487111a277067e01e6adf-heading   n2-ss-item-content n2-ow"]{
	  position :relative;
  -webkit-animation: mymove 5s; /* Safari 4.0 - 8.0 */
  animation: mymove 1s;
}


/*  mobile button */
[class = "n2-ss-button-container n2-ss-item-content n2-ow n2-font-0e8b59d287ead618a2c8d3ff5d2583ec-link  n2-ss-nowrap"]{

  position :relative;
  -webkit-animation: mymove 5s; /* Safari 4.0 - 8.0 */
  animation: mymove 1s;

}


/* new desktop headertxt */
[class = "n2-font-4e9f7b33c80238261da8425b058384eb-hover   n2-ss-item-content n2-ow"]{
	font-size: 30px !important;
	 position :relative;
  -webkit-animation: mymove 5s; /* Safari 4.0 - 8.0 */
  animation: mymove 1s;
}


[class = "n2-font-16dd169baebea44f0b49350dbe5fec86-paragraph   n2-ow"]{
	font-size: 15px !important;
	 position :relative;
  -webkit-animation: mymove 5s; /* Safari 4.0 - 8.0 */
  animation: mymove 1s;
}

/*  desktop button */
[class = "n2-ss-button-container n2-ss-item-content n2-ow n2-font-f90e3932fd80159556933ad35584cdf1-link  n2-ss-nowrap"]{

  position :relative;
  -webkit-animation: mymove 5s; /* Safari 4.0 - 8.0 */
  animation: mymove 3s;

}

/* desktop headtxt */
[class = "n2-font-08a4e941d896018d5253605bb3f25b2a-hover   n2-ss-item-content n2-ow"]{
	  position :relative;
  -webkit-animation: mymove 5s; /* Safari 4.0 - 8.0 */
  animation: mymove 3s;
}

/*  desktop subtxt */
[class = "n2-ss-item-content n2-ow"]{
	 position :relative;
  -webkit-animation: mymove 5s; /* Safari 4.0 - 8.0 */
  animation: mymove 3s;
}




</style>

<?php
}
        
}









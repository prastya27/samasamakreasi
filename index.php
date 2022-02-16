<?php require_once dirname (__FILE__) . "/config/connection.php"; ?>
<?php
	$active_home = 'active';
?>
<?php include('includes/header.php'); ?>

<style>
.section-padding{
  padding:60px 0;
}
.brand-carousel {
  background: #000;
  margin-top: 0;
}
.owl-dots{
  text-align: center;
}

.owl-dot {
  display: inline-block;
  height: 15px !important;
  width: 15px !important;
  background-color: #222222 !important;
  opacity: 0.8;
  border-radius: 50%;
  margin: 0 5px;
}

.owl-dot.active {
  background-color: green !important;
}



/* ignore the code below */


.link-area
{
  position:fixed;
  bottom:20px;
  left:20px;  
  padding:15px;
  border-radius:40px;
  background:tomato;
}
.link-area a
{
  text-decoration:none;
  color:#fff;
  font-size:25px;
}


@import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
  margin:0;
}

h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
}


.header {
  position:relative;
  text-align:center;
  background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
  color:white;
}
.logo {
  width:50px;
  fill:white;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
}

.inner-header {
  height:0;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:30vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: white;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }
  h1 {
    font-size:24px;
  }
}

#loading {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
  background : #fff;
	

}
 
/*-- css spin --*/
@-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
 
/*-- css loader --*/
.no-js #loader { display: none; }
.js #loader { display: block; position: absolute;  left: 20.5%; top: 0; }
 
.loader {
   
    width: 150px;
    height: 150px;
    left: 47% !important;
    top: 20%;
    -webkit-animation: spin 2s linear infinite;
    position: fixed;
    animation: example 2s infinite;
	z-index: 2;
	position: absolute;
}

@keyframes example {
0% {
transform: scale(1, 1);
}
10% {
transform: scale(1.2, 1.2);
}
30% {
transform: scale(1, 1);
}
40% {
transform: scale(1.2, 1.2);
}
50% {
transform: scale(1, 1);
}
75% {
transform: scale(1.2, 1.2);
}
100% {
transform: scale(1, 1);
}
}
 
.textLoader{
    position: fixed;
    top: 56%;
    left: 45.6%;
    color: #34495e;
}
   
/*-- responsive --*/
    @media screen and (max-width: 1034px){
        .loader{
            left: 36.2%;
        }
    }
 
    @media screen and (max-width: 824px){
        .loader {
            left: 37.2%;
        }
    }
 
    @media screen and (max-width: 732px){
        .loader {
            left: 38.2%;
        }
    }
 
    @media screen and (max-width: 500px){
        .loader{
            left: 26.5%;;
        }
        .textLoader {
            left: 36.5%;
        }
    }
 
    @media screen and (max-height: 432px){
        .loader {
            top: 65%;
        }
    }
 
    @media screen and (max-height: 350px){
        .loader {
            top: 75%;
        }
    }
 
    @media screen and (max-height: 312px){
        .textLoader {
            display: none;
        }
    }
/*-- responsive --*/
</style>

<div id="loading" style="overflow : hidden;">
            <span class="loader"><img src="assets/img/<?php echo $fimg1; ?>" style="height : 100%; width : 100%; border-radius : 20px;" />               
                <img src="assets/img/Loading_icon.gif" width="170px" />
           </span>
            </div>
        </div>



  <?php include('includes/footer.php'); ?>
  
  <script>
$('.brand-carousel').owlCarousel({
  loop:true,
  margin:10,
  autoplay:true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:5
    }
  }
})


// set delay 10s

 
setTimeout(function loader(){
	window.location='pusat-sablon-terbaik-di-jakarta-dan-bekasi';
}, 1000);	

  </script>
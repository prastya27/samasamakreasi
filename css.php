<style>
	/**
* Template Name: Flexor - v2.4.1
* Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: 'Kaushan Script', cursive;
  color: <?php echo $fcolor_font; ?>;
  background : <?php echo $fdiv_color; ?>;
  z-index : -1;
  scroll-behavior: smooth;
}

	#hero{
		position: relative;
	    z-index: 2;
	}	
	
	.why-us{
		 position: relative;
	  z-index: 5;
	  height: 110%;
	  width: 100%;
	  padding: 0px;
	}

	.hero-img {
	  width: 100%;
	  height: 100vh;
	  background: url("assets/img/<?php echo $fimg1; ?>") center center;
	  background-size: cover;
	  position: absolute;
	  padding: 0;
	  margin-bottom: -120px;
	  animation-name: examplexxx;
	  animation-duration: 15s;
	  animation-iteration-count: infinite;
	  animation-direction: forward;
	  margin-top : -100px;
	  filter: brightness(30%);
	   z-index: 2;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	}

	@keyframes examplexxx {
	  0%   { background: url("assets/img/<?php echo $fimg1; ?>") center center; opacity: 0;}
	  8%   { background: url("assets/img/<?php echo $fimg1; ?>") center center; opacity: 1;}
	  25%  { background: url("assets/img/<?php echo $fimg1; ?>") center center; opacity: 1;}
	  33%  { background: url("assets/img/<?php echo $fimg1; ?>") center center; opacity: 0;}
	  34%  { background: url("assets/img/<?php echo $fimg2; ?>") center center; opacity: 0;}
	  40%  { background: url("assets/img/<?php echo $fimg2; ?>") center center; opacity: 1;}
	  60%  { background: url("assets/img/<?php echo $fimg2; ?>") center center; opacity: 1;}
	  66%  { background: url("assets/img/<?php echo $fimg2; ?>") center center; opacity: 0;}
	  67%  { background: url("assets/img/<?php echo $fimg3; ?>") center center; opacity: 0;}
	  74%  { background: url("assets/img/<?php echo $fimg3; ?>") center center; opacity: 1;}
	  93%  { background: url("assets/img/<?php echo $fimg3; ?>") center center; opacity: 1;}
	  100% { background: url("assets/img/<?php echo $fimg3; ?>") center center; opacity: 0;}
	}
  
  
	.contact-img{
		width: 100%;
		height: auto;
		background: url("assets/img/<?php echo $fimg1; ?>") center center;
		background-size: cover;
		animation-name: examples;
	   animation-duration: 20s;
	   animation-iteration-count: infinite;
	   
	   filter: brightness(30%);
	   position: absolute;
	  z-index: -1;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	   

	}
	
	.contact{
		position: relative;
	    z-index: 5;
	}	

	@keyframes examples {
	  0%   { background: url("assets/img/<?php echo $fimg1; ?>") center center; opacity: 0;}
	  8%   { background: url("assets/img/<?php echo $fimg1; ?>") center center; opacity: 1;}
	  25%  { background: url("assets/img/<?php echo $fimg1; ?>") center center; opacity: 1;}
	  33%  { background: url("assets/img/<?php echo $fimg1; ?>") center center; opacity: 0;}
	  34%  { background: url("assets/img/<?php echo $fimg2; ?>") center center; opacity: 0;}
	  40%  { background: url("assets/img/<?php echo $fimg2; ?>") center center; opacity: 1;}
	  60%  { background: url("assets/img/<?php echo $fimg2; ?>") center center; opacity: 1;}
	  66%  { background: url("assets/img/<?php echo $fimg2; ?>") center center; opacity: 0;}
	  67%  { background: url("assets/img/<?php echo $fimg3; ?>") center center; opacity: 0;}
	  74%  { background: url("assets/img/<?php echo $fimg3; ?>") center center; opacity: 1;}
	  93%  { background: url("assets/img/<?php echo $fimg3; ?>") center center; opacity: 1;}
	  100% { background: url("assets/img/<?php echo $fimg3; ?>") center center; opacity: 0;}
	}
	
	
	#header.active {
		background: <?php echo $fbackground; ?>;
		box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
		color : <?php echo $fcolor; ?> !important;
		
	}
	
	.footerx.active {
		background: <?php echo $fbackground; ?>;
		box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
		color : <?php echo $fcolor; ?> !important;
		
	}
	
	

a {
  color: <?php echo $fcolor_font; ?>;
  font-family: 'Kaushan Script', cursive;
}

a:hover {
  opacity : 0.7;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6, p {
  font-family: 'Kaushan Script', cursive;
}

p, a{
	font-size : 1.2em !important;
}	

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  display: none;
  width: 40px;
  height: 40px;
  border-radius: 3px;
  right: 15px;
  bottom: 15px;
  background: <?php echo $fcolor; ?>;
  color: #fff;
  transition: display 0.5s ease-in-out;
  z-index: 99999;
}

.back-to-top i {
  font-size: 24px;
  position: absolute;
  top: 8px;
  left: 8px;
}

.back-to-top:hover {
  color: #fff;
  opacity : 0.7;
  transition: background 0.2s ease-in-out;
}

/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
#topbar {
  background: <?php echo $fbackground; ?>;
  font-size: 14px;
  padding: 0;
  color: rgba(255, 255, 255, 0.8);
  z-index : -1;
}

#topbar .contact-info ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

#topbar .contact-info li {
  display: inline-block;
  padding: 8px 0;
}

#topbar .contact-info li + li {
  margin-left: 18px;
}

#topbar .contact-info a {
  color: rgba(255, 255, 255, 0.8);
  transition: 0.3s;
}

#topbar .contact-info a:hover {
  color: #fff;
}

#topbar .contact-info i {
  color: <?php echo $fcolor; ?>;
  padding-right: 4px;
}

#topbar .cta a {
  color: #fff;
  background: <?php echo $fcolor; ?>;
  padding: 8px 20px;
  display: inline-block;
  transition: 0.3s;
}

#topbar .cta a:hover {
 opacity : 0.7;
 cursor: pointer;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 70px;
  transition: all 0.5s;
	background : <?php echo $fcolor; ?>;
  padding: 10px 0;
  text-shadow : 2px 2px #333;
 font-family: 'Kaushan Script', cursive !important;
}



#header.header-scrolled {
  box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
  //background: <?php echo $fbackground; ?>;
}

#header .logo h1 {
  font-size: 28px;
  margin: 0;
  padding: 8px 0;
  line-height: 1;
  font-weight: 700;
  //font-family: "Open Sans", sans-serif;
  font-family: 'Licorice', cursive;
}

#header .logo h1 a, #header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
  
}

#header.active .logo h1 a, #header.active .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
  
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

#main {
  z-index: 3;
  
  
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;

  
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
   padding: 0;
   
}



.nav-menu a {
  display: block;
  position: relative;
  color: #fff;
  padding: 11px 15px;
  transition: 0.3s;
  font-size: 14px;
  
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #fff;
  text-decoration: none;
 
  background : <?php echo $fcolor; ?>;
  border-radius : 5px;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% + 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
  border-radius: 8px;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: lightne(#473d3a, 10);
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: <?php echo $fcolor; ?>;
  
}

.nav-menu .drop-down > a:after {
  /* content: "\ea99"; */
  font-family: "Tillana";
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  /* content: "\eaa0"; */
  font-family: "Tillana";
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    /* content: "\ea9d"; */
  }
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 20px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: <?php echo $fdiv_color; ?>;
}

.mobile-nav {
  position: fixed;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  z-index: 9999;
  overflow-y: auto;
  background: #fff;
  transition: ease-in-out 0.2s;
  opacity: 0;
  visibility: hidden;
  border-radius: 10px;
  padding: 10px 0;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #473d3a;
  padding: 10px 20px;
  font-weight: 500;
  outline: none;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: <?php echo $fcolor; ?>;
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  /*content: "\ea99"; */
  font-family: "Tillana";
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  /* content: "\eaa1"; */
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(43, 37, 35, 0.6);
  overflow: hidden;
  display: none;
  transition: ease-in-out 0.2s;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  opacity: 1;
  visibility: visible;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: none;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/


#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.4);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  z-index: 2;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}

#hero h2 {
  color: #eee;
  margin-bottom: 50px;
  font-size: 24px;
}

#hero .get-started-icon {
  font-size: 24px;
  background: <?php echo $fcolor; ?>;
  padding: 14px;
  color: #fff;
  border-radius: 50px;
  position: relative;
  z-index: 5;
  box-shadow: 10px 2px 15px rgba(0, 0, 0, 0.1);
}

#hero .btn-get-started {
  font-family: 'Kaushan Script', cursive !important;
  font-weight: 400;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  transition: 0.5s;
  margin-left: -10px;
  padding: 8px 26px 8px 26px;
  color: #fff;
  background: #584b48;
  border-radius: 0 50px 50px 0;
  position: relative;
  z-index: 4;
}

#hero .btn-get-started:hover {
  background: <?php echo $fcolor; ?>;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 1024px), (max-height: 768px) {
  #hero {
    margin-bottom: -150px;
    height: 80vh;
  }
}

@media (max-width: 768px) {
  #hero {
    height: 80vh;
  }
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

@media (max-height: 500px) {
  #hero {
    height: 100vh;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #fff9f7;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 500;
  margin-bottom: 20px;
  padding-bottom: 0;
  font-family: "Tillana";
  color: #635551;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background: #f4f2f2;
  margin-bottom: 40px;
}

.breadcrumbs h2 {
  font-size: 28px;
  font-weight: 500;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0 0 10px 0;
  margin: 0;
  font-size: 14px;
}

.breadcrumbs ol li + li {
  padding-left: 10px;
}

.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #635551;
  content: "/";
}

/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us {
  padding: 0 0 30px 0;
  position: relative;
  z-index: 3;
}

.why-us .content {
  padding: 30px;
  background: <?php echo $fcolor; ?>;
  border-radius: 4px;
  color: #fff;
}

.why-us .content h3 {
  font-weight: 700;
  font-size: 34px;
  margin-bottom: 30px;
}

.why-us .content p {
  margin-bottom: 30px;
}

.why-us .content .more-btn {
  display: inline-block;
  background: rgba(255, 255, 255, 0.2);
  padding: 6px 30px 8px 30px;
  color: #fff;
  border-radius: 50px;
  transition: all ease-in-out 0.4s;
}

.why-us .content .more-btn i {
  font-size: 14px;
}

.why-us .content .more-btn:hover {
  color: <?php echo $fcolor; ?>;
  background: #fff;
}

.why-us .icon-boxes .icon-box {
  text-align: center;
  border-radius: 10px;
  background: <?php echo $fbackground; ?>; 
  color : #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 40px 30px;
  width: 100%;
  transition: transform 0.5s linear;
  
  animation-duration: 8s;
  animation-delay: 2s;
  animation-name: example;
  animation-iteration-count: infinite;
}

<!--

@keyframes example {
  0%   {transform: rotate(90deg);}
  1%   {transform: rotate(180deg);}
  2%   {transform: rotate(270deg);}
  3%   {transform: rotate(360deg);}
  4%   {transform: rotate(90deg);}
  5%   {transform: rotate(180deg);}
  6%   {transform: rotate(270deg);}
  7%   {transform: rotate(360deg);}

  100% {transform: skewY(360deg);}
}

-->

@keyframes example {
  0%   {background : <?php echo $fbackground; ?>;}
  50%  {background : <?php echo $fcolor_title; ?>;}
  100% {background : <?php echo $fbackground; ?>;}
}

.why-us .icon-boxes .icon-box i {
  font-size: 40px;
  color: <?php echo $fcolor; ?>;
  margin-bottom: 30px;
}

.why-us .icon-boxes .icon-box h4 {
  font-size: 20px;
  font-weight: 700;
  margin: 0 0 30px 0;
}

.why-us .icon-boxes .icon-box p {
  font-size: 15px;
  color: #716f6f;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/


.about .icon-boxes h4 {
  font-size: 18px;
  color: #7f6d68;
  margin-bottom: 15px;
}

.about .icon-boxes h3 {
  font-size: 28px;
  font-weight: 700;
  color: #554945;
  margin-bottom: 15px;
}

.about .icon-box {
  margin-top: 40px;
}

.about .icon-box .icon {
  float: left;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 64px;
  height: 64px;
  border: 2px solid #ffcbba;
  border-radius: 50px;
  transition: 0.5s;
  background: #fff;
}

.about .icon-box .icon i {
  color: <?php echo $fcolor; ?>;
  font-size: 32px;
}

.about .icon-box:hover .icon {
  background: <?php echo $fdiv_color; ?>;
  border-color: <?php echo $fcolor; ?>;
}

.about .icon-box:hover .icon i {
  color: #fff;
}

.about .icon-box .title {
  margin-left: 85px;
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 18px;
}

.about .icon-box .title a {
  color: #343a40;
  transition: 0.3s;
}

.about .icon-box .title a:hover {
  color: <?php echo $fcolor; ?>;
}

.about .icon-box .description {
  margin-left: 85px;
  line-height: 24px;
  font-size: 14px;
}

.about .video-box {
  background: url("../img/about-img.jpg") center center no-repeat;
  background-size: cover;
  min-height: 500px;
}

.about .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(<?php echo $fcolor; ?> 50%, rgba(255, 88, 33, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}

.about .play-btn::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.about .play-btn::before {
  content: '';
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(255, 88, 33, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.about .play-btn:hover::after {
  border-left: 15px solid <?php echo $fcolor; ?>;
  transform: scale(20);
}

.about .play-btn:hover::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Clients
--------------------------------------------------------------*/
.clients .owl-item {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
}

.clients .owl-item img {
  width: 75%;
  opacity: 0.5;
  transition: ease-in-out 0.3s;
  filter: grayscale(100%);
}

.clients .owl-item img:hover {
  filter: none;
  opacity: 1;
}

.clients .owl-nav, .clients .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.clients .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.clients .owl-dot.active {
  background-color: <?php echo $fcolor; ?> !important;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  padding: 50px 20px;
  margin-top: 35px;
  margin-bottom: 25px;
  text-align: center;
  height: 200px;
  position: relative;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.services .icon {
  position: absolute;
  top: -36px;
  left: calc(50% - 36px);
  transition: 0.2s;
  border-radius: 50%;
  border: 6px solid #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  width: 72px;
  height: 72px;
  background: <?php echo $fcolor; ?>;
}

.services .icon i {
  color: #fff;
  font-size: 24px;
}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
  text-transform: uppercase;
}

.services .title a {
  color: #343a40;
}

.services .icon-box:hover .icon {
  background: #fff;
  border: 2px solid <?php echo $fcolor; ?>;
}

.services .icon-box:hover .icon i {
  color: <?php echo $fcolor; ?>;
}

.services .icon-box:hover .title a {
  color: <?php echo $fcolor; ?>;
}

.services .description {
  line-height: 24px;
  font-size: 14px;
}

/*--------------------------------------------------------------
# Values
--------------------------------------------------------------*/
.values .card {
  border: 0;
  padding: 160px 20px 20px 20px;
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.values .card-body {
  z-index: 10;
  background: rgba(255, 255, 255, 0.9);
  padding: 15px 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: 0.3s;
  transition: ease-in-out 0.4s;
  border-radius: 5px;
}

.values .card-title {
  font-weight: 700;
  text-align: center;
  margin-bottom: 15px;
}

.values .card-title a {
  color: #473d3a;
}

.values .card-text {
  color: #4b4949;
}

.values .read-more a {
  color: #656262;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  transition: 0.4s;
}

.values .read-more a:hover {
  text-decoration: underline;
}

.values .card:hover .card-body {
  background: <?php echo $fcolor; ?>;
}

.values .card:hover .read-more a, .values .card:hover .card-title, .values .card:hover .card-title a, .values .card:hover .card-text {
  color: #fff;
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials {
  padding: 80px 0;
  background: url("../img/testimonials-bg.jpg") no-repeat;
  background-position: center center;
  background-size: cover;
  position: relative;
}

.testimonials::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
}

.testimonials .section-header {
  margin-bottom: 40px;
}

.testimonials .testimonial-item {
  text-align: center;
  color: #fff;
}

.testimonials .testimonial-item .testimonial-img {
  width: 100px;
  border-radius: 50%;
  border: 6px solid rgba(255, 255, 255, 0.15);
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #fff;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #ddd;
  margin: 0 0 15px 0;
}

.testimonials .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
  color: rgba(255, 255, 255, 0.4);
  font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
  color: #eee;
}

.testimonials .owl-nav, .testimonials .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.testimonials .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.4) !important;
}

.testimonials .owl-dot.active {
  background-color: <?php echo $fcolor; ?> !important;
}

@media (min-width: 1024px) {
  .testimonials {
    background-attachment: fixed;
  }
}

@media (min-width: 992px) {
  .testimonials .testimonial-item p {
    width: 80%;
  }
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 35px auto;
  list-style: none;
  text-align: center;
  border-radius: 50px;
  padding: 2px 15px;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 10px 20px 12px 20px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #313030;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
  border-radius: 50px;
}

.portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
  color: <?php echo $fcolor; ?>;
  background: #fff1ed;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 30px;
  right: 30px;
  bottom: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  background: rgba(255, 255, 255, 0.9);
  padding: 15px;
}

.portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  color: #fff;
  font-weight: 600;
  color: #473d3a;
}

.portfolio .portfolio-item .portfolio-info p {
  color: #7f6d68;
  font-size: 14px;
  margin-bottom: 0;
}

.portfolio .portfolio-item .portfolio-info .preview-link, .portfolio .portfolio-item .portfolio-info .details-link {
  position: absolute;
  right: 40px;
  font-size: 24px;
  top: calc(50% - 18px);
  color: #635551;
}

.portfolio .portfolio-item .portfolio-info .preview-link:hover, .portfolio .portfolio-item .portfolio-info .details-link:hover {
  color: <?php echo $fcolor; ?>;
}

.portfolio .portfolio-item .portfolio-info .details-link {
  right: 10px;
}

.portfolio .portfolio-item .portfolio-links {
  opacity: 0;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 3;
  position: absolute;
  transition: all ease-in-out 0.3s;
}

.portfolio .portfolio-item .portfolio-links a {
  color: #fff;
  margin: 0 2px;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-item .portfolio-links a:hover {
  color: #ffa587;
}

.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
  bottom: 20px;
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 0;
}

.portfolio-details .portfolio-details-container {
  position: relative;
}

.portfolio-details .portfolio-details-carousel {
  position: relative;
  z-index: 1;
}

.portfolio-details .portfolio-details-carousel .owl-nav, .portfolio-details .portfolio-details-carousel .owl-dots {
  margin-top: 5px;
  text-align: left;
}

.portfolio-details .portfolio-details-carousel .owl-dot {
  display: inline-block;
  margin: 0 10px 0 0;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.portfolio-details .portfolio-details-carousel .owl-dot.active {
  background-color: <?php echo $fcolor; ?> !important;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  position: absolute;
  right: 0;
  bottom: -70px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  z-index: 2;
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li + li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 50px;
}

.portfolio-details .portfolio-description h2 {
  width: 50%;
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0 0 0 0;
}

@media (max-width: 768px) {
  .portfolio-details .portfolio-description h2 {
    width: 100%;
  }
  .portfolio-details .portfolio-info {
    position: static;
    margin-top: 30px;
  }
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team .member {
  margin-bottom: 20px;
  overflow: hidden;
  text-align: center;
  border-radius: 5px;
  
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .social {
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  height: 40px;
  opacity: 0;
  transition: ease-in-out 0.3s;
  text-align: center;
  background: rgba(255, 255, 255, 0.85);
}

.team .member .social a {
  transition: color 0.3s;
  
  margin: 0 10px;
  padding-top: 8px;
  display: inline-block;
}

.team .member .social a:hover {
  color: <?php echo $fcolor; ?>;
}

.team .member .social i {
  font-size: 18px;
  margin: 0 2px;
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #473d3a;
}

.team .member .member-info table td h1 {
 
  margin-bottom: 5px;
  font-size: 72px !important;
  color: #fff;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #989595;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  
  
}

.team .member:hover .social {
  opacity: 1;
}

/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing .box {
  padding: 20px;
  background: #fff;
  text-align: center;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.12);
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}

.pricing h3 {
  font-weight: 400;
  margin: -20px -20px 20px -20px;
  padding: 20px 15px;
  font-size: 16px;
  font-weight: 600;
  color: #656262;
  background: #f8f8f8;
}

.pricing h4 {
  font-size: 36px;
  color: <?php echo $fcolor; ?>;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  margin-bottom: 20px;
}

.pricing h4 sup {
  font-size: 20px;
  top: -15px;
  left: -3px;
}

.pricing h4 span {
  color: #bababa;
  font-size: 16px;
  font-weight: 300;
}

.pricing ul {
  padding: 0;
  list-style: none;
  color: #313030;
  text-align: center;
  line-height: 20px;
  font-size: 14px;
}

.pricing ul li {
  padding-bottom: 16px;
}

.pricing ul i {
  color: <?php echo $fcolor; ?>;
  font-size: 18px;
  padding-right: 4px;
}

.pricing ul .na {
  color: #ccc;
  text-decoration: line-through;
}

.pricing .btn-wrap {
  margin: 20px -20px -20px -20px;
  padding: 20px 15px;
  background: #f8f8f8;
  text-align: center;
}

.pricing .btn-buy {
  background: <?php echo $fcolor; ?>;
  display: inline-block;
  padding: 6px 35px 8px 35px;
  border-radius: 4px;
  color: #fff;
  transition: none;
  font-size: 14px;
  font-weight: 400;
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  box-shadow: 0 3px 7px rgba(255, 88, 33, 0.4);
  transition: 0.3s;
}

.pricing .btn-buy:hover {
  background: #ff7e54;
}

.pricing .featured h3 {
  color: #fff;
  background: <?php echo $fcolor; ?>;
  box-shadow: 0 3px 7px rgba(255, 88, 33, 0.4);
}

.pricing .advanced {
  width: 200px;
  position: absolute;
  top: 18px;
  right: -68px;
  transform: rotate(45deg);
  z-index: 1;
  font-size: 14px;
  padding: 1px 0 3px 0;
  background: <?php echo $fcolor; ?>;
  color: #fff;
}

/*--------------------------------------------------------------
# F.A.Q
--------------------------------------------------------------*/
.faq .faq-list {
  padding: 0 100px;
}

.faq .faq-list ul {
  padding: 0;
  list-style: none;
}

.faq .faq-list li + li {
  margin-top: 15px;
}

.faq .faq-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
  position: relative;
}

.faq .faq-list a {
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding: 0 30px;
  outline: none;
}

.faq .faq-list .icon-help {
  font-size: 24px;
  position: absolute;
  right: 0;
  left: 20px;
  color: #ffb8a1;
}

.faq .faq-list .icon-show, .faq .faq-list .icon-close {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.faq .faq-list .icon-show {
  display: none;
}

.faq .faq-list a.collapsed {
  color: #343a40;
}

.faq .faq-list a.collapsed:hover {
  color: <?php echo $fcolor; ?>;
}

.faq .faq-list a.collapsed .icon-show {
  display: inline-block;
}

.faq .faq-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1200px) {
  .faq .faq-list {
    padding: 0;
  }
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/




.contact .info-box {
  color: #313030;
  background : #fff;
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 20px;
}

.contact .info-box i {
  font-size: 32px;
  color: <?php echo $fcolor; ?>;
  border-radius: 50%;
  padding: 8px;
  border: 2px dotted #ffded4;
  float: left;
}

.contact .info-box h3 {
  font-size: 20px;
  color: #333;
  font-weight: 700;
  margin: 10px 0 10px 68px;
}

.contact .info-box p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin: 0 0 0 68px;
}

.contact .php-email-form {
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 30px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input::focus, .contact .php-email-form textarea::focus {
  background-color: <?php echo $fcolor; ?>;
}

.contact .php-email-form input {
  padding: 20px 15px;
}

.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form button[type="submit"] {
  background: <?php echo $fcolor; ?>;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #ff7e54;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
.blog {
  padding: 0 0 40px 0;
}

.blog .entry {
  padding: 20px;
  margin-bottom: 60px;
  overflow: hidden;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .entry .entry-img {
  max-height: 400px;
  margin: -20px -20px 20px -20px;
  overflow: hidden;
}

.blog .entry .entry-title {
  font-size: 20px;
  line-height: 26px;
  font-weight: bold;
  padding: 0;
  margin: 0 0 20px 0;
}

.blog .entry .entry-title a {
  color: #473d3a;
  transition: 0.3s;
}

.blog .entry .entry-title a:hover {
  color: <?php echo $fcolor; ?>;
}

.blog .entry .entry-meta {
  margin-bottom: 15px;
  color: #afa29e;
}

.blog .entry .entry-meta ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
}

.blog .entry .entry-meta ul li + li {
  padding-left: 20px;
}

.blog .entry .entry-meta i {
  font-size: 14px;
  padding-right: 4px;
}

.blog .entry .entry-meta a {
  color: #988782;
  font-size: 14px;
  display: inline-block;
  line-height: 1;
}

.blog .entry .entry-content p {
  line-height: 24px;
  font-size: 15px;
}

.blog .entry .entry-content .read-more {
  -moz-text-align-last: right;
  text-align-last: right;
}

.blog .entry .entry-content .read-more a {
  display: inline-block;
  background: <?php echo $fcolor; ?>;
  color: #fff;
  padding: 6px 20px;
  transition: 0.3s;
  font-size: 14px;
}

.blog .entry .entry-content .read-more a:hover {
  background: #ff774a;
}

.blog .entry .entry-content h3 {
  font-size: 22px;
  margin-top: 30px;
  font-weight: bold;
}

.blog .entry .entry-content blockquote {
  overflow: hidden;
  background-color: #fafafa;
  padding: 60px;
  position: relative;
  text-align: center;
  margin: 20px 0;
}

.blog .entry .entry-content blockquote p {
  color: #313030;
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px;
}

.blog .entry .entry-content blockquote .quote-left {
  position: absolute;
  left: 20px;
  top: 20px;
  font-size: 36px;
  color: #e7e7e7;
}

.blog .entry .entry-content blockquote .quote-right {
  position: absolute;
  right: 20px;
  bottom: 20px;
  font-size: 36px;
  color: #e7e7e7;
}

.blog .entry .entry-content blockquote::after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: #473d3a;
  margin-top: 20px;
  margin-bottom: 20px;
}

.blog .entry .entry-footer {
  padding-top: 10px;
  border-top: 1px solid #e6e6e6;
}

.blog .entry .entry-footer i {
  color: #988782;
  display: inline;
}

.blog .entry .entry-footer a {
  color: #c2b7b4;
  transition: 0.3s;
}

.blog .entry .entry-footer a:hover {
  color: <?php echo $fcolor; ?>;
}

.blog .entry .entry-footer .cats {
  list-style: none;
  display: inline;
  padding: 0 20px 0 0;
  font-size: 14px;
}

.blog .entry .entry-footer .cats li {
  display: inline-block;
}

.blog .entry .entry-footer .tags {
  list-style: none;
  display: inline;
  padding: 0;
  font-size: 14px;
}

.blog .entry .entry-footer .tags li {
  display: inline-block;
}

.blog .entry .entry-footer .tags li + li::before {
  padding-right: 6px;
  color: #6c757d;
  content: ",";
}

.blog .entry .entry-footer .share {
  font-size: 16px;
}

.blog .entry .entry-footer .share i {
  padding-left: 5px;
}

.blog .entry-single {
  margin-bottom: 30px;
}

.blog .entry-single .entry-title {
  font-size: 32px;
  line-height: 38px;
}

.blog .blog-author {
  padding: 20px;
  margin-bottom: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .blog-author img {
  width: 120px;
}

.blog .blog-author h4 {
  margin-left: 140px;
  font-weight: 600;
  font-size: 22px;
  margin-bottom: 0px;
  padding: 0;
}

.blog .blog-author .social-links {
  margin: 0 0 5px 140px;
}

.blog .blog-author .social-links a {
  color: #afa29e;
}

.blog .blog-author p {
  margin-left: 140px;
  font-style: italic;
  color: #a4a2a2;
}

.blog .blog-comments {
  margin-bottom: 30px;
}

.blog .blog-comments .comments-count {
  font-weight: bold;
}

.blog .blog-comments .comment {
  margin-top: 30px;
  position: relative;
}

.blog .blog-comments .comment .comment-img {
  width: 50px;
}

.blog .blog-comments .comment h5 {
  margin-left: 65px;
  font-size: 16px;
  margin-bottom: 2px;
}

.blog .blog-comments .comment h5 a {
  font-weight: bold;
  color: #313030;
  transition: 0.3s;
}

.blog .blog-comments .comment h5 a:hover {
  color: <?php echo $fcolor; ?>;
}

.blog .blog-comments .comment h5 .reply {
  padding-left: 10px;
  color: #473d3a;
}

.blog .blog-comments .comment time {
  margin-left: 65px;
  display: block;
  font-size: 14px;
  color: #afa29e;
  margin-bottom: 5px;
}

.blog .blog-comments .comment p {
  margin-left: 65px;
}

.blog .blog-comments .comment.comment-reply {
  padding-left: 40px;
}

.blog .blog-comments .reply-form {
  margin-top: 30px;
  padding: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .blog-comments .reply-form h4 {
  font-weight: bold;
  font-size: 22px;
}

.blog .blog-comments .reply-form p {
  font-size: 14px;
}

.blog .blog-comments .reply-form input {
  border-radius: 0;
  padding: 20px 10px;
  font-size: 14px;
}

.blog .blog-comments .reply-form input:focus {
  box-shadow: none;
  border-color: #ffa587;
}

.blog .blog-comments .reply-form textarea {
  border-radius: 0;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .blog-comments .reply-form textarea:focus {
  box-shadow: none;
  border-color: #ffa587;
}

.blog .blog-comments .reply-form .form-group {
  margin-bottom: 25px;
}

.blog .blog-comments .reply-form .btn-primary {
  border-radius: 0;
  padding: 10px 20px;
  border: 0;
  background-color: #473d3a;
}

.blog .blog-comments .reply-form .btn-primary:hover {
  background-color: <?php echo $fcolor; ?>;
}

.blog .blog-pagination {
  color: #7f6d68;
}

.blog .blog-pagination ul {
  display: flex;
  padding-left: 0;
  list-style: none;
}

.blog .blog-pagination li {
  border: 1px solid #f2f2f2;
  margin: 0 5px;
  transition: 0.3s;
}

.blog .blog-pagination li.active {
  background: white;
}

.blog .blog-pagination li a {
  color: #989595;
  padding: 7px 16px;
  display: inline-block;
}

.blog .blog-pagination li.active, .blog .blog-pagination li:hover {
  background: <?php echo $fcolor; ?>;
  border: 1px solid <?php echo $fcolor; ?>;
}

.blog .blog-pagination li.active a, .blog .blog-pagination li:hover a {
  color: #fff;
}

.blog .blog-pagination li.disabled {
  background: #fff;
  border: 1px solid #fdfcfc;
}

.blog .blog-pagination li.disabled i {
  color: #dedede;
  padding: 10px 16px;
  display: inline-block;
}

.blog .sidebar {
  padding: 30px;
  margin: 0 0 60px 20px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .sidebar .sidebar-title {
  font-size: 20px;
  font-weight: 700;
  padding: 0 0 0 0;
  margin: 0 0 15px 0;
  color: #473d3a;
  position: relative;
}

.blog .sidebar .sidebar-item {
  margin-bottom: 30px;
}

.blog .sidebar .search-form form {
  background: #fff;
  border: 1px solid #ddd;
  padding: 3px 10px;
  position: relative;
}

.blog .sidebar .search-form form input[type="text"] {
  border: 0;
  padding: 4px;
  width: calc(100% - 40px);
}

.blog .sidebar .search-form form button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 15px;
  margin: -1px;
  background: #473d3a;
  color: #fff;
  transition: 0.3s;
}

.blog .sidebar .search-form form button:hover {
  background: #635551;
}

.blog .sidebar .categories ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .categories ul li + li {
  padding-top: 10px;
}

.blog .sidebar .categories ul a {
  color: #8d7973;
}

.blog .sidebar .categories ul a:hover {
  color: <?php echo $fcolor; ?>;
}

.blog .sidebar .categories ul a span {
  padding-left: 5px;
  color: #afa29e;
  font-size: 14px;
}

.blog .sidebar .recent-posts .post-item + .post-item {
  margin-top: 15px;
}

.blog .sidebar .recent-posts img {
  width: 80px;
  float: left;
}

.blog .sidebar .recent-posts h4 {
  font-size: 15px;
  margin-left: 95px;
  font-weight: bold;
}

.blog .sidebar .recent-posts h4 a {
  color: #0f0d0c;
  transition: 0.3s;
}

.blog .sidebar .recent-posts h4 a:hover {
  color: <?php echo $fcolor; ?>;
}

.blog .sidebar .recent-posts time {
  display: block;
  margin-left: 95px;
  font-style: italic;
  font-size: 14px;
  color: #afa29e;
}

.blog .sidebar .tags {
  margin-bottom: -10px;
}

.blog .sidebar .tags ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .tags ul li {
  display: inline-block;
}

.blog .sidebar .tags ul a {
  color: #8d7973;
  font-size: 14px;
  padding: 6px 14px;
  margin: 0 6px 8px 0;
  border: 1px solid #f4f2f2;
  display: inline-block;
  transition: 0.3s;
}

.blog .sidebar .tags ul a:hover {
  color: #fff;
  border: 1px solid <?php echo $fcolor; ?>;
  background: <?php echo $fcolor; ?>;
}

.blog .sidebar .tags ul a span {
  padding-left: 5px;
  color: #ddd7d6;
  font-size: 14px;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  color: #313030;
  font-size: 14px;
  background: #fff;
}

#footer .footer-top {
  padding: 60px 0 30px 0;
  background: #fff9f7;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact h4 {
  font-size: 22px;
  margin: 0 0 30px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
}

#footer .footer-top .footer-contact p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Tillana";
  color: #656262;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: bold;
  color: #313030;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #ffa587;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #656262;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  text-decoration: none;
  color: <?php echo $fcolor; ?>;
}

#footer .footer-newsletter {
  font-size: 15px;
}

#footer .footer-newsletter h4 {
  font-size: 16px;
  font-weight: bold;
  color: #313030;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
  text-align: left;
  border: 1px solid #ffe2d9;
}

#footer .footer-newsletter form input[type="email"] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type="submit"] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: <?php echo $fcolor; ?>;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type="submit"]:hover {
  background: #ed3b00;
}

#footer .credits {
  padding-top: 5px;
  font-size: 13px;
  color: #313030;
}

#footer .social-links a {
  font-size: 18px;
  display: inline-block;
  background: <?php echo $fcolor; ?>;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .social-links a:hover {
  background: #ff7e54;
  color: #fff;
  text-decoration: none;
}

.footer-bottom{
	background : <?php echo $fbackground; ?>;
}	

</style>
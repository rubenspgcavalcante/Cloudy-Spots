<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cloudy Spots</title>
	<meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>style/normalize.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>js/nivo-slider/nivo-slider.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>js/nivo-slider/themes/default/default.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>style/general.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>style/system.css" />
</head>

<body>
    <div class="content">
        <div class="sliderbox greenbox">
            <img class="logo" src="<?php echo base_url(); ?>images/logo.png" alt="Cloudy Spots"/>
            <div id="slider" class="theme-default slider">
                <img alt="slide 1" src="<?php echo base_url(); ?>images/slides/slide1.png">
                <img alt="slide 2" src="<?php echo base_url(); ?>images/slides/slide2.png">
            </div>
            <div class="bottom" >
                <div class="account">
                    <span>Enjoy now</span>
                    <a href="#">create account</a>
                </div>
                <div class="social">
                    <span>Contact the developer</span>
                    <ul>
                        <li>
                            <a href="https://plus.google.com/111824312767467695973/posts//p/pub?hl=pt-BR" target="blank">
                                <img class="social-icon" id="google" src="<?php echo base_url(); ?>images/social/google.png" alt="google" />
                            </a>
                        </li>
                        <li>
                            <a href="http://twitter.com/#!/rubenscavalcan" target="blank">
                                <img class="social-icon" id="twitter" src="<?php echo base_url(); ?>images/social/twitter.png" alt="twitter" />
                            </a>
                        </li>
                        <li>
                            <a href="http://www.facebook.com/rubens.pinheiro" target="blank">
                                <img class="social-icon" id="facebook" src="<?php echo base_url(); ?>images/social/facebook.png" alt="facebook" />
                            </a>
                        </li>
                        <li>
                            <a href="http://www.linkedin.com/profile/view?id=83208136&trk=tab_pro" target="blank">
                                <img class="social-icon" id="linkedin" src="<?php echo base_url(); ?>images/social/linkedin.png" alt="linkedin" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            
        </div>
    
    
	    <div class="loginbox greenbox">
	       <h1><img src="<?php echo base_url(); ?>images/login.png" alt="Login" /></h1>
	       <?php if(!empty($msg))echo "<h2 class='error'>".$msg."</h2>"; ?>
	        <form name="login" method="POST" action="#">
	            <label for="email">email</label>
	            <input id="email" type="text" name="email" value="" />
	            <label for="password">password</label>
	            <input id="password" type="password" name="password" value="" />
	            <input type="submit" value="ok" id="submit"/>
	            <input type="reset" value="cancel" id="cancel" />
	        </form>
	        <a href="#" id="forgot">Forgot my password</a>
	    </div>
	    
    </div>
<!-- Javascript load -->
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/functions.js"></script>
</body>
</html>

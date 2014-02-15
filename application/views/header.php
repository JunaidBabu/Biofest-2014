<html>
<head>
<title>Biofest 2014</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Through Biofest, the annual technical festival of the Department of Biotechnology, IIT Madras, we intend to celebrate this great discipline that has enlightened us for centuries and has applications in every aspect of life. We endeavour to indulge the enthusiasts, learn from the learned, and teach those with an open mind. We hope to inculcate a passion for this discipline and provide a platform for students and researchers alike to showcase their illustrious work.">
<link rel="shortcut icon" href="http://www.biofest.in/2013/main//img/favicon.ico" type="image/x-icon" /> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<!-- Optional theme 
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
-->
<link href='http://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet' type='text/css'>
<link href='//cdnjs.cloudflare.com/ajax/libs/nprogress/0.1.2/nprogress.min.css' rel='stylesheet' type='text/css'>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/nprogress/0.1.2/nprogress.min.js"></script>
<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" />
<style type="text/css">


  #bulb{
    background: url("<?=base_url('assets/img/logo_large2.png')?>");
    background-repeat: no-repeat;
    background-size: contain;
    width: 100%;
    max-width: 400px;
    left: 0;
    top: 0;
    bottom: 0;
    position: fixed;
    height: 100%;
  }
  #iitm_logo{
    position: fixed;
right: 75px;
bottom: 5px;
background-repeat: no-repeat;
width: 80;
  }
  
  #footer{
    background: #2B5E02;
    height: 90px;
    position: fixed;
    bottom: 0px;
    z-index: 0;
    left: 0;
    right: 0;
  }
  #social{
    position: fixed;
    right: 50px;
    bottom: 100px;
  }
  ul#menu {
    margin:0;
    padding:0;
    list-style-type:none;
   text-align: right;
padding-right: 50px;
}
ul#menu li {
color: white;
display: inline-block;
margin-right: 55px;
padding-right: 5px;
padding-top: 8px;
padding-bottom: 5px;
}
.highlight {
padding: 9px 14px;
margin-bottom: 14px;
background-color: #f7f7f9;
border: 1px solid #e1e1e8;
border-radius: 4px;
}
.contain{
    position: absolute; 
    right: 46px; 
    height: 57%;
    top: 125px;
    width: 71%;
    padding: 11px;
    margin: 15px;
}
.navbar {
  background: #2B5E02;
    height: 41px;
   
    top: 60px;
     position: absolute;
    left: 0;
    right: 0;
}
.navbar-default .navbar-nav>li>a {
color: white;
}
#dvLoading
{
   background:#000 url("<?=base_url('assets/img/logo_large2.png')?>") no-repeat center center;
   height: 100px;
   width: 100px;
   position: fixed;
   z-index: 1000;
   left: 50%;
   top: 50%;
   margin: -25px 0 0 -25px;
}
body{
  display: none;
}
</style>
</head>

<script>
//NProgress.start();
$(window).load(function(){
  NProgress.start();
  NProgress.done();
  $("body").fadeIn("slow");
});

</script>
<body>


<nav>
  <a href="home"><img src="<?=base_url('assets/img/logo.png')?>" style="position: absolute; height: 65px; left: 350px; top: 50px; z-index:1;"></a></nav>
<!--
  <a href="google" class="btn btn-success" style="
    right: 75px;
    top: 20px;
    position: absolute;
">Login</a>
-->
<div class="navbar navbar-default" role="navigation">
      <div class="container">
        
        <div class="collapse navbar-collapse pull-right">
          <ul class="supernav nav navbar-nav">
          <!--  <li class="active"><a href="/">Home</a></li>-->
            <li id="events" class="ajax" ><a href="events">Events</a></li>
            <li id="spons" class="ajax"><a  href="sponsorship">Sponsorship </a></li>
            <li id="hospi" class="ajax"><a  href="hospitality">Hospitality</a></li>
            
            <li id="contactus" class="ajax"><a href="contactus">Contact Us</a></li>
            <li class="divider"></li>
            <li class="dropdown">
            <?php
                if($this->session->userdata('name')){
                  echo '<a href="" class="dropdown-toggle" data-toggle="dropdown">'.$this->session->userdata('name').'<b class="caret"></b></a>
                   <ul class="dropdown-menu">
                   <li><a href='.base_url('home/logout').'>Logout</a></li>
                   </ul>';
                }else{
                  echo '<a href="" class="dropdown-toggle" data-toggle="dropdown">Login/Register <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                <li class="dropdown-header">Sign in with</li>
                <li><a href='.base_url('auth/session/google').'>Google</a></li>
                <li><a href='.base_url('auth/session/facebook').'>Facebook</a></li>
              </ul>';
                }
                //echo $this->session->userdata('email');
                ?>
              
              
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<!--
  <div id="navg">
  <nav>
    <ul id="menu">
      <li><a href="events">Events</a></li>
      <li><a href="sponsorship">Sponsorship </a></li>
      <li><a href="hospitality">Hospitality</a></li>
      <li><a href="schedule">Schedule</a></li>
      <li><a href="contactus">Contact Us</a></li>
    </ul>
    </nav>
  </div>
  -->
  <div class="highlight contain">
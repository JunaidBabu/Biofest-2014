<html>
<head>
<title>Biofest 2014</title>
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
<style type="text/css">

nav a {
    color: white;
    text-decoration: none;
}

nav a:hover 
{
     color:#00A0C6; 
     text-decoration:none; 
     cursor:pointer;  
}
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
    background-image: url("<?=base_url('assets/img/iitm_logo.png')?>");
  }
  #navg{
    background: url("<?=base_url('assets/img/nav_bg.png')?>");
    height: 41px;
    position: absolute;
    top: 62px;
    left: 0;
    right: 0;
  }
  
  #footer{
    background: url("<?=base_url('assets/img/nav_bg.png')?>");
    height: 90px;
    position: absolute;
    bottom: 0px;
    z-index: -1;
    left: 0;
    right: 0;
  }
  #social{
    position: absolute;
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
    height: 53%;
    top: 125px;
    width: 70%;
    padding: 11px;
    margin: 15px;
}

</style>
</head>

<body>
<nav>
  <a href="home"><img src="<?=base_url('assets/img/logo.png')?>" style="position: absolute; height: 65px; left: 350px; top: 50px; z-index:1;"></a></nav>

  <a href="google" class="btn btn-success" style="
    right: 75px;
    top: 20px;
    position: absolute;
">Login</a>

  <div id="navg">
  <nav>
    <ul id="menu">
      <li><a href="events">Events</a></li>
      <li><a href="sponsorship">Sponsorship </a></li>
      <li><a href="hospitality">Hospitality</a></li>
      <li><a href="#">Schedule</a></li>
      <li><a href="contactus">Contact Us</a></li>
    </ul>
    </nav>
  </div>
  <div class="highlight contain">
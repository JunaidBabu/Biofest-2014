<div id="block1 dropDiv"></div>

<style type="text/css">
	#holder {
 position: absolute;
 top: 200px;
 left: 100px;   
}

#dropDiv, #dropDiv2, #dropDiv3, #dropDiv4 {
 display: none;
 position: absolute;
 top: -20px;
 /*background: #fff; */
 width: 100px;
    background-repeat: no-repeat;
    background-size: contain;
    background-image: url("http://localhost/test/Biofest/Main/ci/CodeI/assets/img/event_container.png");
    height: 100px;
}

</style>

<div id="dropDiv"></div>
<div id="dropDiv2"></div>
<div id="dropDiv3"></div>
<div id="dropDiv4"></div>

 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script>


  $(function() {
      setTimeout (function() {
    var $dropDiv = $('#dropDiv');
    
    // get width/height of drop element
    var dh = $dropDiv.outerHeight();
    var dw = $dropDiv.outerWidth();
    
    // animate drop
    $dropDiv.css({
            left: 90,
            top: $(window).scrollTop() - dh,
            opacity: 0,
            display: 'block'
        }).animate({
            left: 90,
            top: 50,
            opacity: 1
        }, 300, 'easeInOutQuart');


      $('#dropDiv2').css({
            left: 220,
            top: $(window).scrollTop() - dh,
            opacity: 0,
            display: 'block'
        }).animate({
            left: 220,
            top: 50,
            opacity: 1
        }, 300, 'easeInExpo');

         $('#dropDiv3').css({
            left: 350,
            top: $(window).scrollTop() - dh,
            opacity: 0,
            display: 'block'
        }).animate({
            left: 350,
            top: 50,
            opacity: 1
        }, 300, 'swing');

         $('#dropDiv4').css({
            left: 480,
            top: $(window).scrollTop() - dh,
            opacity: 0,
            display: 'block'
        }).animate({
            left: 480,
            top: 50,
            opacity: 1
        }, 300, 'easeInOutElastic');
   },1500);
});
</script>
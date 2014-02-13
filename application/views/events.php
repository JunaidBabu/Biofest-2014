<div id="block1 dropDiv"></div>

<style type="text/css">
	#holder {
 position: absolute;
 top: 200px;
 left: 100px;   
}

#dropDiv, #dropDiv2, #dropDiv3, #dropDiv4, #dropDiv5, #dropDiv6, #dropDiv7, #dropDiv8, #dropDiv9, #dropDiv10 {
	cursor: pointer;
 display: none;
 position: absolute;
 top: -20px;
 /*background: #fff; */
 width: 120px;
    background-repeat: no-repeat;
    background-size: contain;
   background-image: url("<?=base_url('assets/img/events/BIOBIZ.png')?>");
    height: 120px;
}

p.caption {display:none}
#dropDiv:hover p, #dropDiv:hover p, #dropDiv2:hover p, #dropDiv3:hover p, #dropDiv4:hover p, #dropDiv5:hover p, #dropDiv6:hover p, #dropDiv7:hover p, #dropDiv8:hover p, #dropDiv9:hover p, #dropDiv10:hover p{
	display:inline;
color: white;
font-size: 30;
text-align: center;
position: absolute;
}
#dropDiv:hover, #dropDiv2:hover, #dropDiv3:hover, #dropDiv4:hover, #dropDiv5:hover, #dropDiv6:hover, #dropDiv7:hover, #dropDiv8:hover, #dropDiv9:hover, #dropDiv10:hover
{ 
	background-image: url("<?=base_url('assets/img/event_container.png')?>");
}
#dropDiv2{
	 background-image: url("<?=base_url('assets/img/events/BIOROBOTICS.png')?>");
}
#dropDiv3{
	 background-image: url("<?=base_url('assets/img/events/FORENSICS.png')?>");
}
#dropDiv4{
	 background-image: url("<?=base_url('assets/img/events/GELART.png')?>");
}
#dropDiv5{
	 background-image: url("<?=base_url('assets/img/events/IGNOBEL.png')?>");
}
#dropDiv6{
	 background-image: url("<?=base_url('assets/img/events/INDUSTRYDEFINEDPROBLEM.png')?>");
}
#dropDiv7{
	 background-image: url("<?=base_url('assets/img/events/OPENQUIZ.png')?>");
}
#dropDiv8{
	 background-image: url("<?=base_url('assets/img/events/PAPER.png')?>");
}
#dropDiv9{
	 background-image: url("<?=base_url('assets/img/events/STREAX.png')?>");
}
#dropDiv10{
	 background-image: url("<?=base_url('assets/img/events/WEBOFLIFE.png')?>");
}


</style>
<div id="divcontainer1">
<div id="dropDiv"><p class="caption">BioBiz</p></div>
<div id="dropDiv2"><p class="caption">Biorobotics</p></div>
<div id="dropDiv3"><p class="caption">Forensics</p></div>
<div id="dropDiv4"><p class="caption">Gel Art</p></div>
<div id="dropDiv5"><p class="caption">Ignobel</p></div>
</div>
<div id="divcontainer2">
<div id="dropDiv6"><p class="caption">Industry Defined Problem</p></div>
<div id="dropDiv7"><p class="caption">Open Quiz</p></div>
<div id="dropDiv8"><p class="caption">Paper and Poster Presentation</p></div>
<div id="dropDiv9"><p class="caption">Streax</p></div>
<div id="dropDiv10"><p class="caption">Web Of Life</p></div>
</div>
<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Event</h4>
      </div>
      <div class="modal-body">
        <div class="bs-example bs-example-tabs">
    <ul id="myTab" class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Intro</a></li>
      <li class=""><a href="#profile" data-toggle="tab">Rules</a></li>
      <li class=""><a href="#profile" data-toggle="tab">Format</a></li>
      <li class=""><a href="#profile" data-toggle="tab">Contact</a></li>
      <li class=""><a href="#profile" data-toggle="tab">Register</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="home">
        <p>Raw denim you probably haven't heard of them jean shorts Austin.
         Nesciunt tofu stumptown aliqua, retro synth master cleanse.
          Mustache cliche tempor, williamsburg carles vegan helvetica. 
          Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
           qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. 
           Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
      </div>
      <div class="tab-pane fade" id="profile">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa 
        nulla single-origin coffee squid. Exercitation +1 labore ve
        lit, blog sartorial PBR leggings next level wes anderson ar
        tisan four loko farm-to-table craft beer twee. Qui photo booth 
        letterpress, commodo enim craft beer mlkshk aliquip jean shorts
         ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda lab
         ore aesthetic magna delectus mollit. Keytar helvetica VHS salvia
          yr, vero magna velit sapiente labore stumptown. Vegan fanny pack o
          dio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY 
          ethical culpa terry richardson biodiesel. Art party scenester stumptown,
           tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
      </div>
    </div>
  </div>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
var $modal = $('.modal').modal({
    show: false
});
$('#dropDiv').on('click', function() {
    $modal.modal('show');
});

//alert(window.location.hash);

function randomeffect(){
	var myArray = ['easeInQuad','easeOutQuad','easeInOutQuad','easeInCubic','easeOutCubic','easeInOutCubic','easeInQuart','easeOutQuart','easeInOutQuart','easeInSine','easeOutSine','easeInOutSine','easeInExpo','easeOutExpo','easeInOutExpo','easeInQuint','easeOutQuint','easeInOutQuint','easeInCirc','easeOutCirc','easeInOutCirc','easeInElastic','easeOutElastic','easeInOutElastic','easeInBack','easeOutBack','easeInOutBack','easeInBounce','easeOutBounce','easeInOutBounce'];
	var rand = myArray[Math.floor(Math.random() * myArray.length)];
	return rand;
}
  $(function() {
      setTimeout (function() {
    var $dropDiv = $('#dropDiv');
    
    // get width/height of drop element
    var dh = $dropDiv.outerHeight();
    var dw = $dropDiv.outerWidth();
    leftalign = 90;
    $("#divcontainer1").children().each(function(){
    	//console.log(this);
    	
    	$(this).css({
            left: leftalign,
            top: $(window).scrollTop() - dh,
            opacity: 0,
            display: 'block'
        }).animate({
            left: leftalign,
            top: 50,
            opacity: 1
        }, 350, randomeffect());
        leftalign+=150;

    });

    leftalign = 90;
    $("#divcontainer2").children().each(function(){
    	//console.log(this);
    	
    	$(this).css({
            left: leftalign,
            top: $(window).scrollTop() - dh,
            opacity: 0,
            display: 'block'
        }).animate({
            left: leftalign,
            top: 180,
            opacity: 1
        }, 280, randomeffect());
        leftalign+=150;

    });
   },1500);
});
</script>
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

#dropDiv{
	 background-image: url("<?=base_url('assets/img/events/BIOBIZ.png')?>");
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

#dropDiv:hover {
	 background-image: url("<?=base_url('assets/img/events/biobiz1.png')?>");
}
#dropDiv2:hover {
	 background-image: url("<?=base_url('assets/img/events/biorobotics1.png')?>");
}
#dropDiv3:hover {
	 background-image: url("<?=base_url('assets/img/events/forensics1.png')?>");
}
#dropDiv4:hover {
	 background-image: url("<?=base_url('assets/img/events/gelart1.png')?>");
}
#dropDiv5:hover {
	 background-image: url("<?=base_url('assets/img/events/ignobel1.png')?>");
}
#dropDiv6:hover {
	 background-image: url("<?=base_url('assets/img/events/industry defined problems1.png')?>");
}
#dropDiv7:hover {
	 background-image: url("<?=base_url('assets/img/events/openquiz1.png')?>");
}
#dropDiv8:hover {
	 background-image: url("<?=base_url('assets/img/events/paper1.png')?>");
}
#dropDiv9:hover {
	 background-image: url("<?=base_url('assets/img/events/streax1.png')?>");
}
#dropDiv10:hover {
	 background-image: url("<?=base_url('assets/img/events/weboflife1.png')?>");
}


</style>
<div id="divcontainer1">
<div id="dropDiv" event="biobiz"></div>
<div id="dropDiv2" event="biorobotics"></div>
<div id="dropDiv3" event="forensics"></div>
<div id="dropDiv4" event="gelart"></div>
<div id="dropDiv5" event="ignobel"></div>
</div>
<div id="divcontainer2">
<div id="dropDiv6" event="industry"></div>
<div id="dropDiv7" event="openquiz"></div>
<div id="dropDiv8" event="paper"></div>
<div id="dropDiv9" event="streax"></div>
<div id="dropDiv10" event="weboflife"></div>
</div>
<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
var $modal = $('.modal').modal({
    show: false
});

$("#divcontainer1").children().each(function(){
	$(this).on('click', function() {
	NProgress.start();
	tag = $(this).attr("event");
	$.ajax({
        url: "events/"+tag,
        type: "GET",
        success:function(data){
            $('.modal-content').html(data);
            window.history.pushState({"html":data.html,"pageTitle":data.pageTitle},"", "#"+tag);
            NProgress.done();
            $modal.modal('show');
            return false;
        },
        error:function (){
            alert("Something happened. Please reload the page!");
        }
    });
    
});
	});
$("#divcontainer2").children().each(function(){
	$(this).on('click', function() {
	NProgress.start();
	tag = $(this).attr("event");
	$.ajax({
        url: "events/"+tag,
        type: "GET",
        success:function(data){
            $('.modal-content').html(data);
            window.history.pushState({"html":data.html,"pageTitle":data.pageTitle},"", "#"+tag);
            NProgress.done();
            $modal.modal('show');
            return false;
        },
        error:function (){
            alert("Something happened. Please reload the page!");
        }
    });
    
});
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
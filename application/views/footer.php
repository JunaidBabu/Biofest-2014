</div>

<div id="social">
    <a href="https://www.facebook.com/Biofest" target="_blank"><img src="<?=base_url('assets/img/facebook.png')?>" style="width: 30%;"></a>
    <a href="http://www.youtube.com/BiofestIITM" target="_blank"><img src="<?=base_url('assets/img/youtube.png')?>" style="width: 30%;"></a>
  </div>
  <div id="footer">
  <div id="footertext" style="
    position: absolute;
    color: white;
    left: 230;
    top: 15;
    font-weight: bold;
">
    <p style="
    font-size: 23;
    padding-left: 58;
">April 19th and 20th</p>
    <p style="
    font-size: 18;
">Department of Biotechnology, IIT Madras</p>
    </div>
  </div>
  <div id="bulb"></div>
  <a href="http://www.iitm.ac.in" target="_blank" id="iitm_logo"><img src="<?=base_url('assets/img/iitm_logo.png')?>" style="width: 74%;"></a>
</body>

<!-- Latest compiled and minified JavaScript -->


<script type="text/javascript">

function preload(arrayOfImages) {
    $(arrayOfImages).each(function () {
        $('<img />').attr('src',this).appendTo('body').css('display','none');
    });
}

preload([
    "<?=base_url('assets/img/events/BIOBIZ.png')?>",
    "<?=base_url('assets/img/events/BIOROBOTICS.png')?>",
    "<?=base_url('assets/img/events/FORENSICS.png')?>",
    "<?=base_url('assets/img/events/GELART.png')?>",
    "<?=base_url('assets/img/events/IGNOBEL.png')?>",
    "<?=base_url('assets/img/events/INDUSTRYDEFINEDPROBLEM.png')?>",
    "<?=base_url('assets/img/events/OPENQUIZ.png')?>",
    "<?=base_url('assets/img/events/PAPER.png')?>",
    "<?=base_url('assets/img/events/STREAX.png')?>",
    "<?=base_url('assets/img/events/WEBOFLIFE.png')?>"
]);

$(".ajax a").click(function(e) {
  e.preventDefault();
    var $this = $(this),
        href = $this.attr("href");
        //alert(href);
NProgress.start();

    $.ajax({
        url: href+"/ajax",
        type: "GET",
        success:function(data){
           // alert("done");
            $('.contain').html(data);
            window.history.pushState({"html":data.html,"pageTitle":data.pageTitle},"", href);
            NProgress.done();
            //alert("dne");
            return false;
        },
        error:function (){
            alert("Something happened. Please reload the page!");
        }
    });

    //location.href = "#" + href;
    
});


</script>
</html>
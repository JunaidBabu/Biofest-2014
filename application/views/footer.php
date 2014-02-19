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
">March 15th and 16th</p>
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
    "<?=base_url('assets/img/events/WEBOFLIFE.png')?>",
    "<?=base_url('assets/img/events/biobiz1.png')?>",
    "<?=base_url('assets/img/events/biorobotics1.png')?>",
    "<?=base_url('assets/img/events/forensics1.png')?>",
    "<?=base_url('assets/img/events/gelart1.png')?>",
    "<?=base_url('assets/img/events/ignobel1.png')?>",
    "<?=base_url('assets/img/events/industry defined problems1.png')?>",
    "<?=base_url('assets/img/events/openquiz1.png')?>",
    "<?=base_url('assets/img/events/paper1.png')?>",
    "<?=base_url('assets/img/events/streax1.png')?>",
    "<?=base_url('assets/img/events/weboflife1.png')?>"
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


<style>
#fanback {
display:none;
background:rgba(0,0,0,0.8);
width:100%;
height:100%;
position:fixed;
top:0;
left:0;
z-index:99999;
}
#fan-exit {
width:100%;
height:100%;
}
#fanbox {
background:white;
width: 300px;
height: 324px;
position:absolute;
top:58%;
left:63%;
margin:-220px 0 0 -375px;
-webkit-box-shadow: inset 0 0 50px 0 #939393;
-moz-box-shadow: inset 0 0 50px 0 #939393;
box-shadow: inset 0 0 50px 0 #939393;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
margin: -220px 0 0 -375px;
}
#fanclose {
float: right;
cursor: pointer;
background: url(http://3.bp.blogspot.com/-NRmqfyLwBHY/T4nwHOrPSzI/AAAAAAAAAdQ/8b9O7O1q3c8/s1600/fanclose.png) no-repeat;
height: 15px;
width: 7;
padding: 25px;
position: relative;
padding-right: 40px;
margin-top: -20px;
margin-right: -22px;
}
</style>


<script type='text/javascript'>
//<![CDATA[
jQuery.cookie = function (key, value, options) {

// key and at least value given, set cookie...
if (arguments.length > 1 && String(value) !== "[object Object]") {
options = jQuery.extend({}, options);

if (value === null || value === undefined) {
options.expires = -1;
}

if (typeof options.expires === 'number') {
var days = options.expires, t = options.expires = new Date();
t.setDate(t.getDate() + days);
}

value = String(value);

return (document.cookie = [
encodeURIComponent(key), '=',
options.raw ? value : encodeURIComponent(value),
options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
options.path ? '; path=' + options.path : '',
options.domain ? '; domain=' + options.domain : '',
options.secure ? '; secure' : ''
].join(''));
}

// key and possibly options given, get cookie...
options = value || {};
var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};
//]]>
</script>
<script type='text/javascript'>
jQuery(document).ready(function($){
if($.cookie('popup_user_login') != 'yes')
{
$('#fanback').delay(5000).fadeIn('medium');
$('#fanclose, #fan-exit').click(function(){
$('#fanback').stop().fadeOut('medium');
});
}
$.cookie('popup_user_login', 'yes', { path: '/', expires: 7 });
});
</script>

<div id='fanback'>
<div id='fan-exit'>
</div>
<div id='fanbox'>
<div id='fanclose'>
</div>
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FBiofest&amp;width&amp;height=290&amp;colorscheme=dark&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=false&amp;appId=422953697831758" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>
</div>
</div>

</html>
</div>

<div id="social">
    <a href="#"><img src="<?=base_url('assets/img/facebook.png')?>" style="width: 30%;"></a>
    <a href="#"><img src="<?=base_url('assets/img/youtube.png')?>" style="width: 30%;"></a>
  </div>
  <div id="footer">
    
  </div>
  <div id="bulb"></div>
  <a href="#" style="
    right: 75px;
    bottom: 5px;
    position: absolute;
"><img src="<?=base_url('assets/img/iitm_logo.png')?>" style="width: 74%;"></a>
</body>

<!-- Latest compiled and minified JavaScript -->
<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Event</h4>
      </div>
      <div class="modal-body">
        <p>Other details</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Register</button>
<!--         <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="//cdnjs.cloudflare.com/ajax/libs/nprogress/0.1.2/nprogress.min.js"></script>

<script type="text/javascript">
// $('.loveit').click(function(e){
//   e.preventDefault();
//     var targetUrl = $(this).attr('rel');
//  $.ajax({
//         url: targetUrl,
//         type: "GET",
//         success:function(data){
//            // alert("done");
//             $('html').html(data);
//             return false;
//         },
//         error:function (){
//             alert("testing error");
//         }
//     });
// });
var $modal = $('.modal').modal({
    show: false
});
$('#dropDiv').on('click', function() {
    $modal.modal('show');
});

$("nav a").click(function(e) {
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
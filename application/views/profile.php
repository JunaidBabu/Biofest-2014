<div class="row">
  <div class="col-md-4">
  <h5 class="text-center"><strong>Profile Details</strong></h5>
  	<form method="post" accept-charset="UTF-8" style="margin: 7;">
  	<div class="input-group merged" style="margin-top: 5;" >
	    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
	    <input id="rname" class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $this->session->userdata('name'); ?>" >
	</div>
	<div class="input-group merged" style="margin-top: 5;" >
	    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
	   <input id="remail"class="form-control" type="email" name="email" placeholder="Email" required value="<?php echo $this->session->userdata('email'); ?>">
	</div>
	<div class="input-group merged" style="margin-top: 5;">
	    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
	    <input id="rpass1" class="form-control" type="password" name="pass1" placeholder="Password" required>
	</div>
	
	<div class="input-group merged" style="margin-top: 5;">
	    <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
	   <input id="rinsti" class="form-control" type="text" name="insti" placeholder="Name of Institution" required value="<?php echo $this->session->userdata('insti'); ?>" >
	</div>
     <div class="input-group merged"  style="margin-top: 5; margin-bottom: 10;" >
	    <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
	   <input id="rdept" class="form-control" type="text" name="dept" placeholder="Department" required value="<?php echo $this->session->userdata('dept'); ?>" >
	</div>
      
     
     
      
    
      <input class="btn btn-success" style="clear: left; width: 100%; height: 32px; font-size: 14px;" type="submit" name="commit" value="Update Profile">
    </form>
  </div>
  <div class="col-md-8">
  	<h5 class="text-center"><strong>Registered events</strong></h5>
  </div>

</div>
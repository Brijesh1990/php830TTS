
  <!--content start here-->
  <div class="container mt-5">
    <a href="register.html"><button type="button" class="btn btn-lg text-white mt-1" id="btn">Update your profile! <i
          class="bi bi-person"></i></button></a>

    <h2 class="text-success mt-5 line1">Update your profile! <i class="bi bi-person"></i></h2>
   
    <div class="row">
      <div class="col-md-4 card line">
      <div class="card-header" id="btn">Manage Profile</div>
      <ul class="sidebar-link mt-4" style="min-width:250px">
        <li><a href="<?php echo $mainurl;?>manageprofile">Manage Profile!</a></li>
        <li><a href="<?php echo $mainurl;?>notifications">Manage notifications <span class="badge badge-dark bg-dark badge-lg">0</span</a></li>
        <li><a href="<?php echo $mainurl;?>myorders">Manage Orders  <span class="badge badge-dark bg-dark badge-lg">0</span</a></li>
        <li><a href="<?php echo $mainurl;?>changepassword">Change Password</a></li>
        <li><a href="#">Delete Account <i class="bi bi-trash"></i></a></li>
        <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to logout as Customer ?')">Logout! <i class="bi bi-power"></i></a></li>
      </ul>
      </div>

      <div class="col-md-7">
      
        <form method="post" name="frm" id="frm" action="welcome.html" onsubmit="return valid(this.value)">
          <div class="form-group mt-2">
            <input type="text" name="fname" class="form-control" placeholder="Enter FirstName *">
          </div>
          <div id="error"></div>
          <div class="form-group mt-2">
            <input type="text" name="lname" class="form-control" placeholder="Enter LastName *">
          </div>
          <div class="form-group mt-2">
            <input type="text" name="email" class="form-control" placeholder="Enter Email *">
          </div>
          <div class="form-group mt-2">
            <input type="password" name="pass" class="form-control" placeholder="Enter Password *">
          </div>

          <div class="form-group mt-2">
            <input type="password" name="cpass" class="form-control" placeholder="Enter confirm Password *">
          </div>

          <div class="form-group mt-2">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Phone *">
          </div>

          <div class="form-group mt-2">
            <textarea name="address" class="form-control" placeholder="Enter Address *"></textarea>
          </div>

          <div class="form-group mt-2">
            <input type="submit" name="upd" class="btn btn-lg" id="btn"
              value="Update Profile!">

     

          </div>
         
        </form>
      </div>
    </div>
  </div>


<div class="container mt-5">
    <h3 class="text-center">Login Form</h3>
    <hr class="border w-25 border-dark mx-auto">
    
    
    <form method="post">
       
        <div class="col-md-3 mx-auto mt-3">    
        <div class="form-group">
        <label>Email</label>
        <input type="text" name="txt_email" placeholder="Enter email *" class="form-control">
        </div> 
        </div>

        <div class="col-md-3 mx-auto mt-3">    
        <div class="form-group">
        <label>Password</label>
        <input type="password" name="txt_pass" placeholder="Enter Password *" class="form-control">
        </div> 
        </div>
       

       <div class="form-group text-center mx-auto mt-3">
        <button type="submit" name="log"  class="btn btn-success btn-sm">Login</button><a href="">Forget Password ?</a>
       </div>

       
       <div class="form-group text-center mx-auto mt-3">
        <b>Dont have an account ?<a href="<?php echo $mainurl;?>register">Create your account</a></b>
       </div>
    </form>
 
</div>

<script>
    function book()
    {
        alert('login first for booked your table')
        window.location='login';
    }
</script>
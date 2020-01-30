
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" />
      <h1>Log in here</h1>
      <h3></h3>
    </div>
  

    
    <!-- Login Form -->
    <form action="" method="POST">
      <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
      <div class="form-group">
        <input type="text" id="email" name="email" class="fadeIn fourth"  placeholder="email" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
        <?php echo form_error('email','<p class="help-block">','</p>'); ?>
      </div>


      <div class="form-group">
        <input type="text" id="password" name="password" class="fadeIn fifth"  placeholder="password" value="<?php echo !empty($user['password'])?$user['password']:''; ?>" required>
        <?php echo form_error('password','<p class="help-block">','</p>'); ?>
      </div>


       <div class="form-group">
        <input type="submit" name="loginSubmit" class="fadeIn seventh" value="Login">
       </div>

    </form>

    <div id="formFooter">
      <a class="underlineHover" href="<?php echo base_url('index.php/users/registration') ?>">Not registered? Join us right away</a>
    </div>

  </div>
</div>


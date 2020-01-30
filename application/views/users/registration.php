
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" />
      <h1>Registration</h1>
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
        <input type="text" id="first_name" name="first_name"  class="fadeIn second"  placeholder="first name" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
        <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
        </div>

       <div class="form-group">
        <input type="text" id="last_name" name="last_name" class="fadeIn third"  placeholder="last name" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
        <?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
        </div>

       <div class="form-group">
        <input type="text" id="email" name="email" class="fadeIn fourth"  placeholder="email" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
        <?php echo form_error('email','<p class="help-block">','</p>'); ?>
      </div>

       <div class="form-group">
          <?php
            if (!empty($user['gender'])&&$user['gender']=='Female') {
                $fcheck='checked="checked"';
                $mcheck='';
            }else{
                $mcheck='checked="checked"';
                $fcheck='';
            }
          ?>

          <div class="radio fadeIn fourth">
            <label>
              <input type="radio" name="gender" value="Male" <?php echo $mcheck;?> ;>
              Male
            </label>
            <label>
              <input type="radio" name="gender" value="Male" <?php echo $fcheck;?> ;>
              Female
            </label>
          </div>
      </div>

      <div class="form-group">
        <input type="text" id="phone" name="phone" class="fadeIn third"  placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>" required>
        <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
      </div>


       <div class="form-group">
        <input type="text" id="password" name="password" class="fadeIn fifth"  placeholder="password" value="<?php echo !empty($user['password'])?$user['password']:''; ?>" required>
        <?php echo form_error('password','<p class="help-block">','</p>'); ?>
      </div>

       <div class="form-group">
        <input type="text" id="conf_password" name="conf_password" class="fadeIn sixth"  placeholder="confirm password" value="<?php echo !empty($user['conf_password'])?$user['conf_password']:''; ?>" required>
        <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
      </div>

       <div class="form-group">
        <input type="submit" name="signupSubmit" class="fadeIn seventh" value="Register">
       </div>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?php echo base_url('index.php/users/login');?>">Already Registered? Login here..</a>
    </div>

  </div>
</div>


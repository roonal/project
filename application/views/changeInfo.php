<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> -->
  <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
  <head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <title>User Update</title>
  </head>
  <body> 
    <div class="bg">
    <div class="login100-form">
      <div class="col-lg-3 m-lg-auto">
        <div class="card text-black bg-light mb-5 mt-5 ml-auto" style="width:40rem;">
          <div class="card-body">
            <span class="login100-form-title pb-3">
              Update Info
            </span>
            <div class="pb-3">
               <a href="<?= base_url('Auth/changePsword'); ?>" class="h4"><i class="fa fa-list"></i> Change Password</a>
            </div>
            <?php echo form_open('Login_auth/loginDo',array("method"=>"post")); ?>
            <div class="form-group input100">
              <label for="exampleInputEmail1">User Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $_SESSION['user']['username']?$_SESSION['user']['username'] : '' ?>">
            </div>
            <div class="form-group input100 ">
              <label for="exampleInputPassword">Email Address</label>
              <input type="email" class="form-control" id="exampleInputPassword" name="user_password" value="<?= $_SESSION['user']['email']?$_SESSION['user']['email'] : '' ?>">
            </div>
            <div class="pt-2">
              <button type="submit" class="btn btn-primary btn-sm register-button" name="UpdateProfile" value="Update Profile">Update Profile</button>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
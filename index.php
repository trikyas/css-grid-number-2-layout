<!DOCTYPE html>
<!--
Created by Chad Trikyas mooney.
Licence === MIT
-->
<?php include('includes/functions.php'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <?php include('includes/main.php');?>
    <?php include('includes/form.php');?>
    <?php include('includes/css.php');?>
  </head>
  <body class="site">
    <!--
CHANGE THE ADDRESS!!! This is created on my machine lol
  -->
<!--START: Browser Refresh Button -->
<a href="http://127.0.0.1:8888/github/example" class="btn">Refresh Page</a>
<!--END: Browser Refresh Button-->

      <div class="masthead">
        <div class="label" >
          .masthead
        </div>
        <h1>Chad<br />
          Trikyas<br />
          Mooney
        </h1>
        <div class="logo"></div>
      </div>
      <div class="feature">
        <div class="label" >
          .feature
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="main-area">
       <div class="label" >
          .main-area
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="sidebar">
       <div class="label" >
          .sidebar
       </div>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="extra">
       <div class="label" >
          .extra
       </div>
       <div class="triplets">
        <div class="triplet1"></div>
        <div class="triplet2"></div>
        <div class="triplet3"></div>
       </div>
      </div>
      <div class="form">
        <div class="label" >
          .FORM
        </div>
        <form class="myForm" method="post" action="">
          <div id="contact-details">
            <label for="customer_name">Name </label>
            <input type="text" name="customer_name" id="customer_name" required>
            <label for="email_address">Email </label>
            <input type="email" name="email_address" id="email_address">
            <label for="phone">Phone </label>
            <input type="tel" name="phone" id="phone">
          </div>
          <div id="comment-box">
          	<label for="comments">Comments</label>
          	<textarea name="comments" id="comments" maxlength="500"></textarea>
          </div>
          <button name="submit" type="submit">Submit</button>
        </form>
      </div>
      <div class="colophon">
         <div class="label" >
            .colophon
          </div>
          <p>
            Created by <a href="https://github.com/trikyas">Chad Trikyas Mooney</a>
            <br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
      </div>
  </body>
</html>

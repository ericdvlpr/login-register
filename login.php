 <link href="css/bootstrap.css" rel="stylesheet">
<div class="col-md-4"></div>
<div class="col-md-4 well">
  <div class="page-header">
    <h2 class="text-center">LOGIN</h2>
  </div>
    <form class="form-horizontal" action="core/login.php" method="post">
      <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <a href="recover.php?mode=username">Forget Username</a> 
            </label><br />
            <label>
             <a href="recover.php?mode=password">Forget Password</a>
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>
</div>
<div class="col-md-4"></div>
    <script src="js/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
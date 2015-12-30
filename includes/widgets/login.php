<?php include '../head.php';?>
<div class="col-md-4"></div>
<div class="col-md-4 well">
  <div class="page-header">
    <h2 class="text-center">LOGIN</h2>
  </div>
    <form class="form-horizontal" action="login.php" method="post">
      <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="username" placeholder="Username">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
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
<?php include '../footer.php';?>
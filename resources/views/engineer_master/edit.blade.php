<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Crud By PHP Code Builder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://crudegenerator.in">Laravel Crud By PHP Code Builder</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{Request::root()}}/engineer_master">Manage Engineer_master</a></li>
        <li><a href="{{Request::root()}}/engineer_master/add-engineer_master">Add Engineer_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Update Engineer_master</h2>  
<form role="form" method="post" action="{{Request::root()}}/engineer_master/edit-engineer_master-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="<?php echo $engineer_master->id ?>"   name="engineer_master_id">


      <div class="form-group">
    <label for="accessid">Accessid:</label>
    <input type="text" value="<?php echo $engineer_master->accessid ?>" class="form-control" id="accessid" name="accessid">
  </div>
    <div class="form-group">
    <label for="EngineerName">EngineerName:</label>
    <input type="text" value="<?php echo $engineer_master->EngineerName ?>" class="form-control" id="EngineerName" name="EngineerName">
  </div>
    <div class="form-group">
    <label for="Mobile">Mobile:</label>
    <input type="text" value="<?php echo $engineer_master->Mobile ?>" class="form-control" id="Mobile" name="Mobile">
  </div>
    <div class="form-group">
    <label for="Email">Email:</label>
    <input type="text" value="<?php echo $engineer_master->Email ?>" class="form-control" id="Email" name="Email">
  </div>
    <div class="form-group">
    <label for="Designation">Designation:</label>
    <input type="text" value="<?php echo $engineer_master->Designation ?>" class="form-control" id="Designation" name="Designation">
  </div>
    <div class="form-group">
    <label for="Status">Status:</label>
    <input type="text" value="<?php echo $engineer_master->Status ?>" class="form-control" id="Status" name="Status">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
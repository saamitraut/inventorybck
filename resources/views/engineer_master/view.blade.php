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
        <li><a href="{{Request::root()}}/engineer_master/manage-engineer_master">Manage Engineer_master</a></li>
        <li><a href="{{Request::root()}}/engineer_master/add-engineer_master">Add Engineer_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   accessid  :  <?php echo $engineer_master->accessid ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   EngineerName  :  <?php echo $engineer_master->EngineerName ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   Mobile  :  <?php echo $engineer_master->Mobile ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   Email  :  <?php echo $engineer_master->Email ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   Designation  :  <?php echo $engineer_master->Designation ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   Status  :  <?php echo $engineer_master->Status ?>
  </div>
</div>

</div>

</body>
</html>
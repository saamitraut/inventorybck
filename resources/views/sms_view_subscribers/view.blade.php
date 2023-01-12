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
        <li><a href="{{Request::root()}}/sms_view_subscribers/manage-sms_view_subscribers">Manage Sms_view_subscribers</a></li>
        <li><a href="{{Request::root()}}/sms_view_subscribers/add-sms_view_subscribers">Add Sms_view_subscribers</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   customerid  :  <?php echo $sms_view_subscribers->customerid ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   SubscriberName  :  <?php echo $sms_view_subscribers->SubscriberName ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   MobileNo  :  <?php echo $sms_view_subscribers->MobileNo ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   Area  :  <?php echo $sms_view_subscribers->Area ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   Address  :  <?php echo $sms_view_subscribers->Address ?>
  </div>
</div>

</div>

</body>
</html>



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
        <li><a href="{{Request::root()}}/sms_view_subscribers">Manage Sms_view_subscribers</a></li>
        <li class="active" ><a href="{{Request::root()}}/sms_view_subscribers/add-sms_view_subscribers">Add Sms_view_subscribers</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add Sms_view_subscribers</h2>  
<form role="form" method="post" action="{{Request::root()}}/sms_view_subscribers/add-sms_view_subscribers-post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <label for="customerid">Customerid:</label>
    <input type="text" class="form-control" id="customerid" name="customerid">
  </div>
    <div class="form-group">
    <label for="SubscriberName">SubscriberName:</label>
    <input type="text" class="form-control" id="SubscriberName" name="SubscriberName">
  </div>
    <div class="form-group">
    <label for="MobileNo">MobileNo:</label>
    <input type="text" class="form-control" id="MobileNo" name="MobileNo">
  </div>
    <div class="form-group">
    <label for="Area">Area:</label>
    <input type="text" class="form-control" id="Area" name="Area">
  </div>
    <div class="form-group">
    <label for="Address">Address:</label>
    <input type="text" class="form-control" id="Address" name="Address">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
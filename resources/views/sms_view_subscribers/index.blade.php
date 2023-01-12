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
        <li class="active" ><a href="{{Request::root()}}/sms_view_subscribers">Manage Sms_view_subscribers</a></li>
        <li><a href="{{Request::root()}}/sms_view_subscribers/add-sms_view_subscribers">Add Sms_view_subscribers</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Manage Sms_view_subscribers</h2>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($sms_view_subscriberss)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>customerid</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($sms_view_subscriberss as $sms_view_subscribers)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/sms_view_subscribers/view-sms_view_subscribers/{{$sms_view_subscribers->id}}" > {{$sms_view_subscribers->customerid }}</a> </td>

        <td>
        <a href="{{Request::root()}}/sms_view_subscribers/change-status-sms_view_subscribers/{{$sms_view_subscribers->id }}" > @if($sms_view_subscribers->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/sms_view_subscribers/edit-sms_view_subscribers/{{$sms_view_subscribers->id}}" >Edit</a>
        <a href="{{Request::root()}}/sms_view_subscribers/delete-sms_view_subscribers/{{$sms_view_subscribers->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Sms_view_subscriberss Found!</strong>
                </div>
 @endif
</div>

</body>
</html>
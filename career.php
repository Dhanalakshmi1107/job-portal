<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>career</title>
  <style>
    .feed{
      margin-top:20px;
    }
    .imgg{
      background-image:url("https://lh3.googleusercontent.com/qZ6uF2t62wIbuovRoPwZ8_plopGdeYz7iGhzROPaI5Slk19PlT7HojPTCCJd9r0B2sJDernKJB0giA_l1xvo8Kh6rg=w640-h400-e365-rj-sc0x00ffffff");
    }
  </style>
</head>
<body>
  <div class="imgg">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">JOB PORTAL</h1>
    <p class="lead">Best jobs that will suit your skills.</p>
  </div>
</div>
  </div>
  <div class="container">
  <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">XYZ COMPANY</h4>
        <h5 class="card-title">DIGITAL MARKETER</h5>
        <p class="card-text">Hello people we have 3 vacancies for the digital marketer position,we request atleast 2 years of experience.</p>
        <p><b> CTC: 5-6.5LPA </b></p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Apply Now
</button>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">TZ COMPANY</h4>
        <h5 class="card-title">SOFTWARE DEVELOPER</h5>
        <p class="card-text">Hey developers , we have 4 vacancies for the software developer position,we request 3 years of experience.</p>
        <p><b> CTC: 6-7.5LPA </b></p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Apply Now
</button>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ABC COMPANY</h4>
        <h5 class="card-title">BACKEND DEVELOPER</h5>
        <p class="card-text">Hi guys we have 1 vacancy for the backend developer position,need atleast 1 year of experience.</p>
        <p><b> CTC: 7-8.0LPA </b></p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Apply Now
</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Application Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="apply.php" method="POST">
          <div class="mb-3">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for </label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="qual" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="year" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="subnit" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="feed">
<center><a href="feedback.php"><button type="button" class="btn btn-outline-info btn-lg">GIVE FEEDBACK !!</button></a></center>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>student login form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
	/* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
    .form-horizontal .control-label{
        padding-top: 7px;
    }
	
</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>admin dashboard</legend>

<hr>
<h2 class="w3-center">development areas</h2>
<div class="w3-container">
<div class="w3-border">
<ul class="w3-navbar w3-light-grey">
  <li><a class="w3-btn testbtn" onclick="openCity(event, 'London')">event uploads</a></li>
  <li><a class="w3-btn testbtn" onclick="openCity(event, 'Paris')">gallery uploads</a></li>
  <li><a class="w3-btn testbtn" onclick="openCity(event, 'Tokyo')">update admin info</a></li>
</ul>

<div id="London" class="w3-container city w3-animate-opacity">
  <h2>event</h2>
  <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Event name">Event name</label>  
  <div class="col-md-4">
  <input id="Event name" name="Event name" type="text" placeholder="event" class="form-control input-md" required=""> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Event name">Event date</label>  
  <div class="col-md-4">
  <input type="date" name="bday" class="form-control" id="inputdate" placeholder="enter date">
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Event Blog</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
  </div>
</div>
<div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-success">Upload event</button>
				
            </div>
        </div>


</fieldset>
</form>
  
</div>

<div id="Paris" class="w3-container city w3-animate-opacity">
  <h2>gallery uploads</h2>
  <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="universityorder">university orders</label>
  <div class="col-md-4">
    <input id="universityorder" name="universityorder" class="input-file" type="file">
  </div>
</div>


<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="photo" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<div id="Tokyo" class="w3-container city w3-animate-opacity">
  <h2>INFO</h2>
  
</div>
</div>
</div>

<hr>


<script>
// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();
</script>
</body>
</html>

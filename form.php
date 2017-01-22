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
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body background="https://wallpaperscraft.com/image/glare_circles_shadow_background_faded_47617_3840x2160.jpg">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src=""https://code.jquery.com/jquery-3.1.0.min.js></script>
<img src="http://www.customercarenumber.co.in/wp-content/uploads/2013/12/CUSAT.jpg"  height="20px" length="20px" alt="" class="img-responsive center-block"  />
<div class="bs-example">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="inputname" class="control-label col-xs-2">Camper Name</label>
            <div class="col-xs-10">
                <input type="name" name="fname" class="form-control" id="inputname" placeholder="enter name">
            </div>
        </div>
        <div class="form-group">
            <label for="sex" class="control-label col-xs-2">Sex</label>
            <div class="col-xs-10">
                <input type="sex" name="lname" class="form-control" id="inputsex" placeholder="enter sex in M or F only">
            </div>
        </div>
		
       
		<div class="form-group">
            <label for="dateofbirth" class="control-label col-xs-2">date of birth</label>
            <div class="col-xs-10">
                <input type="date" name="bday" class="form-control" id="inputdate" placeholder="enter date">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-2" for="postalAddress">Address:</label>
            <div class="col-xs-10">
                <textarea rows="2" class="form-control" id="postalAddress" placeholder="Postal Address"></textarea>
            </div>
        </div>       
		<div class="form-group">
            <label for="phone" class="control-label col-xs-2">phone</label>
            <div class="col-xs-10">
                <input type="phone" class="form-control" id="inputphone" placeholder="enter phone">
            </div>
        </div>
		<div class="form-group">
            <label for="email" class="control-label col-xs-2">email</label>
            <div class="col-xs-10">
                <input type="email" class="form-control" id="inputemail" placeholder="enter email">
            </div>
        </div>
		<div class="form-group">
            <label for="blood group" class="control-label col-xs-2">blood group</label>
            <div class="col-xs-10">
                <input type="blood group" class="form-control" id="inputblood group" placeholder="enter blood group">
            </div>
        </div>
		<div class="form-group">
            <label for="emergency phone no" class="control-label col-xs-2">emergency phone</label>
            <div class="col-xs-10">
                <input type="emergency phone" class="form-control" id="inputemergency phone" placeholder="emergency phone">
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-xs-2" for="allergies if any">allergies if any</label>
            <div class="col-xs-10">
                <textarea rows="2" class="form-control" id="allergies if any" placeholder="allergies"></textarea>
            </div>
        </div>     
		
		 <div class="col-xs-12"><hr></div>
		 <br>
		 <div class="form-group">
            <label for="course" class="control-label col-xs-2">course</label>
            <div class="col-xs-10">
                <input type="course" class="form-control" id="inputcourse" placeholder="enter course">
            </div>
        </div>
		<div class="form-group">
            <label for="college" class="control-label col-xs-2">college</label>
            <div class="col-xs-10">
                <input type="college" class="form-control" id="inputcollege" placeholder="college">
            </div>
        </div>
		<div class="form-group">
            <label for="semester" class="control-label col-xs-2">semester</label>
            <div class="col-xs-10">
                <input type="semester" class="form-control" id="inputsemester" placeholder="enter in numeral">
            </div>
        </div>
		<div class="form-group">
            <label for="department" class="control-label col-xs-2">department</label>
            <div class="col-xs-10">
                <input type="department" class="form-control" id="inputdepartment" placeholder="department">
            </div>
        </div>
		<br>
		<div class="col-xs-12"><hr></div>
            <p>camper signature </p>
			
		<hr>
		
		<p>recommendation of registrar with priority no.</p> 
		<hr>
		<p>recommendation by principal/head of department.</p> 
		<hr>
		 <p>DIRECTOR,department youth welfare</p>
		 <p>seal</p>
			
		<hr>
		
		<div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <label class="checkbox-inline">
                    <input type="checkbox" value="agree"><em><ins>I have read and understand the rules and regulations of the event in page1.
					I assure the responsibility of my mental and physical fitness to participate in the "EVENT" and agree to abide by all the rules,regulations
					and requirements of the camp.I understand that I may be removed from the camp and no refund given if I am unable to comply 
					with the Camp rules.
                    I have read and understand all of the information herein and request to include myself to participate in the "EVENT",2016.<ins><em>
                </label>
            </div>
        </div>
		
		 
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-success">submit</button>
				
            </div>
        </div>
		<input type="button" value="print" onclick="window.print()">
    </form>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript"
		src="http://www.elisting.in/common/js/jquery.opacityrollover.js"></script>
	<script type="text/javascript"
		src="http://www.elisting.in/common/js/fancybox_2.1.5/jquery.fancybox.js?v=2.1.5"></script>
	<script src="http://www.elisting.in/common/js/bootstrap.min.js"></script>
	<script
		src="http://www.elisting.in/common/js/typeahead/typeahead.bundle.min.js"></script>

	<script src="http://www.elisting.in/common/js/scripts.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="http://www.elisting.in/common/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>                                 		
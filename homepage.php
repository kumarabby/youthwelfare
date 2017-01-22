
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>home page of youth welfare</title>
<link rel="stylesheet" type="style/text" href="sidebar.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- loginofhome added

<link rel="stylesheet" href="loginofhome.css">
<script src="loginofhome.js"></script>

<!--  eventlist added-->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<!------=================================-->
<link rel="stylesheet" href="eventlist.css">
<script src="eventlist.js"></script>
<!-- news page added--  -->
<link rel="stylesheet" href="news.css">
<script src="news.js"></script>
<!-- necesarry script files-->
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-transition.js"></script>
<script src="http://www.jqueryscript.net/demo/Responsive-jQuery-News-Ticker-Plugin-with-Bootstrap-3-Bootstrap-News-Box/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>      
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
	/* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
    .form-horizontal .control-label{
        padding-top: 7px;
    }
	.jumbotron{
     width:100%;
     height:10%;
	 alignment:center-block;

     }
	 .carousel-inner > .item > img,
 .carousel-inner > .item > a > img {
     width: 100%;
	 align:center;
     height: 450px !important;
	 width : 2000px !important;
	 
 }
        .carousel-indicators{
        bottom:0;
        }
        .carousel-indicators .active{
         background-color:#333;
        }
        .carousel-indicators li{
         border-color:#222;
        }
		.hs-marquee.grey {
    background-image: url('//cdn2.hubspot.net/hub/53/file-1627271036-jpg/assets/hubspot.com/home/bg-banner-2-75q.jpg?t=1474401680214');
    background-size: cover;
    background-position:  23%;
}

.hs-marquee.grey .page-header.section-header {
    border-top: none;
}

.hs-marquee.grey h1 a {
    color: #fff;
    text-shadow: none;
}
.footer{
      
}
#toTop{
    position: fixed;
	bottom: 10px;
	right: 10px;
	cursor: pointer;
	display: none;
}
/*
Ref:
Thanks to:
http://www.jqueryscript.net/layout/Simple-jQuery-Plugin-To-Create-Pinterest-Style-Grid-Layout-Pinterest-Grid.html
*/

body {
 background-color:#eee;   
}    

#pinBoot {
  position: relative;
  max-width: 100%;
  width: 100%;
}
img {
  width: 100%;
  max-width: 100%;
  height: auto;
}
.white-panel {
  position: absolute;
  background: white;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  padding: 10px;
}
/*
stylize any heading tags withing white-panel below
*/

.white-panel h1 {
  font-size: 1em;
}
.white-panel h1 a {
  color: #A92733;
}
.white-panel:hover {
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
  margin-top: -5px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
	
  
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
<script type="text/javascript">
$(document).ready(function(){
      $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
        $(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		}); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1500);
        return false;
    });
});

$(document).ready(function(){ 
    $("#myTab li:eq(1) a").tab('show');
});
$(document).ready(function() {
$('#pinBoot').pinterest_grid({
no_columns: 4,
padding_x: 10,
padding_y: 10,
margin_bottom: 50,
single_column_breakpoint: 700
});
});

/*
Ref:
Thanks to:
http://www.jqueryscript.net/layout/Simple-jQuery-Plugin-To-Create-Pinterest-Style-Grid-Layout-Pinterest-Grid.html
*/


/*
    Pinterest Grid Plugin
    Copyright 2014 Mediademons
    @author smm 16/04/2014

    usage:

     $(document).ready(function() {

        $('#blog-landing').pinterest_grid({
            no_columns: 4
        });

    });


*/
;(function ($, window, document, undefined) {
    var pluginName = 'pinterest_grid',
        defaults = {
            padding_x: 10,
            padding_y: 10,
            no_columns: 3,
            margin_bottom: 50,
            single_column_breakpoint: 700
        },
        columns,
        $article,
        article_width;

    function Plugin(element, options) {
        this.element = element;
        this.options = $.extend({}, defaults, options) ;
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype.init = function () {
        var self = this,
            resize_finish;

        $(window).resize(function() {
            clearTimeout(resize_finish);
            resize_finish = setTimeout( function () {
                self.make_layout_change(self);
            }, 11);
        });

        self.make_layout_change(self);

        setTimeout(function() {
            $(window).resize();
        }, 500);
    };

    Plugin.prototype.calculate = function (single_column_mode) {
        var self = this,
            tallest = 0,
            row = 0,
            $container = $(this.element),
            container_width = $container.width();
            $article = $(this.element).children();

        if(single_column_mode === true) {
            article_width = $container.width() - self.options.padding_x;
        } else {
            article_width = ($container.width() - self.options.padding_x * self.options.no_columns) / self.options.no_columns;
        }

        $article.each(function() {
            $(this).css('width', article_width);
        });

        columns = self.options.no_columns;

        $article.each(function(index) {
            var current_column,
                left_out = 0,
                top = 0,
                $this = $(this),
                prevAll = $this.prevAll(),
                tallest = 0;

            if(single_column_mode === false) {
                current_column = (index % columns);
            } else {
                current_column = 0;
            }

            for(var t = 0; t < columns; t++) {
                $this.removeClass('c'+t);
            }

            if(index % columns === 0) {
                row++;
            }

            $this.addClass('c' + current_column);
            $this.addClass('r' + row);

            prevAll.each(function(index) {
                if($(this).hasClass('c' + current_column)) {
                    top += $(this).outerHeight() + self.options.padding_y;
                }
            });

            if(single_column_mode === true) {
                left_out = 0;
            } else {
                left_out = (index % columns) * (article_width + self.options.padding_x);
            }

            $this.css({
                'left': left_out,
                'top' : top
            });
        });

        this.tallest($container);
        $(window).resize();
    };

    Plugin.prototype.tallest = function (_container) {
        var column_heights = [],
            largest = 0;

        for(var z = 0; z < columns; z++) {
            var temp_height = 0;
            _container.find('.c'+z).each(function() {
                temp_height += $(this).outerHeight();
            });
            column_heights[z] = temp_height;
        }

        largest = Math.max.apply(Math, column_heights);
        _container.css('height', largest + (this.options.padding_y + this.options.margin_bottom));
    };

    Plugin.prototype.make_layout_change = function (_self) {
        if($(window).width() < _self.options.single_column_breakpoint) {
            _self.calculate(true);
        } else {
            _self.calculate(false);
        }
    };

    $.fn[pluginName] = function (options) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName,
                new Plugin(this, options));
            }
        });
    }

})(jQuery, window, document);
</script>
<style type="text/css">
	.bs-example{
		margin: 20px;
	}
</style>
<style>
footer{
	background: #333;
	color:#fff;
	font-size: llpx;
	padding: 20px;
	
}


	 </style>
	 <!--===============================================courasel slides css====================-->
	   <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body background="http://cdn.wallpapersafari.com/92/40/XGcTLJ.jpg">
<!-- Latest compile1d and minified JavaScript -->
<script src=""https://code.jquery.com/jquery-3.1.0.min.js></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!--   navbar of youth wefare
                             -->
							 
							 
<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="file:///C:/Users/Lenovo/Documents/home.php">Youth welfare Department</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="file:///C:/Users/Lenovo/Documents/home.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
                  <ul class="dropdown-menu" id="dropdown2" class="tab-pane fade">
                    <li><a href="file:///C:/Users/Lenovo/Documents/gallery.php">Photo Gallery</a></li>
					</ul>
					</li>
					
                <li><a href="file:///C:/Users/Lenovo/Documents/form.php">Form</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us<span class="caret"></span></a>
                  <ul class="dropdown-menu" id="dropdown2" class="tab-pane fade">
                    <li><a href="#">Phone no</a></li>
                    <li><a href="#">Address</a></li>
                    <li><a href="#">Opening Hours</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">1800-233-4455</a></li>
                    <li><a href="#">student amenity center</a></li>
					<li><a href="#">8:00am-6:00pm</a></li>
                  </ul>
				  
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">E@mail</a></li>
                    <li><a href="#">Facebook link</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav for</li>
                    <li><a href="#">xyz@gmail.com</a></li>
                    <li><a href="#">url:http://sskhsa.com</a></li>
                  </ul>
				  
                </li>
				 <li><a href="file:///C:/Users/Lenovo/Documents/html%20doc/blogpage.php" >Blog Info</a></li>
				  <li><a href="file:///C:/Users/Lenovo/Documents/html%20doc/loginofhome.php?" >Admin login</a></li>
				  
              </ul>
            </div>
          </div>
        </nav>
		
      </div>
    </div>
    <!-- Carousel
    ================================================== -->
	<div class ="container">
	<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12 banpic">
	 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="http://www.cusatxpress.com/wp-content/uploads/2016/10/received_1209027712504861-e1476252996512.jpeg" 
		  class="media-object" style="width:2000px" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p> on.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="https://wallpaperscraft.com/image/body_of_water_planet_horizon_92570_1366x768.jpg" style ="width:136px; height:768px;" align="center" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="http://4.bp.blogspot.com/_fan7XO0mJo8/TAzLQGWpTVI/AAAAAAAACbM/VArmC533Mjs/s1600/P1130663-3648.jpg"style ="width:136px; height:768px;"  alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="file:///C:/Users/Lenovo/Documents/gallery.php" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>	  
	  
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
	   
  
    </div><!-- /.carousel -->
	 <!-- event list    
	  by admin
    ================================================== -->
	</div>
	</div>
	<div class="col-xs-12"><hr></div>
	    <div class="container-fluid">
        <div id="sortableKanbanBoards" class="row">

            <!--sütun başlangıç-->
			
           <div class="panel panel-primary kanban-col" style="margin-right:100px;" >
                <div class="panel-heading" >
                    UNIVERSITY ORDERS
                    <i class="fa fa-2x fa-plus-circle pull-right"></i>
                </div>
                <div class="panel-body">
                    <div id="TODO" class="kanban-centered">

                        <article class="kanban-entry grab" id="item1" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2><a href="http://www.cusat.ac.in/examinations/notifications/exam_notif_145.pdf"></a>pdf link1<span>poste</span></h2>
                                    <p></p>
                                </div>
                            </div>
                        </article>

                        <article class="kanban-entry grab" id="item2" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2><a href="#"></a></h2>
                                    <p> <strong></strong> </p>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
               
            </div>
			<br>
			<br>
			<br>
            <!--sütun bitiş-->
            <!--sütun başlangıç-->
            <div class="panel panel-primary kanban-col" style="margin-right:100px;"  >
                <div class="panel-heading">
                    EVENT GOING ON
                    <i class="fa fa-2x fa-plus-circle pull-right"></i>
                </div>
                <div class="panel-body" >
                    <div id="DOING" class="kanban-centered">

                        <article class="kanban-entry grab" id="item5" draggable="true">
                            <div class="kanban-entry-inner">

                                <div class="kanban-label">
                                    <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                </div>
                            </div>
                        </article>

                        <article class="kanban-entry grab" id="item6" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2><a href="#">Job Meeting</a></h2>
                                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
                <div class="panel-footer">
                </div>
            </div>
            <!--sütun bitiş-->
            <!--sütun başlangıç-->
            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    PAST EVENT
                    <i class="fa fa-2x fa-plus-circle pull-right"></i>
                </div>
                <div class="panel-body">
                    <div id="DONE" class="kanban-centered">

                        <article class="kanban-entry grab" id="item5" draggable="true">
                            <div class="kanban-entry-inner">

                                <div class="kanban-label">
                                    <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise.
									Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                </div>
                            </div>
                        </article>

                        <article class="kanban-entry grab" id="item6" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                    <h2><a href="#">Job Meeting</a></h2>
                                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
              
            </div>
			</table>
            <!--sütun bitiş-->


        </div>
    </div>


    <!-- Static Modal -->
    <div class="modal modal-static fade" id="processing-modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-refresh fa-5x fa-spin"></i>
                        <h4>Processing...</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="col-xs-12"><hr></div>
	<br>
	<br>
	
<!-- news box --> 
<h2 class="w3-center">gallery</h2>
<div class="w3-content" style="max-width:800px;position:relative">

<img class="mySlides w3-animate-opacity" src="https://pbs.twimg.com/media/CMIqq0WWcAAVgsQ.jpg" style="width:100%" "height:360px !important;">
<img class="mySlides w3-animate-opacity" src="https://pbs.twimg.com/media/Cf24FqAXEAA1ANu.jpg" style="width:100%" "height:360px !important;">
<img class="mySlides w3-animate-opacity" src="https://assets.ello.co/uploads/asset/attachment/4243230/ello-hdpi-0dd5c29c.jpg" style="width:100%" "height:360px !important;">
<img class="mySlides w3-animate-opacity" src="https://pbs.twimg.com/media/CMIqq0WWcAAVgsQ.jpg" style="width :100%" "height:360px !important;">

<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">❯</a>
</div>
<hr>
<!-- Third Grid: Swing By & Contact -->
<div class="w3-row" id="contact">
  <div class="w3-half w3-dark-grey w3-container w3-center" style="height:550px">
    <div class="w3-padding-64">
      <h1>About us</h1>
    </div>
    <div class="w3-padding-64">
      <p>"The Youth represent the hope and future of a country. They have a vital role to </p>
	 <p> play with regard for fostering and strengthening of social </p>
	 <p> consciousness against all social evils and lead the country to unity and prosperity"</p>
        <i class="fa fa-map-marker" style="width:30px"></i> cochin university,cochin-22<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
    </div>
  </div>
  <div class="w3-half w3-teal w3-container" style="height:550px">
    <div class="w3-padding-64 w3-padding-xxlarge">
      <h1>Contact</h1>
      <p class="w3-opacity">GET IN TOUCH</p>
      <form class="w3-container w3-card-2 w3-padding-32 w3-white" action="form.asp" target="_blank">
        <div class="w3-group">
          <label>Name</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Name">
        </div>
        <div class="w3-group">
          <label>Email</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Email">
        </div>
        <div class="w3-group">
          <label>Message</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Message">
        </div>
        <button type="submit" class="w3-btn w3-padding w3-right">Send</button>
      </form>
    </div>
  </div>
</div>


<div class="container">

    <!-- Marketing messaging and featurettes
    ================================================== -->
		 <hr>
      <!-- FOOTER -->
      <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>REACHING US</h3>
      <p>phone no:1800 896 7865 </p>
	  <p>address:cochin university,cochin-22</p>
	  <p>opening hours: 8:00am-6:00pm</p>
    </div>
  
    <div class="w3-third">
      <h3>chekinnn!</h3>
      <ul class="w3-ul w3-hoverable">
         <li class="w3-padding-16">
          <img src="http://www.homeobook.com/wp-content/uploads/2013/08/kerala.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">government of kerala</span><br>
          <span><a href="https://kerala.gov.in/">keralagovt.</a></span>
        </li>
        <li class="w3-padding-16">
          <img src="http://bobpigo.org/uploaded/partners/Cochin%20University%20Logo.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">cochin university</span><br>
          <span><a href="http://www.cusat.ac.in/">cochin university.ac.in</a></span>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">HOME</span>
		<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">GALLERY</span>
		<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">FORM</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">BLOGS</span> 
		<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">NEWS</span>
		<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">ABOUT US</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">CONTACT US</span>
      </p>
    </div>
  
		
  <i class="fa fa-facebook-official w3-hover-text-indigo w3-large"></i>
  <i class="fa fa-instagram w3-hover-text-purple w3-large"></i>
  <i class="fa fa-snapchat w3-hover-text-yellow w3-large"></i>
  <i class="fa fa-pinterest-p w3-hover-text-red w3-large"></i>
  <i class="fa fa-twitter w3-hover-text-light-blue w3-large"></i>
  <i class="fa fa-linkedin w3-hover-text-indigo w3-large"></i>
 
		</div>
      </footer>
<script type="text/javascript">

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
slideIndex = slideIndex + n;
showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

showDivs(1);
</script>
              

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
<!DOCTYPE html>
<html>
<head>
 <script src="http://code.jquery.com/jquery.min.js"></script>
 <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
 <script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>
 <meta charset=utf-8 />
 <title>JS Bin</title>
 <style>
 /* adjust body when menu is open */
body.slide-active {
    overflow-x: hidden
}
/*first child of #page-content so it doesn't shift around*/
.no-margin-top {
    margin-top: 0px!important
}
/*wrap the entire page content but not nav inside this div if not a fixed top, don't add any top padding */
#page-content {
    position: relative;
    padding-top: 70px;
    left: 0;
}
#page-content.slide-active {
    padding-top: 0
}
/* put toggle bars on the left :: not using button */
#slide-nav .navbar-toggle {
    cursor: pointer;
    position: relative;
    line-height: 0;
    float: left;
    margin: 0;
    width: 30px;
    height: 40px;
    padding: 10px 0 0 0;
    border: 0;
    background: transparent;
}
/* icon bar prettyup - optional */
#slide-nav .navbar-toggle > .icon-bar {
    width: 100%;
    display: block;
    height: 3px;
    margin: 5px 0 0 0;
}
#slide-nav .navbar-toggle.slide-active .icon-bar {
    background: orange
}
.navbar-header {
    position: relative
}
/* un fix the navbar when active so that all the menu items are accessible */
.navbar.navbar-fixed-top.slide-active {
    position: relative
}
/* screw writing importants and shit, just stick it in max width since these classes are not shared between sizes */
@media (max-width:767px) { 
	#slide-nav .container {
	    margin: 0;
	    padding: 0!important;
	}
	#slide-nav .navbar-header {
	    margin: 0 auto;
	    padding: 0 15px;
	}
	#slide-nav .navbar.slide-active {
	    position: absolute;
	    width: 80%;
	    top: -1px;
	    z-index: 1000;
	}
	#slide-nav #slidemenu {
	    background: #f7f7f7;
	    left: -100%;
	    width: 80%;
	    min-width: 0;
	    position: absolute;
	    padding-left: 0;
	    z-index: 2;
	    top: -8px;
	    margin: 0;
	}
	#slide-nav #slidemenu .navbar-nav {
	    min-width: 0;
	    width: 100%;
	    margin: 0;
	}
	#slide-nav #slidemenu .navbar-nav .dropdown-menu li a {
	    min-width: 0;
	    width: 80%;
	    white-space: normal;
	}
	#slide-nav {
	    border-top: 0
	}
	#slide-nav.navbar-inverse #slidemenu {
	    background: #333
	}
	/* this is behind the navigation but the navigation is not inside it so that the navigation is accessible and scrolls*/
	#slide-nav #navbar-height-col {
	    position: fixed;
	    top: 0;
	    height: 100%;
	    width: 80%;
	    left: -80%;
	    background: #eee;
	}
	#slide-nav.navbar-inverse #navbar-height-col {
	    background: #333;
	    z-index: 1;
	    border: 0;
	}
	#slide-nav .navbar-form {
	    width: 100%;
	    margin: 8px 0;
	    text-align: center;
	    overflow: hidden;
	    /*fast clearfixer*/
	}
	#slide-nav .navbar-form .form-control {
	    text-align: center
	}
	#slide-nav .navbar-form .btn {
	    width: 100%
	}
}
@media (min-width:768px) { 
	#page-content {
	    left: 0!important
	}
	.navbar.navbar-fixed-top.slide-active {
	    position: fixed
	}
	.navbar-header {
	    left: 0!important
	}
}

 </style>
 <script>
 $(document).ready(function () {


    //stick in the fixed 100% height behind the navbar but don't wrap it
    $('#slide-nav.navbar .container').append($('<div id="navbar-height-col"></div>'));

    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = '#page-content';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '80%';
    var menuneg = '-100%';
    var slideneg = '-80%';


    $("#slide-nav").on("click", toggler, function (e) {

        var selected = $(this).hasClass('slide-active');

        $('#slidemenu').stop().animate({
            left: selected ? menuneg : '0px'
        });

        $('#navbar-height-col').stop().animate({
            left: selected ? slideneg : '0px'
        });

        $(pagewrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });

        $(navigationwrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });


        $(this).toggleClass('slide-active', !selected);
        $('#slidemenu').toggleClass('slide-active');


        $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');


    });


    var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';


    $(window).on("resize", function () {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }


    });




});
 </script>
</head>
<body>
  
  
 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="slide-nav">
  <div class="container">
   <div class="navbar-header">
    <a class="navbar-toggle"> 
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </a>
    <a class="navbar-brand" href="#">Project name</a>
   </div>
   <div id="slidemenu">
     
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="search" placeholder="search" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
     
    <ul class="nav navbar-nav">
     <li class="active"><a href="#">Home</a></li>
     <li><a href="#about">About</a></li>
     <li><a href="#contact">Contact</a></li>
     <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
      <ul class="dropdown-menu">
       <li><a href="#">Action</a></li>
       <li><a href="#">Another action</a></li>
       <li><a href="#">Something else here</a></li>
       <li class="divider"></li>
       <li class="dropdown-header">Nav header</li>
       <li><a href="#">Separated link</a></li>
       <li><a href="#">One more separated link</a></li>
       <li><a href="#">Action</a></li>
       <li><a href="#">Another action</a></li>
       <li><a href="#">Something else here</a></li>
       <li class="divider"></li>
       <li class="dropdown-header">Nav header</li>
       <li><a href="#">Separated link</a></li>
       <li><a href="#">One more separated link</a></li>
       <li><a href="#">Action</a></li>
       <li><a href="#">Another action</a></li>
       <li><a href="#">Something else here</a></li>
       <li class="divider"></li>
       <li class="dropdown-header">Nav header</li>
       <li><a href="#">Separated link test long title goes here</a></li>
       <li><a href="#">One more separated link</a></li>
      </ul>
     </li>
    </ul>
          
   </div>
  </div>
 </div>
  
  
  <!--wrap the page content do not style this-->
 <div id="page-content">
   
  <div class="container" >
    <h1 class="no-margin-top">Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>
    
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>

    
    
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>

    
    
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>

    
    
    
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>

    
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>

    
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>

    
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>

    
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>

    
    
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>

    
    
   </div>
  <!-- /.container -->
  
 </div>
 <!-- /#page-content -->

</body>
</html>
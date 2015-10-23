<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   <!--<link href="jsku/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="backTop.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="jsku/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="media/css/dataTables.bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="media/css/responsive.bootstrap.css">
     <link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="media/css/responsive.datatables.css"> 
	
	
   <!-- <link rel="stylesheet" type="text/css" href="examples/resources/syntax/shCore.css">-->
	<!--<link rel="stylesheet" type="text/css" href="examples/resources/demo.css">-->
	<!--<link rel="stylesheet" type="text/css" href="../resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="../resources/demo.css">-->
	<style type="text/css" class="init">

	</style>
	
<style>

input[type=text] {
    /*background: linear-gradient(to bottom, #0088CC, #0044CC);
    border: 1px solid #0088CC;
    color: #FFF;
   */ margin: 4px 0px;
  /*  padding: 5px;*/
   /* width: 100px;*/
}

.navbar-default {
  background-color: #190e8f;
  border-color: #4637ef;
}
.navbar-default .navbar-brand {
  color: #ecf0f1;
}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
  color: #ecdbff;
}
.navbar-default .navbar-text {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
  color: #ecdbff;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
  color: #ecdbff;
  background-color: #4637ef;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
  color: #ecdbff;
  background-color: #4637ef;
}
.navbar-default .navbar-toggle {
  border-color: #4637ef;
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
  background-color: #4637ef;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ecf0f1;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #ecf0f1;
}
.navbar-default .navbar-link {
  color: #ecf0f1;
}
.navbar-default .navbar-link:hover {
  color: #ecdbff;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #ecf0f1;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ecdbff;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ecdbff;
    background-color: #4637ef;
  }
}

.col-centered{
float: none;
margin: 0 auto;
}



.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;
}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
	background-color: #ddd;
	border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #fff;
	border-color: #ddd;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;   
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}
/********************************************************************/
/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs > li > a,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
}
.with-nav-tabs.panel-primary .nav-tabs > .open > a,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
	color: #fff;
	background-color: #3071a9;
	border-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
	color: #428bca;
	background-color: #fff;
	border-color: #428bca;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #428bca;
    border-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #fff;   
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    background-color: #4a9fe9;
}
/********************************************************************/
/*** PANEL SUCCESS ***/
.with-nav-tabs.panel-success .nav-tabs > li > a,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
}
.with-nav-tabs.panel-success .nav-tabs > .open > a,
.with-nav-tabs.panel-success .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-success .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
	background-color: #d6e9c6;
	border-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.active > a,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:focus {
	color: #3c763d;
	background-color: #fff;
	border-color: #d6e9c6;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #3c763d;   
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #3c763d;
}
/********************************************************************/
/*** PANEL INFO ***/
.with-nav-tabs.panel-info .nav-tabs > li > a,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
}
.with-nav-tabs.panel-info .nav-tabs > .open > a,
.with-nav-tabs.panel-info .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-info .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
	background-color: #bce8f1;
	border-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.active > a,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:focus {
	color: #31708f;
	background-color: #fff;
	border-color: #bce8f1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #31708f;   
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #31708f;
}
/********************************************************************/
/*** PANEL WARNING ***/
.with-nav-tabs.panel-warning .nav-tabs > li > a,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
}
.with-nav-tabs.panel-warning .nav-tabs > .open > a,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
	background-color: #faebcc;
	border-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:focus {
	color: #8a6d3b;
	background-color: #fff;
	border-color: #faebcc;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #fcf8e3;
    border-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #8a6d3b; 
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #8a6d3b;
}
/********************************************************************/
/*** PANEL DANGER ***/
.with-nav-tabs.panel-danger .nav-tabs > li > a,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
}
.with-nav-tabs.panel-danger .nav-tabs > .open > a,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
	background-color: #ebccd1;
	border-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:focus {
	color: #a94442;
	background-color: #fff;
	border-color: #ebccd1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f2dede; /* bg color */
    border-color: #ebccd1; /* border color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #a94442; /* normal text color */  
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ebccd1; /* hover bg color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff; /* active text color */
    background-color: #a94442; /* active bg color */
}



</style>



<style>

.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;
}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
	background-color: #ddd;
	border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #fff;
	border-color: #ddd;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;   
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}
/********************************************************************/
/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs > li > a,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
}
.with-nav-tabs.panel-primary .nav-tabs > .open > a,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
	color: #fff;
	background-color: #3071a9;
	border-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
	color: #428bca;
	background-color: #fff;
	border-color: #428bca;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #428bca;
    border-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #fff;   
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    background-color: #4a9fe9;
}
/********************************************************************/
/*** PANEL SUCCESS ***/
.with-nav-tabs.panel-success .nav-tabs > li > a,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
}
.with-nav-tabs.panel-success .nav-tabs > .open > a,
.with-nav-tabs.panel-success .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-success .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
	background-color: #d6e9c6;
	border-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.active > a,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:focus {
	color: #3c763d;
	background-color: #fff;
	border-color: #d6e9c6;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #3c763d;   
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #3c763d;
}
/********************************************************************/
/*** PANEL INFO ***/
.with-nav-tabs.panel-info .nav-tabs > li > a,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
}
.with-nav-tabs.panel-info .nav-tabs > .open > a,
.with-nav-tabs.panel-info .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-info .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
	background-color: #bce8f1;
	border-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.active > a,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:focus {
	color: #31708f;
	background-color: #fff;
	border-color: #bce8f1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #31708f;   
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #31708f;
}
/********************************************************************/
/*** PANEL WARNING ***/
.with-nav-tabs.panel-warning .nav-tabs > li > a,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
}
.with-nav-tabs.panel-warning .nav-tabs > .open > a,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
	background-color: #faebcc;
	border-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:focus {
	color: #8a6d3b;
	background-color: #fff;
	border-color: #faebcc;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #fcf8e3;
    border-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #8a6d3b; 
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #8a6d3b;
}
/********************************************************************/
/*** PANEL DANGER ***/
.with-nav-tabs.panel-danger .nav-tabs > li > a,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
}
.with-nav-tabs.panel-danger .nav-tabs > .open > a,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
	background-color: #ebccd1;
	border-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:focus {
	color: #a94442;
	background-color: #fff;
	border-color: #ebccd1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f2dede; /* bg color */
    border-color: #ebccd1; /* border color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #a94442; /* normal text color */  
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ebccd1; /* hover bg color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff; /* active text color */
    background-color: #a94442; /* active bg color */
}

@media screen and (max-width: 768px) {
 .sepasi2 {
display: none !important;
visibility: hidden !important; 
}	
}
</style>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<input type='hidden' id='current_page' />
	<input type='hidden' id='show_per_page' />
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Company Profile</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           <!-- <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>-->
            <li class="dropdown">
             <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
             <!-- <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>-->
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <!--  <li><a href="../navbar/">Lihat Data</a></li>-->
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lihat Data <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="report_cp.php">Action</a></li>
               <!-- <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>-->
              </ul>
            </li>
          <!--  <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- /container -->
<div class="container">

 
  <!--<div class="col-lg-12">-->
   <?php 
   include "koneksi.php";
    $sql = "select * from comp_pro";
	$tam = mysql_query($sql);
	//$statemen = mysql_query($query);
	$no = 1;
	echo "<div align='center'><strong>COMPANY PROFILE</strong></div>
	<table id='example' class='table table-striped table-bordered dt-responsive nowrap' cellspacing='0' width='100%'>";
	echo "<thead>
        <tr>
            <th>No</th>
            <th>Supplier Name</th>
            <th>Address</th>
            <th class='never'>Address 2</th>
			<th >Village/town/district</th>
			<th class='none'>City/province/state</th>
			<th class='none'>Country</th>
			<th class='none'>Postal code</th>
			<th class='none'>Contact name/ title</th>
			<th class='none'>Contact phone</th>
			<th class='none'>Contact fax</th>
			
			<th class='none'>Email address</th>
			<th class='none'>Official websites</th>
			<th class='none'>Owner name</th>
			<th class='none'>Business licence no.</th>
			<th class='none'>Export licence n0.</th>
			<th class='none'>Import licence no.</th>
			<th class='none'>Year established</th>
		   
        </tr>
    </thead><tbody>";
 
while	($hasil = mysql_fetch_array($tam))
{
	$ok = $hasil['SUPPLIER1'];
	$idne = $hasil['ID'];
echo "
        <tr>
            <td>$no</td>
            <td><a href='#' data-toggle='modal' data-target='.pop-up-$no' > $ok</a></td>
            <td>$hasil[ADDRESS11]</td>
			<td>$hasil[ADDRESS21]</td>
			<td>$hasil[VILLAGE1]</td>
			<td>$hasil[CITY1]</td>
			<td>$hasil[COUNTRY1]</td>
			<td>$hasil[POSTAL_CODE1]</td>
			<td>$hasil[CONTACT_NAME1]</td>
			<td>$hasil[CONTACT_PHONE1]</td>
			<td>$hasil[CONTACT_FAX1]</td>
			
			<td>$hasil[EMAIL1]</td>
			<td>$hasil[OFFICIAL1]</td>
			<td>$hasil[OWNER1]</td>
			<td>$hasil[BUSINESS1]</td>
			<td>$hasil[EXPORT1]</td>
			<td>$hasil[IMPORT1]</td>
			<td>$hasil[YEAR_ESTABLISHED1]</td>
			
			</tr>";	
			
			echo "
			<div class='modal fade pop-up-$no' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel-4' aria-hidden='true'>
    <div class='modal-dialog modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>CLOSE</button>
         <br>
        </div>
        
        <div class='modal-body'>
        <H4>$ok</H4>
		
		<a href='report_cp.php?ID=$idne' class='list-group-item' id='xxxxx'><span class='glyphicon glyphicon-print'></span> &nbsp; PRINT</a>
		
		<a href='kunjungan.php' class='list-group-item' id='xxxxx'><span class='glyphicon glyphicon-edit'></span> &nbsp; EDIT</a>
		
		<a onclick='return follow(this);' href='delete.php?ID=$idne' class='list-group-item' id='delku'><span class='glyphicon glyphicon-remove'></span> &nbsp; DELETE</a>
				
        </div>
                
      </div>
    </div>
  </div>
			";
			
$no ++;

} 
echo "</tbody></table>";  
   ?>
    
  <!-- <tr><td>oko</td><td>gdiugtyfeiu</td><td>gdiugtyfeiu</td><td>gdiugtyfeiu</td><td>gdiugtyfeiu</td></tr>
   <tr><td>oko</td><td>gdiugtyfeiu</td><td>gdiugtyfeiu</td><td>gdiugtyfeiu</td><td>gdiugtyfeiu</td></tr>
   <tr><td>oko</td><td>gdiugtyfeiu</td><td>gdiugtyfeiu</td><td>gdiugtyfeiu</td><td>gdiugtyfeiu</td></tr>-->
   
   

<!-- </div> -->
<br>
</div>

</div><!-- container akhir -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  <script type="text/javascript" language="javascript" src="jsku/jquery.js"></script>
  <script src="jsku/bootstrap.js"></script>
  
  <script type="text/javascript" src="jsku/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="jsku/jquery.backTop.js"></script>
  
  
	<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
    
	<!-- <script type="text/javascript" language="javascript" src="media/js/dataTables.bootstrap.js"></script> -->
	<script type="text/javascript" language="javascript" src="media/js/dataTables.responsive.js"></script>
   
   <!-- <script type="text/javascript" language="javascript" src="examples/resources/syntax/shCore.js"></script>-->
   <!--<script type="text/javascript" language="javascript" src="examples/resources/demo.js"></script>-->
	<!--<script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="../resources/demo.js"></script>-->
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script>
  $(document).ready(function(){
	 // $('#example').DataTable();
	   $('[data-toggle="tooltip"]').tooltip();
 $('#example').DataTable( {
   responsive: true
	
} );
 
  $("#su").live("click",function(){
	 
	  //alert("dgdghdhger");
    $("#OKE").addClass("active");
	$("#PO").removeClass("active");
}); 
 $("#su2").live("click",function(){

    $("#OKE3").addClass("active");
	$("#PO").removeClass("active");
	$("#OKE").removeClass("active");
	
}); 
$("#su3").live("click",function(){
	 
	  //alert("dgdghdhger");
    $("#OKE4").addClass("active");
	$("#OKE2").removeClass("active");
	$("#OKE3").removeClass("active");

});
$("#su4").live("click",function(){
    $("#OKE5").addClass("active");
	$("#OKE4").removeClass("active");
	
	
});
 
	   $('#su').backTop({
                    'position' : 100,
                    'speed' :300,
                    'color' : 'red',
                });
				  $('#su2').backTop({
                    'position' : 100,
                    'speed' :300,
                    'color' : 'red',
                });
				 $('#su3').backTop({
                    'position' : 100,
                    'speed' :300,
                    'color' : 'red',
                });
				 $('#su4').backTop({
                    'position' : 100,
                    'speed' :300,
                    'color' : 'red',
                });
				
		 });
		 
 
		 
	
	
	
	
	   // $("#NOPP1A").hide();
		//$("#NOPP1").keyup(function(){
			//var yyy1=$(".NOPP1").val();
			//$("#tampil").val(data);
			
			//$(document).on("focusout","td.edit input",function(){
   // alert("finally bye");
//});
			//$("#NOPP1").focusout(function() {
			//	var yyy1=$("#NOPP1").val();
			//	var yyy1a=$("#NOPP1A").val();
            // if (yyy1 != ""){
			//    alert("Precentage of total harus diisi!");
			// $("#NOPP1A").focus();
			//   }			   
          //  });
			 
	
	
	// $('#SAVE').on('click',function(){
//        if (confirm("Are you sure?")) {
//        // your deletion code
//    }
//    return false;
//	  // alert("herduyheuye");
//      });
	//how much items per page to show
	
	//how much items per page to show


  </script><script>
  $(document).ready(function(){
	 // $('#example').DataTable();
	   $('[data-toggle="tooltip"]').tooltip();
 $('#example').DataTable( {
   responsive: true
	
} );
 
  $("#su").live("click",function(){
	 
	  //alert("dgdghdhger");
    $("#OKE").addClass("active");
	$("#PO").removeClass("active");
}); 
 $("#su2").live("click",function(){

    $("#OKE3").addClass("active");
	$("#PO").removeClass("active");
	$("#OKE").removeClass("active");
	
}); 
$("#su3").live("click",function(){
	 
	  //alert("dgdghdhger");
    $("#OKE4").addClass("active");
	$("#OKE2").removeClass("active");
	$("#OKE3").removeClass("active");

});
$("#su4").live("click",function(){
    $("#OKE5").addClass("active");
	$("#OKE4").removeClass("active");
	
	
});
 
	   $('#su').backTop({
                    'position' : 100,
                    'speed' :300,
                    'color' : 'red',
                });
				  $('#su2').backTop({
                    'position' : 100,
                    'speed' :300,
                    'color' : 'red',
                });
				 $('#su3').backTop({
                    'position' : 100,
                    'speed' :300,
                    'color' : 'red',
                });
				 $('#su4').backTop({
                    'position' : 100,
                    'speed' :300,
                    'color' : 'red',
                });
				
		 });
		 
		 
 
		 
 //$("#//	if (confirm('Apakah anda ingin menghapus data ini?')) {
  // alert ('ok');
//  window.location.href = "delete.php?ID=";
//} else {
    // Do nothing!
//}
	
//});		
	   // $("#NOPP1A").hide();
		//$("#NOPP1").keyup(function(){
			//var yyy1=$(".NOPP1").val();
			//$("#tampil").val(data);
			
			//$(document).on("focusout","td.edit input",function(){
   // alert("finally bye");
//});
			//$("#NOPP1").focusout(function() {
			//	var yyy1=$("#NOPP1").val();
			//	var yyy1a=$("#NOPP1A").val();
            // if (yyy1 != ""){
			//    alert("Precentage of total harus diisi!");
			// $("#NOPP1A").focus();
			//   }			   
          //  });
			 
	
	
	// $('#SAVE').on('click',function(){
//        if (confirm("Are you sure?")) {
//        // your deletion code
//    }
//    return false;
//	  // alert("herduyheuye");
//      });
	//how much items per page to show
	
	//how much items per page to show


  </script></body>
</html>

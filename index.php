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
    <link href="jsku/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="backTop.css" rel="stylesheet" type="text/css" />
    <link href="custom.css" rel="stylesheet" type="text/css" />
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
                <li><a href="data.php">Data Company</a></li>
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
    
    
<form   id="FORM" method="post" action="save.php">
<div class="container">
<div class="row">
<div class="col-lg-16">
<div class="container">

 <div class="panel with-nav-tabs panel-info" id="top">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li id="PO" class="active"><a href="#tab1info" data-toggle="tab"><strong>SUPPLIER PROFILE</strong></a></li>
                            <li id="OKE"><a href="#tab2info" data-toggle="tab"><strong>PRODUCT PROFILE</strong></a></li>
                            <li id="OKE3"><a href="#tab3info" data-toggle="tab"><strong>MARKET PROFILE</strong></a></li>
                            <li id="OKE4"><a href="#tab3xinfo" data-toggle="tab"><strong>MANUFACTURER PROFILE</strong></a></li>
                            <li id="OKE5"><a href="#tab4info" data-toggle="tab"><strong>COMMERCIAL TERM</strong></a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                    
                        <div class="tab-pane fade in active" id="tab1info">
                        
       <!--<div class="form-group">     
        <div class="col-lg-12" align="center">
          <strong><div class="thumbnail">SUPPLIER PROFILE | SUPPLIER INFORMATION AND OVERVIEW</div></strong>       
        </div>      
    </div>-->
    
     <div class="form-group">   
               <div class="col-lg-12 thumbnail"  style="background-color:#FFBFAA"; >
          <strong>SUPPLIER INFORMATION AND OVERVIEW</strong>       
        </div></div>
   
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Supplier name</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y1" name="Y1" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="email" class="col-lg-4 control-label">Address</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y2" name="Y2" placeholder="" value="">
        </div>
    </div>
    
     <!-- <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Address 2</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y3" name="Y3" placeholder="" value="">
        </div>
    </div> -->
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Village/ town/ district</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y4" name="Y4" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">City/ province/ state</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y5" name="Y5" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Country</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y6" name="Y6" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Postal code</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y7" name="Y7" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Contact name/ title</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y8" name="Y8" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Contact phone</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y9" name="Y9" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Contact fax</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y10" name="Y10" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Email address</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y11" name="Y11" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Official websites</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y12" name="Y12" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Owner name</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y13" name="Y13" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Business licence no.</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y14" name="Y14" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Export licence no.</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y15" name="Y15" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Import licence no.</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y16" name="Y16" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Year established</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="Y17" name="Y17" placeholder="" value="">
        </div>
    </div>
    
<!--  <div class="sepasi2" >
       <label for="nasfsme" class="col-lg-4 control-label"></label>
      </div> -->
    
    <div class="form-group">
       <!-- <a href="#tab4default" data-toggle="tab">Default 4</a> -->
        <div class="col-lg-4">
       <!--  <a class="list-group-item" id="galeria"><span class="glyphicon glyphicon-picture "></span> &nbsp;Galery Kokola House</a> -->
            <a href="#tab2info" data-toggle="tab" class="list-group-item"  id="su"><img src="image/arrow.gif " width="40px"/><strong> Page 1 of 5</strong></a> 
        </div>
    </div>
    
        </div><!-- tab info 1-->
                        
                        <div class="tab-pane fade" id="tab2info">
    <!--  <div class="form-group">     
        <div class="col-lg-12" align="center">
          <strong><div class="thumbnail">PRODUCT/ MARKET PROFILE | PRODUCT PROFILE</div></strong>       
        </div>      
    </div>-->
   
   
    <div class="form-group">   
               <div class="col-lg-12 thumbnail"   style="background-color:#FFBFAA"; >
          <strong>Product type : (List products  manufacturid and percent of total)</strong>       
        </div></div>
   <!--<div class="col-lg-6 thumbnail"  style="background-color:#FFBF55" >
          <strong>Name of product</strong>       
        </div>-->  
   
    <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >1) Name of product</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika name of product diisi maka precentage total harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
    <label for="email" class="col-lg-2 control-label">2) Name of product</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika name of product diisi maka precentage total harus diisi" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
    <label for="email" class="col-lg-2 control-label">3) Name of product</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
    <label for="email" class="col-lg-2 control-label">4) Name of product</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
    <label for="email" class="col-lg-2 control-label">5) Name of product</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    

 <div class="col-lg-12 thumbnail"  style="background-color:#FFBFAA";>
          <strong>Product category (primary)</strong>       
        </div>  

 <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Product name</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">% of business</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Number of production line</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Daily output</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Product certificate</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     
     <div class="col-lg-12 thumbnail"  style="background-color:#FFBFAA"; >
          <strong>Product category (secondary)</strong>       
        </div>  

 <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Product name</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">% of business</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Number of production line</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Daily output</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Product certificate</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
   <div class="sepasi2" >
       <label for="nasfsme" class="col-lg-4 control-label"></label>
      </div>
    
    <div class="form-group">
       <!-- <a href="#tab4default" data-toggle="tab">Default 4</a> -->
        <div class="col-lg-12">
       <!--  <a class="list-group-item" id="galeria"><span class="glyphicon glyphicon-picture "></span> &nbsp;Galery Kokola House</a> -->
            <a href="#tab3info" data-toggle="tab" class="list-group-item"  id="su2"><img src="image/arrow.gif " width="40px"/><strong> Page 2 of 5</strong></a> 
        </div>
    </div>
                        </div><!-- tab2info-->
                        
                       
                        
   <div class="tab-pane fade" id="tab3info">
        
        <div class="form-group">   
               <div class="col-lg-12 thumbnail"   style="background-color:#FFBFAA"; >
          <strong>List shipment percent by country : (Based on current shipping year)</strong>       
        </div></div>
                        
       <div class="form-group">
        <label for="name" class="col-lg-4 control-label">1) USA</label>
        <label for="name" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
       </div>
       
         <div class="form-group">
        <label for="name" class="col-lg-4 control-label">2) EU</label>
          <label for="name" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
       </div>
       
         <div class="form-group">
        <label for="name" class="col-lg-4 control-label">3) INDONESIA</label>
        <label for="name" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
       </div>
       
         <div class="form-group">
        <label for="name" class="col-lg-4 control-label">4) CHINA</label>
        <label for="name" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
       </div>
       
         <div class="form-group">
        <label for="name" class="col-lg-4 control-label">5) JAPAN</label>
        <label for="name" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
       </div>
       
         <div class="form-group">
        <label for="name" class="col-lg-4 control-label">6) SOUTHEAST ASIA</label>
        <label for="name" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
       </div>
       
         <div class="form-group">
        <label for="name" class="col-lg-4 control-label">7) OTHER</label>
        <label for="name" class="col-lg-2 control-label">Precentage of total</label>
        <div class="col-lg-6">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
       </div>
       
      <!-- <div class="form-group">
       <div class="col-lg-4 thumbnail"  style="background-color:#FFBF55" >
          <strong>List key customers & precent ratio</strong>       
        </div> 
        <div class="col-lg-8 thumbnail"  style="background-color:#FFBF55" >
          <strong>% ratio of total business</strong>       
        </div>
       </div>-->
        
        <div class="col-lg-12 thumbnail"  style="background-color:#FFBFAA"; >
          <strong>List key customers & percent ratio :</strong>       
        </div>  
        
         <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >1) Customer</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika customer diisi maka  % ratio of total business harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-3 control-label">% ratio of total business</label>
        <div class="col-lg-3">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
      <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >2) Customer</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika customer diisi maka  % ratio of total business harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-3 control-label">% ratio of total business</label>
        <div class="col-lg-3">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >3) Customer</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika customer diisi maka  % ratio of total business harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-3 control-label">% ratio of total business</label>
        <div class="col-lg-3">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >4) Customer</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika customer diisi maka  % ratio of total business harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-3 control-label">% ratio of total business</label>
        <div class="col-lg-3">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >5) Customer</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika customer diisi maka  % ratio of total business harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-3 control-label">% ratio of total business</label>
        <div class="col-lg-3">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
       
         <div class="form-group">
       <!-- <a href="#tab4default" data-toggle="tab">Default 4</a> -->
        <div class="col-lg-4">
       <!--  <a class="list-group-item" id="galeria"><span class="glyphicon glyphicon-picture "></span> &nbsp;Galery Kokola House</a> -->
            <a href="#tab3xinfo" data-toggle="tab" class="list-group-item"  id="su3"><img src="image/arrow.gif " width="40px"/><strong> Page 3 of 5</strong></a> 
        </div>
    </div>
       
                        </div><!-- tab3info-->
                        
                         <div class="tab-pane fade" id="tab3xinfo">
                         
      <!--   <div class="form-group">     
        <div class="col-lg-12" align="center">
          <strong><div class="thumbnail">PARTY INFORMATION (FACTORY)</div></strong>       
        </div>      
    </div>-->
    
     <div class="form-group">   
               <div class="col-lg-12 thumbnail"  align="center" style="background-color:#FFBFAA"; >
          <strong>PARTY INFORMATION (FACTORY)</strong>       
        </div></div>
    
                         
      <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Factory name</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Address 1</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Address 2</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Village/ town/ district</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">City/ province/ state</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Country</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Postal code</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Contact name/ title</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Contact phone</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Contact fax</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Email address</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Official website</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Owner name</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Business licence no.</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Export licence no.</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Import licence no.</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Year established</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    
        <div class="form-group">   
               <div class="col-lg-12 thumbnail"  style="background-color:#FFBFAA"; >
          <strong>What is your total unit capacity per month/ by product:</strong>       
        </div></div>
          
            <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >1) Name of product</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika Name of product diisi maka Tonnage/ MT harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Tonnage/ MT</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
          
           <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >2) Name of product</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika Name of product diisi maka Tonnage/ MT harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Tonnage/ MT</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >3) Name of product</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika Name of product diisi maka Tonnage/ MT harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Tonnage/ MT</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >4) Name of product</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika Name of product diisi maka Tonnage/ MT harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Tonnage/ MT</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
    <label for="email" class="col-lg-2 control-label" >5) Name of product</label>
        <div class="col-lg-4">
            <input type="text" data-toggle="tooltip" title="Jika Name of product diisi maka Tonnage/ MT harus diisi" class="form-control" id="NOPP1" name="NAMA" placeholder="" value="">
        </div>
        <label for="email" class="col-lg-2 control-label">Tonnage/ MT</label>
        <div class="col-lg-4">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">   
               <div class="col-lg-12 thumbnail"  style="background-color:#FFBFAA"; >
          <strong>What is the proposed monthly unit capacity per month/ by product for KOKOLA GROUP :</strong>       
        </div></div>
          
       <div class="form-group">  
        <div class="col-lg-6">
            <input type="text" class="form-control" id="NOPP1A" name="NAMA" placeholder="" value="">
        </div>
         <label for="email" class="col-lg-6 control-label" >MT</label>
    </div>   
    
    <div class="form-group">   
               <div class="col-lg-12 thumbnail"  style="background-color:#FFBFAA"; >
          <strong>PROFILE</strong>       
        </div></div> 
        
         <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Type of product produced</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Daily capacity units (total)</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Number of machines (total)*</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Number of production line</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Number of production floor*</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Number of production building</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Total square footage of production facility</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Total square footage of storage facility</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Total area of factory (square footage)</label>
        <div class="col-lg-8">
            <input type="text"  data-toggle="tooltip" title="*Please provide production floor plan and list of equipment (machines) for ref." class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Number of employees</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
     <div class="form-group">   
               <div class="col-lg-12 thumbnail"  style="background-color:#FFBFAA"; >
          <strong>QUALITY SYSTEM</strong>       
        </div></div> 
        
        <div class="form-group">
        <label for="name" class="col-lg-4 control-label">In - house testing facility</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Recall history (if any)</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">List quality control management processes</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
               
                           <div class="form-group">
       <!-- <a href="#tab4default" data-toggle="tab">Default 4</a> -->
        <div class="col-lg-4">
       <!--  <a class="list-group-item" id="galeria"><span class="glyphicon glyphicon-picture "></span> &nbsp;Galery Kokola House</a> -->
            <a href="#tab4info" data-toggle="tab" class="list-group-item"  id="su4"><img src="image/arrow.gif " width="40px"/><strong> Page 4 of 5</strong></a> 
        </div>
    </div>
                         
                         </div><!-- tab3xinfo-->
                         
                         
            <div class="tab-pane fade" id="tab4info">
     <div class="form-group">
      <label for="name" class="col-lg-4 control-label">Payment term.</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
       </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Name of bank</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Account no.</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-lg-4 control-label">Account holder</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="NAMA" placeholder="" value="">
        </div>
    </div>
    
    
    <div class="form-group">
        <div class="col-lg-8 col-lg-offset-4">
            <input id="SAVE" name="SAVE" type="submit"  value="SAVE"  onclick="return confirm('Apakah anda yakin sudah melengkapi data anda?')" class="btn btn-primary">
        </div>
    </div>
    
      <div class="form-group">
       <!-- <a href="#tab4default" data-toggle="tab">Default 4</a> -->
        <div class="col-lg-4">
       <!--  <a class="list-group-item" id="galeria"><span class="glyphicon glyphicon-picture "></span> &nbsp;Galery Kokola House</a> -->
            <a href="#" data-toggle="tab" class="list-group-item"  id="su5"><img src="image/arrow.gif " width="40px"/><strong> Last Page 5 of 5</strong></a> 
        </div>
    </div>
    
    
    
                        </div><!-- tab4 info-->
                        
                        
                    </div>
                </div>
            </div>

</div><!--batas 4 form-->

</div>

</div>

  
<!-- <a class="list-group-item" id="galeria"><span class="glyphicon glyphicon-picture "></span> &nbsp;Galery Kokola House</a> -->
</div>
</form> 

    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="jsku/jquery.js"></script>
  
  <script src="jsku/bootstrap.js"></script>
  
  <script type="text/javascript" src="jsku/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="jsku/jquery.backTop.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script>
  $(document).ready(function(){
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
                    'position' : 0,
                    'speed' :300,
                    'color' : 'red',
                });
				  $('#su2').backTop({
                    'position' : 0,
                    'speed' :300,
                    'color' : 'red',
                });
				 $('#su3').backTop({
                    'position' : 0,
                    'speed' :300,
                    'color' : 'red',
                });
				 $('#su4').backTop({
                    'position' : 0,
                    'speed' :300,
                    'color' : 'red',
                });
				 $('#su5').backTop({
                    'position' : 0,
                    'speed' :300,
                    'color' : 'red',
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
			 $('[data-toggle="tooltip"]').tooltip(); 
	
	
	// $('#SAVE').on('click',function(){
//        if (confirm("Are you sure?")) {
//        // your deletion code
//    }
//    return false;
//	  // alert("herduyheuye");
//      });
	
				
});

  </script>
  
</body>
</html>

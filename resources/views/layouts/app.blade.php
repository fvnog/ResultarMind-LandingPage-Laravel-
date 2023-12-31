<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<!--META TAGS--> 
<title>Basic Laravel Landing Page</title>
  <!--end meta tags--> 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.js"></script> 
<!--end summernote--> 
<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Montserrat" rel="stylesheet"> 
<link rel="stylesheet" href="{{{ asset('/css/general.css') }}}">  
<link rel="stylesheet" href="{{{ asset('/css/default.css') }}}">  
<link rel="stylesheet" href="{{{ asset('/css/responsive.css') }}}">  

</head>  
<body> 

@extends('layouts.header') 

@yield('content') 

@extends('layouts.footer')

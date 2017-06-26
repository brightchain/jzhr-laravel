@extends('common.layouts')
@section('title',$title)
@section('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <!--<link href="css/socicon.css" rel="stylesheet" type="text/css" /> -->
    <link href="../css/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.min.css"" rel="stylesheet" type="text/css" />
    <link href="../css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="../css/settings.css" rel="stylesheet" type="text/css" />
    <link href="../css/layers.css" rel="stylesheet" type="text/css" />
    <link href="../css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="../css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="../css/slider.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="../css/ilightbox.css" rel="stylesheet" type="text/css" />
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="../css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="../css/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="../css/custom.css" rel="stylesheet" type="text/css" />
@stop
@section('banner')
    @include('about.banner')
@stop
@section('content')
@stop

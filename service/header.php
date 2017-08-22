<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MTTree, A web-based Phylogenetic Tree Generator using Mitochondrial Genomes</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" >

    <!-- Custom styles for this template -->
    <link href="../assets/css/sticky-footer.css" rel="stylesheet">

    <!-- Main CSS by Ethan-->
    <link href="../assets/css/main.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="../assets/css/beckymain.css" type="text/css" />

    <link rel="stylesheet" href="../assets/plugin/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="../assets/plugin/jqwidgets/styles/jqx.office.css" type="text/css" />

    <script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>

    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="../assets/js/jszip.min.js"></script>

    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxswitchbutton.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxgrid.filter.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxgrid.edit.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxgrid.sort.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxgrid.columnsresize.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxdata.export.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxtextarea.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="../assets/plugin/jqwidgets/jqxnotification.js"></script>

    <script src="../assets/js/echarts.min.js"></script>
</head>
<body>

<!-- Back to Top -->
<div style="position:fixed; _position:absolute; bottom:0px; right:0px; width:100px; height:85px; display:none;" class="actGotop"><a href="javascript:;" title="Top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> Back to Top</a></div>
<script type="text/javascript">
$(function(){ 
  $(window).scroll(function() {   
    if($(window).scrollTop() >= 100){
      $('.actGotop').fadeIn(100);
    }else{    
      $('.actGotop').fadeOut(100);
    }  
  });
  $('.actGotop').click(function(){$('html,body').animate({scrollTop: '0px'}, 500);});
});
</script>

<!-- Begin page content -->
<div class="container">

<?php global $MODE; $MODE = "test";
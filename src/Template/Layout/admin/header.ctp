<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
      <?= $this->Html->meta(
          'favicon.ico',
          '/favicon.ico',
          ['type' => 'icon']
      );?>

    <title>Edu-Portail </title>

    <!-- Bootstrap core CSS -->
    <?= $this->Html->css('bootstrap.min.css');?>
    <?= $this->Html->css('main.css');?>


    <?= $this->Html->css('ie10-viewport-bug-workaround.css');?>

    <!-- Custom styles for this template -->
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
   <script src='lib/jquery.min.js'></script>
    <script src='lib/moment.min.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <?= $this->Html->script("ie-emulation-modes-warning.js");?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->
  </head>
<body>
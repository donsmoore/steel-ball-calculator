<?php require_once('./classes/setup.php'); ?><!DOCTYPE html><html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <style type="text/css" media="screen">@import "<?php echo $o->app_main_css; ?>";</style>
  <script type="text/javascript" src="<?php echo $o->app_main_js; ?>"></script>
</head>
<body style="">
<?php echo $o->GetPage(); ?>
<br><br><br><br><br><br><br><br><a href="index.php?page=Admin">TEMPORARY ADMIN</a>
<?php echo $o->GetCopyright(); ?>
<?php echo $o->GetDebug(); ?>
</body>
</html>

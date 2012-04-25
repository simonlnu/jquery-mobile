<!DOCTYPE html>
<html>
<head>
  <title><?php if(x($page,'title')) echo $page['title']; ?></title>
  <script>var baseurl="<?php echo $a->get_baseurl() ?>";</script>
  <?php if(x($page,'htmlhead')) echo $page['htmlhead']; ?>
</head>
<body>

<div data-role="page" data-theme="b">
	
	<div data-role="header">	
		<?php if(x($page, 'header')) echo $page['header']; ?>
	</div>
		
	<div data-role="navbar">
		<?php if(x($page,'nav')) echo $page['nav']; ?>
	</div><!-- /navbar -->
		
	<div data-role="content">	
			<?php if(x($page,'content')) echo $page['content']; ?>
	</div>
	
	<div data-role="footer">
		<?php if(x($page, 'footer')) echo $page['footer']; ?>
	</div>
	
</div>
</body>
</html>


<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- load MUI -->
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	    <link href="//cdn.muicss.com/mui-0.9.21/css/mui.min.css" rel="stylesheet" type="text/css" />
	    <script src="//cdn.muicss.com/mui-0.9.21/js/mui.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>css/custom.css">
		<script src = "<?php echo base_url();?>js/index.js"></script>
	</head>
	<body class="homeview">
		<div class="mui-container main-container">
	      	<div class="mui-panel main-div">
	      		<div class="container middle">
	      			<div class="left-div">
	      				<button class="mui-btn mui-btn--primary mui-btn--raised" onclick="location.href='<?php echo base_url();?>addclient'">Add New Client</button>
	      			</div>
	      			<div class="right-div">
	      				<button class="mui-btn mui-btn--primary mui-btn--raised" onclick="location.href='<?php echo base_url();?>show'">Client Info</button>
	      			</div>
	      		</div>
		       
	      	</div>
    	</div>
	</body>
</html>
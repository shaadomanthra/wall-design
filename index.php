
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="facivon.ico">

    <title>Facebook wall design</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script>
		$(document).on('click','#button',function(){
			var feed = $('#feedbox').val();
			if(!feed)
				alert('Enter the feed');
			else{
			$( '<div id="feed"><div class="row" >\
		  <div class="col-md-2"><img src="http://packetcode.com/apps/wall-design/image.jpg" class="img-circle" width="100%"/></div>\
		  <div class="col-md-10">\
		  <div><b>Krishna Teja</b>\
		  <div class="pull-right text-muted" id="delete">delete</div></div>\
		  <div> '+feed+'</div>\
		  <div class="text-muted"> <small>posted 2 minutes ago</small></div>\
		  </div>\
		</div><hr></div>').insertAfter( "#insert" ).hide().slideDown();
			$('#feedbox').val('');
		}
		});
		
		$(document).on('click','#delete',function(){
			$(this).closest('#feed').slideUp();
		});
	</script>
<style>
	#delete{
		cursor:pointer;
	}
	.container1{
		width:730px;
		margin:0px auto;
	}
</style>
	</head>

  <body>

    <div class="container1">
      <div class="header">

        <h3 class="text-muted">Facebook Wall Design</h3>
      </div>

	<div>
		<div class="row">
		  <div class="col-md-2"><img src="image.jpg" class="img-circle" width="100%"/></div>
		  <div class="col-md-10"><textarea class="form-control" id="feedbox" rows="3"></textarea><br>
		  <button type="button" id="button" class="btn btn-default">post</button>
		  </div>
		</div>
	</div>
	<hr>
		<div id="insert"></div>
		<div>
		<div class="row" id="feed">
		  <div class="col-md-2"><img src="http://packetcode.com/apps/wall-design/image.jpg" class="img-circle" width="100%"/></div>
		  <div class="col-md-10">
		  <div><b>Krishna Teja</b>
		  <div class="pull-right text-muted" id="delete">delete</div></div>
		  <div> This is a sample text</div>
		  <div class="text-muted"> <small>posted 2 minutes ago</small></div>
		  </div>
		</div>
	</div>
	<br>

      

      <div class="footer">
        <p><a href="https://twitter.com/shaadomanthra">krishna teja</a> &copy; <a href="http://packetcode.com">packetcode</a> production 2014</p>
      </div>
	  <br>
	  <div class="well">
	  <h4> Download the  <a href="https://app.box.com/s/m5su8o7gf392t9cwldjc"  target="_blank">facebook wall design script</a> to test in you localserver</h4>
	 <br>
	  Subscribe to our <a href=" http://youtube.com/packetcode"  target="_blank">youtube channel</a> to get follow the updates<br>
	  Join our <a href="https://www.facebook.com/groups/packetcode"  target="_blank">facebook group</a> for discussion  
	  </div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- top-jobs -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-4970258300493014"
     data-ad-slot="3924686286"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div> <!-- /container -->
<br><Br>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

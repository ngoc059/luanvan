
@extends('layout.app')
<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>

	<title>Progress Bars</title>

	<link rel='stylesheet' href='css/style.css'>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script>
		$(function () {
			$(".meter > span").each(function () {
				$(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
						width: $(this).data("origWidth")
					}, 1200);
			});
		});
	</script>

</head>

<body>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  ...
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-primary">Save changes</button>
			</div>
		  </div>
		</div>
	  </div>
	<div id="page-wrap">

		<div style="	background-color: #f0a3a3 !important;
		background-image: -moz-linear-gradient(top, #f0a3a3, #f42323) !important;
		background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #f0a3a3),color-stop(1, #f42323)) !important;
		background-image: -webkit-linear-gradient(#f0a3a3, #f42323) !important;" class="meter red">
			<span style="width: 80%"></span>
		</div>
		<pre><code>&lt;div class=&quot;meter red&quot;&gt;
	&lt;span style=&quot;width: 80%&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>

	</div>

</body>

</html>
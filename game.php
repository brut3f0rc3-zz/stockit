<?php require('header.php');?>

	<div id="body">
		<div id="stage">
			<div id="stage-left" style="float:left">
				<input type="text" placeholder="Enter symbol">
				<button class="btn btn-default">Get Quote</button>
				<!--Quote Summary-->
				<div id="quote-summary">
					<table class="table">
						<tr>
							<td>Symbol</td>
							<td>GOOG</td>
						</tr>
						<tr>
							<td>Price</td>
							<td>539.00</td>
						</tr>
					</table>
				</div>
				<hr/>
				<div id="top-quotes">
					<table class="table">
						<tr>
							<td>Symbol</td>
							<td>Price</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="stage-right" style="float:right">
				<!--User details-->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<?php require('footer.php');?>
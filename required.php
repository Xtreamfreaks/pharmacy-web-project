<!-- Checkout -->
<div class="container">
	<div class="row">
		<div class="span12">
			<form class="form-horizontal span6">
				<fieldset>
					<legend>Payment</legend>
					
					<div class="control-group">
						<label class="control-label">Card Holder's Name</label>
						<div class="controls">
							<input type="text" class="input-block-level" pattern="\w+ \w+.*" title="Fill your first and last name" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Card Number</label>
						<div class="controls">
							<div class="row-fluid">
								<div class="span3">
									<input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="First four digits" required>
								</div>
								<div class="span3">
									<input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="Second four digits" required>
								</div>
								<div class="span3">
									<input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="Third four digits" required>
								</div>
								<div class="span3">
									<input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="Fourth four digits" required>
								</div>
							</div>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Card Expiry Date</label>
						<div class="controls">
							<div class="row-fluid">
								<div class="span9">
									<select class="input-block-level">
										<option>January</option>
										<option>...</option>
										<option>December</option>
									</select>
								</div>
								<div class="span3">
									<select class="input-block-level">
										<option>2013</option>
										<option>...</option>
										<option>2015</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Card CVV</label>
						<div class="controls">
							<div class="row-fluid">
								<div class="span3">
									<input type="text" class="input-block-level" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required>
								</div>
								<div class="span8">
									<!-- screenshot may be here -->
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="button" class="btn">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<!-- Cart -->
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
								<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
								<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
								<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
								Update cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>$50.00</strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block">
							Checkout
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sharif - Shop</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/css/bootstrap.min.css'>
<style>
    .invoice-head td {
  padding: 0 8px;
  width: 100%!important;
}
.container {
  margin-top:70px;
}
.invoice-body{
  background-color:transparent;
}
.invoice-thank{
  margin-top: 60px;
  padding: 5px;
}
address{
  margin-top:15px;
}
</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
    	<div class="row">
			<div class="span4 well">
    			<table class="invoice-head">
    				<tbody>
    					<tr>
    						<td class="pull-left"><strong>Name #</strong></td>
    						<td>{{$order->name}}</td>
    					</tr>
    					<tr>
    						<td class="pull-left"><strong>Phone #</strong></td>
    						<td>{{$order->phone}}</td>
    					</tr>
    					<tr>
    						<td class="pull-left"><strong>Address:</strong></td>
    						<td>{{ $order -> address }},{{ $order -> city }},{{ $order -> zip_code }},{{ $order -> country }}</td>
    					</tr>
    					
    				</tbody>
    			</table>
    		</div>
    		<div class="span4 well">
    			<table class="invoice-head">
    				<tbody>
    					<tr>
    						<td class="pull-right"><strong>Product ID #</strong></td>
    						<td>{{$order->product_id}}</td>
    					</tr>
    					<tr>
    						<td class="pull-right"><strong>Customer ID #</strong></td>
    						<td>{{$order->user_id}}</td>
    					</tr>
    					<tr>
    						<td class="pull-right"><strong>Delivery Date #</strong></td>
    						<td>{{ $order -> created_at ->diffForHumans() }}</td>
    					</tr>
    					
    				</tbody>
    			</table>
    		</div>
    	</div>
    	<div class="row">
    		<div class="span8">
    			<h2>Invoice</h2>
    		</div>
    	</div>
    	<div class="row">
		  	<div class="span8 well invoice-body">
		  		<table class="table table-bordered">
					<thead>
						<tr>
                          <th>Product Name</th>
						  <th></th>
							<th>Quantity</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<?php $totalprice = 0; ?>							
						
						<td>{{$order->product_title}}</td>
						<td></td>
						<td>{{$order->quantity}} pcs</td>
                      	<td>{{$order->sprice}} taka</td>
						  <?php $totalprice = $order->delivery_charge + $order ->sprice ?>
						</tr>
                    <tr><td colspan="4"></td>
                    </tr>
                    <tr>
                            <td colspan="2">&nbsp;</td>
							<td><strong>Delivery Charge</strong></td>
							<td><strong>{{$order->delivery_charge}} taka</strong></td>
						</tr>
                    <tr>
                            <td colspan="2">&nbsp;</td>
							<td><strong>Total</strong></td>
							<td><strong>{{$totalprice}} taka</strong></td>
						</tr>
					</tbody>
					
				</table>
		  	</div>
  		</div>
  		<div class="row">
  			<div class="span8 well invoice-thank">
  				<h5 style="text-align:center;">Thank You!</h5>
  			</div>
  		</div>
  		<div class="row" style="display: flex;font-size:14px!important">
  	    	<div class="span3">
  		        <strong>Phone:</strong>+8801738153971
  	    	</div>
  	    	<div class="span3">
  		        <strong>Email:</strong> <a href="shariful971@gmail.com">shariful971@gmail.com</a>
  	    	</div>
  	    	<div class="span3">
  		        <strong>Website:</strong> <a href="http://khalifameditech.com">khalifameditech.com</a>
  	    	</div>
  		</div>
    </div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/js/bootstrap.min.js'></script>
</body>
</html>

<?php
include('newheader.php');


?>
<head>
  <title>Credit Card Purchase</title>
  <style>
  </style>
</head>
<body>
<script type="text/javascript" src="Payment.js"></script>
<script>
/*handling additional validation for purchase form*/


</script>
  <h1>Credit Card Purchase</h1>
  
<div id="purchase-div">
  <form id="purchase-form">
    <label for="cardNumber">Card Number:</label>
    <input type="text" id="cardNumber" name="cardNumber" ><br>
    
    <label for="expiryDate">Expiry Date:</label>
    <input type="text" id="expiryDate" name="expiryDate"><br>
    
    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" ><br>

    <input type="hidden" id="offer_id" name="offer_id">
    
    <input type="submit" value="Purchase" id="purchase-submit" name="purchase-submit" class="btn-primary">
  </form>
</div>

<div id="key-div" style="display:none">
  <p>And there you have it, your key:</p>
  <input type="text" id="keyField" value="">
</div>


  <div id="result"></div>	

</body>
</html>


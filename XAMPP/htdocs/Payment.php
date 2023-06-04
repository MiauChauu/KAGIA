<?php
include('partials/header.php');
?>
<head>
  <title>Credit Card Purchase</title>
</head>
<body>
  <h1>Credit Card Purchase</h1>
  

  <form id="purchaseForm">
    <label for="cardNumber">Card Number:</label>
    <input type="text" id="cardNumber" placeholder="Card number"><br>
    
    <label for="expiryDate">Expiry Date:</label>
    <input type="text" id="expiryDate" placeholder="MM/YY"><br>
    
    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" placeholder="CVV"><br>
    
    <button type="submit">Purchase</button>
  </form>

  <div id="result"></div>

  <script>
    document.getElementById("purchaseForm").addEventListener("submit", function(event) {
      event.preventDefault();
      
      var cardNumber = document.getElementById("cardNumber").value;
      var expiryDate = document.getElementById("expiryDate").value;
      var cvv = document.getElementById("cvv").value;
      
      // Perform some basic validation
      if (cardNumber && expiryDate && cvv) {
        // Simulate processing by showing a success message
        document.getElementById("result").innerHTML = "<p>Payment Successful!</p>";
        // You can also perform further actions like sending the data to a server for processing
      } else {
        document.getElementById("result").innerHTML = "<p>Please fill in all fields.</p>";
      }
    });
  </script>
</body>
</html>


<html>
<head>
<link rel="stylesheet" href="styles/Customer.css" />
<title>Order status</title>
<script src="js/jquery.js"></script>
<script src="js/register.js"></script>
</head>
 <br/>
  <h1 align="center">KALUWORKS LTD </h1>
    <h2 align="center">View order Status</h2>
       <body id="body">
        <fieldset id=mainfield>
         <fieldset id="regform" style="width:95%">  
         <legend>Enter your Order Number</legend>
        <form method=get required="required.html">
      <div id=formdiv style="background-color:#096" width="" heigth="">
        <label for="Ordernumber">Order Number</label>
        <input type="integer" name="Ordernumber" id="Ordernumber" 
        placeholder="Enter your Ordernumber">
      <span id="erruname" class="error"><img src="images/warning.png" /></span>
        <label for="customername">Customer Name</label>
        <input type="text" name="customername" id="customername"required="required" />
      <span id="errcname" class="error"><img src="images/warning.png" /></span>
        <label for="Itemcode">Itemcode</label>
        <input type="text" name="Itemcode" id="Itemcode"/>
      <span id="errpasswd" class="error"><img src="images/warning.png" /></span>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" />
      <span id="errconf" class="error"><img src="images/warning.png" /></span>
        <label for="Orderquantity">Order Quantity</label>
        <input type="text" name="Orderquantity" id="Orderquantity" />
      <span id="errconf" class="error"><img src="images/warning.png" /></span>
        <label for="Processedorder">Processed Order</label>
        <input type="text" name="Processedorder" id="Processedorder" />
      <span id="errconf" class="error"><img src="images/warning.png" /></span>
        <label for="Remainingorder">Remainin Order</label>
        <input type="text" name="Remainingorder" id="Remainingorder" />
      <span id="errconf" class="error"><img src="images/warning.png" /></span>
        <label for="Dispatchdate">Dispacth</label>
        <input type="text" name="Dispatchdate" id="Dispatchdate" />
      <span id="errconf" class="error"><img src="images/warning.png" /></span>
         <fieldset id=notify>test</fieldset>
      <div align="right" id=btndiv>
        <button id=btnreg >Register</button>
        <button id=btnreg value="Clear">Clear</button>
     </div>
 </div>
</form>
</fieldset>
</fieldset>
</body>
</html>


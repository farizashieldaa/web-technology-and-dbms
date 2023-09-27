<style>
    form {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 300px;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<h1>New Product Form</h1>
<form action="ProductProcess.php" method="post">
  <div class="form-group">
    <label for="productCode">Product Code:</label>
    <input type="text" id="productCode" name="productCode" required>
  </div>

  <div class="form-group">
    <label for="productName">Product Name:</label>
    <input type="text" id="productName" name="productName" required>
  </div>

  <div class="form-group">
    <label for="productLine">Product Line:</label>
    <input type="text" id="productLine" name="productLine" required>
  </div>

  <div class="form-group">
    <label for="productScale">Product Scale:</label>
    <input type="text" id="productScale" name="productScale" required>
  </div>

  <div class="form-group">
    <label for="productVendor">Product Vendor:</label>
    <input type="text" id="productVendor" name="productVendor" required>
  </div>

  <div class="form-group">
    <label for="productDescription">Product Description:</label>
    <textarea id="productDescription" name="productDescription"></textarea>
  </div>

  <div class="form-group">
    <label for="quantityInStock">Quantity in Stock:</label>
    <input type="number" id="quantityInStock" name="quantityInStock" required>
  </div>

  <div class="form-group">
    <label for="buyPrice">Buy Price:</label>
    <input type="number" id="buyPrice" name="buyPrice" required>
  </div>

  <div class="form-group">
    <label for="MSRP">MSRP:</label>
    <input type="number" id="MSRP" name="MSRP" required>
  </div>

  <div class="form-group">
    <input type="submit" value="Submit">
  </div>
</form>

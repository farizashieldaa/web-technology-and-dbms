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
    
    input[type="date"] {
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
    
<h1>New Order Form<h1>
<form action="OrderProcess.php" method="post">
    <div class="form-group">
        <label for="orderNumber">Order Number:</label>
        <input type="text" id="orderNumber" name="orderNumber" required>
    </div>

    <div class="form-group">
        <label for="orderDate">Order Date:</label>
        <input type="date" id="orderDate" name="orderDate" required>
    </div>

    <div class="form-group">
        <label for="requiredDate">Required Date:</label>
        <input type="date" id="requiredDate" name="requiredDate" required>
    </div>

    <div class="form-group">
        <label for="shippedDate">Shipped Date:</label>
        <input type="date" id="shippedDate" name="shippedDate">
    </div>

    <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required>
    </div>

    <div class="form-group">
        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments"></textarea>
    </div>

    <div class="form-group">
        <label for="customerNumber">Customer Number:</label>
        <input type="text" id="customerNumber" name="customerNumber" required>
    </div>

    <input type="submit" value="Submit">
</form>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Registration Form</h2>

  <form method="post" action="payment-process.php">

    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="Name">
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
 
    <div class="mb-3 mt-3">
      <label for="email">Course:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Course" name="course">
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Fees Amount:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Amount" name="amount">
    </div>

      <div class="mb-3 mt-3">
      <label for="email">Card No:</label>
      <input type="text" class="form-control" id="email" placeholder="1111 1111 1111 1111" name="card_no" maxlength="16">
    </div>

      <div class="mb-3 mt-3">
      <label for="email">Expiry Month:</label>
      <input type="text" class="form-control" id="email" placeholder="MM" name="card_exp_month" maxlength="2">
    </div>

      <div class="mb-3 mt-3">
      <label for="email">Expiry Year:</label>
      <input type="text" class="form-control" id="email" placeholder="YYYY" name="card_exp_year" maxlength="4">
    </div>

      <div class="mb-3 mt-3">
      <label for="email">CVC Code:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter CVC Code" name="card_cvc" maxlength="3">
    </div>

    




       <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
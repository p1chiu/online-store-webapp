<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="jquery-3.5.1.min.js"></script>
  <link rel="icon" href="public/favicon.ico" sizes="any">
  <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="signUp.css">
  <title>Sign up</title>
</head>

<body>
 
  <?php include("navbar.php"); ?>
    <div class="container">

      <h1 style="color:rgb(75, 75, 75); text-align:center;">Registration</h1>
      <form action="signUp.php" method="post">
        <div class="row align-items-start">
            <div class="col">
                <label for="fname">Full Name</label>
                <input type="text" id="fname" name="fname" placeholder="Full name..">
            </div>
            <div class="col">
              <label for="=birthday">Birthday</label>
              <input type="date" id="birthday" name="birthday" >
          </div>
            
        </div>
       
        <div class="row align-items-start">
            <div class="col">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="placeholder@gmail.com">
            </div>
            <div class="col">
              <label for="pass">Password</label>
              <input type="password" id="pass" name="pass" placeholder="Password...">
          </div>
        </div>
        <div class="row align-items-start">
            <div class="col">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="1 abc street">
            </div>
            <div class="col">
                <label for="postal">Postal Code</label>
                <input type="text" id="postal" name="postal" placeholder="A1B 2C3">
            </div>
        </div>
        <label for="telephone">Telephone</label>
        <input type="tel" id="telephone" name="telephone" placeholder="(999)-101-1337">
        
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>

        <h2 style="color:rgb(75, 75, 75); text-align:center;">Payment Details</h2>
        <select class="payment" name="payment" id="payment">
          <option value="credit">Credit</option>
          <option value="debit">Debit</option>
        </select>

        <div class="row align-items-start">
          <div class="col">
              <input class="payment" type="text" id="cardNumber" name="cardNumber" placeholder="Card Number">
          </div>
          <div class="col">
              <input class="payment"type="text" id="cvc" name="cvc" placeholder="Card CVC">
          </div>
          <div class="col">
            <input class="payment" type="text" id="expiry" name="expiry" placeholder="EXP">
        </div>
      </div>

      <input type=submit class="btn btn-warning" value="Sign up">
        <!-- <a class="btn btn-warning" style="display:block; margin-left: auto; margin-right: auto; border-radius:20px; color:black;" href="index.html" role="button">Sign Up</a> -->
      </input>
      
      </form>
    </div>


   
</body>

</html>
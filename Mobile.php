<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile Shopping</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar bg-dark navbar-dark navbar-expand-sm">
            <a class="navbar-brand" href="#">Logic Tycoon</a>
            <ul class="navbar-nav">
                <li><a class="nav-link" href="Mobile.php">Home</a></li>
                <li><a class="nav-link" href="detail.php">Details</a></li>
                <li><a class="nav-link" href="contact.php">Contact us</a></li>
                <li><a class="nav-link" href="gellery.php">Gellery</a></li>
                <li><a class="nav-link" href="MultiLogin.php">Login</a></li>
            </ul>
        </nav>
<div class="jumbotron text-center bg-warning">
         <h1><b>Mobile Shopping Website</b></h1>
         <p>We are the mobile lovers here you can buy mobiles of different styles</p>
     </div>
     <div class="container">
     <h1 class=" text-center text-danger mb-5">Online Mobile Shopping Cart</h1>
<div class="row">
 <?php
 $con = mysqli_connect('localhost','root');
 mysqli_select_db($con,'test');
 $q = "select * from `add1`";
 $qfire = mysqli_query($con,$q);
 $num = mysqli_num_rows($qfire);
 if($num > 0)
 {
	while($product = mysqli_fetch_array($qfire))
	{
		?>
        <div class="col-lg-3 col-md-3 col-sm-12">
        <form>
              <div class="card">
                   <h6 class="card-title"><?php echo $product['name'];?></h6>
                   <div class="card-body">
                        <img src="<?php echo $product['image'];?>" alt="phone" class="img-fluid"/>
                        <h6>&#8377;<?php echo $product['price'];?><span>(<?php echo $product['discount'];?> % off)</span></h6>
                   </div>
                   <div>
                         <input type="submit" name="done" value="Buy Now" class="btn btn-primary" />
                   </div>
              </div>
        </form>       
        </div>
	<?php
    }
 }
 ?>
 </div>
 <br/>
 <br/>
</div>
     <div class="container">
         <div class="row">
             <div class="col-sm-4">
                   <h3>Mobile 1 (Details)</h3>
                   <p> Suppose you give a dinner party for six guests, 
                       but your table seats only four. In how many ways 
                       can four of the six guests arrange themselves at 
                       the table? Any of the six guests can sit in the first 
                       chair. Any of the remaining five can sit in the second chair. 
                       Any of the remaining four can sit in the third chair, and any
                       of the remaining three can sit in the fourth chair. (The last 
                       two will have to stand.) So the number of possible arrangements
                       of six guests in four chairs is 6*5*4*3, which is 360. Write a 
                       program that calculates the number of possible arrangements for 
                       any number of guests and any number of chairs. (Assume there will
                       never be fewer guests than chairs.) Don’t let this get too 
                       complicated. A simple for loop should do it.</p>
             </div>

             <div class="col-sm-4">
                    <h3>Mobile 2 (Details)</h3>
                    <p> Suppose you give a dinner party for six guests, 
                        but your table seats only four. In how many ways 
                        can four of the six guests arrange themselves at 
                        the table? Any of the six guests can sit in the first 
                        chair. Any of the remaining five can sit in the second chair. 
                        Any of the remaining four can sit in the third chair, and any
                        of the remaining three can sit in the fourth chair. (The last 
                        two will have to stand.) So the number of possible arrangements
                        of six guests in four chairs is 6*5*4*3, which is 360. Write a 
                        program that calculates the number of possible arrangements for 
                        any number of guests and any number of chairs. (Assume there will
                        never be fewer guests than chairs.) Don’t let this get too 
                        complicated. A simple for loop should do it.</p>
              </div>

              <div class="col-sm-4">
                    <h3>Mobile 3 (Details)</h3>
                    <p> Suppose you give a dinner party for six guests, 
                        but your table seats only four. In how many ways 
                        can four of the six guests arrange themselves at 
                        the table? Any of the six guests can sit in the first 
                        chair. Any of the remaining five can sit in the second chair. 
                        Any of the remaining four can sit in the third chair, and any
                        of the remaining three can sit in the fourth chair. (The last 
                        two will have to stand.) So the number of possible arrangements
                        of six guests in four chairs is 6*5*4*3, which is 360. Write a 
                        program that calculates the number of possible arrangements for 
                        any number of guests and any number of chairs. (Assume there will
                        never be fewer guests than chairs.) Don’t let this get too 
                        complicated. A simple for loop should do it.</p>
              </div>
         </div>
     </div><br />
    <div class="container">
         <div class="row">
             <div class="col-sm-4">
                   <h3>Mobile 4 (Details)</h3>
                   <p> Suppose you give a dinner party for six guests, 
                       but your table seats only four. In how many ways 
                       can four of the six guests arrange themselves at 
                       the table? Any of the six guests can sit in the first 
                       chair. Any of the remaining five can sit in the second chair. 
                       Any of the remaining four can sit in the third chair, and any
                       of the remaining three can sit in the fourth chair. (The last 
                       two will have to stand.) So the number of possible arrangements
                       of six guests in four chairs is 6*5*4*3, which is 360. Write a 
                       program that calculates the number of possible arrangements for 
                       any number of guests and any number of chairs. (Assume there will
                       never be fewer guests than chairs.) Don’t let this get too 
                       complicated. A simple for loop should do it.</p>
             </div>

             <div class="col-sm-4">
                    <h3>Mobile 5 (Details)</h3>
                    <p> Suppose you give a dinner party for six guests, 
                        but your table seats only four. In how many ways 
                        can four of the six guests arrange themselves at 
                        the table? Any of the six guests can sit in the first 
                        chair. Any of the remaining five can sit in the second chair. 
                        Any of the remaining four can sit in the third chair, and any
                        of the remaining three can sit in the fourth chair. (The last 
                        two will have to stand.) So the number of possible arrangements
                        of six guests in four chairs is 6*5*4*3, which is 360. Write a 
                        program that calculates the number of possible arrangements for 
                        any number of guests and any number of chairs. (Assume there will
                        never be fewer guests than chairs.) Don’t let this get too 
                        complicated. A simple for loop should do it.</p>
              </div>

              <div class="col-sm-4">
                    <h3>Mobile 6 (Details)</h3>
                    <p> Suppose you give a dinner party for six guests, 
                        but your table seats only four. In how many ways 
                        can four of the six guests arrange themselves at 
                        the table? Any of the six guests can sit in the first 
                        chair. Any of the remaining five can sit in the second chair. 
                        Any of the remaining four can sit in the third chair, and any
                        of the remaining three can sit in the fourth chair. (The last 
                        two will have to stand.) So the number of possible arrangements
                        of six guests in four chairs is 6*5*4*3, which is 360. Write a 
                        program that calculates the number of possible arrangements for 
                        any number of guests and any number of chairs. (Assume there will
                        never be fewer guests than chairs.) Don’t let this get too 
                        complicated. A simple for loop should do it.</p>
              </div>
         </div>
     </div>
<br />
    <footer class="bg-dark text-center text-white">
     <div class="container">
         <div class="row"> 
             <div class="col-sm-12">
                  <b>This is Footer and powerde by</b> <kbd>LOGIC TYCOON</kbd>
                <br />
             <br />
             <br />
             <br />
             <br />
             <br />
             </div>
         </div>
     </div>
    </footer>

</body>
</html>
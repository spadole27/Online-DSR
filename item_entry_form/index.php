<?php
session_start();
?>
<html>
    <head>
        <title>Item Entry Panel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">

        
        <script>
          // function validateForm() {
          
          //   var fname = document.forms["myForm"]["fname"].value;
          //   var lname = document.forms["myForm"]["lname"].value;
          //   var email = document.forms["myForm"]["email"].value;
          //   var num = document.forms["myForm"]["phone"].value;
          //   var date = document.forms["myForm"]["date"].value;
          //   var gender = document.forms["myForm"]["gender"].value;
          //   var address = document.forms["myForm"]["address"].value;
          //   var hobby = document.forms["myForm"]["hobby[]"];
          //  console.log(hobby);
          //  for(i=0;i<hobby.length;i++){
          //    if(hobby[i].checked==true){
          //      alert("success");
          //      break;
          //    }else{
          //      count=1;
          //    }
          //  }
          //  if(count==1){
          //    alert ("unsuccess");
          //  }
            

            // if (fname == "" && lname=="" && email=="" && num==""&& date=="" && gender=="" && address=="" && hobby=="" ) {
            //   alert("All fields must be filled out");
            //   return false;
            // }

            // if (fname == "") {
            //   alert("Firstname must be filled out");
            //   return false;
            // }
            // if (lname == "") {
            //   alert("Lastname must be filled out");
            //   return false;
            // }
            // if (email == "") {
            //   alert("Email must be filled out");
            //   return false;
            // }
            // if (num == "") {
            //   alert("Phone number must be filled out");
            //   return false;
            // }
            // if (date == "") {
            //   alert("Date must be selected");
            //   return false;
            // }
            
            // if (gender == "") {
            //   alert("Gender must be selected");
            //   return false;
            // }
            // if (address == "") {
            //   alert("Address must be filled out");
            //   return false;
            // }

            // if (hobby="") {
            //   alert("At least one hobby must be selected");
            //   return false;
            // }

          //}
          </script>
    </head>
    <!-- style="background-image: url(img.jpg);" -->
    <body class="container" style="background-color : #4c90a5;">

    <div class="container">
    <a href="show_item.php"><button type="button" class="btn btn-primary btn-lg" >View Items </button></a>
    </div>
   <!-- success massage  -->
   <?php
    if(isset($_SESSION['status'])){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?php echo $_SESSION['status']; ?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
            unset($_SESSION['status']);
    }
    ?>



    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        

        <form name="myForm" onsubmit="return validateForm()" action="./requestItem.Controller.php" method="POST" style="background-color:rgb(190, 215, 229); ">
          <div class="col-sm-12"> 
          <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Item Entry Panel</h1>
        </div> 

               <!-- code 2 here -->
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="iName">Item Name:</label>
                    <div class="col-sm-7">
                        <input type="text" name="iname" class="form-control" id="itemName" placeholder="Item Name" required>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="iQuanity">Quantity:</label>
                    <div class="col-sm-7">
                        <input type="number" name="iquantity" class="form-control" id="iQuanity" placeholder="Item Quantity"  required>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="iSpec">Item Specification:</label>
                    <div class="col-sm-7">
                        <input type="text" name="ispec" class="form-control" id="iSpec" placeholder="Item Specification"  required>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="price">Price:</label>
                    <div class="col-sm-7">
                        <input type="number" name="price" class="form-control" id="price" placeholder="price"  required>
                    </div>
                </div>
               <!-- code 3 is here  -->


               <!-- temp1 here -->
                
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <div class="col-sm-8 ">
                        <input type="submit" class="btn btn-dark" value="Submit">
                      </div>
                      <div class="col-sm-3">
                        <input type="reset" class="btn btn-dark" value="Reset">
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-9 offset-sm-3">
                     
                  </div>
              </div>
    
          </form>
        
          </div>
          </div>
    </body>

</html>


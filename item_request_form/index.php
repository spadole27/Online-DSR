<?
session_start();
?>
<html>
    <head>
        <title>Item Request Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script>
          // function validateForm() {
          
          //   var name = document.forms["myForm"]["name"].value;
          //   var iname = document.forms["myForm"]["iname"].value;
          //   var iq = document.forms["myForm"]["iquantity"].value;
          //   var ispec = document.forms["myForm"]["ispec"].value;
          //   var email = document.forms["myForm"]["email"].value;
          //   var mobile = document.forms["myForm"]["mob"].value;

           
          //  if(count==1){
          //    alert ("unsuccess");
          //  }
            

          //   if (name == "" && iname=="" && iq=="" && ispec==""&& email=="" && mobile=="" ) {
          //     alert("All fields must be filled out");
          //     return false;
          //   }

          //   if (name == "") {
          //     alert("Name must be filled out");
          //     return false;
          //   }
          //   if (iname == "") {
          //     alert("Item name must be filled out");
          //     return false;
          //   }
          //   if (iq == "") {
          //     alert("Item quantity must be filled out");
          //     return false;
          //   }
          //   if (email == "") {
          //     alert("email number must be filled out");
          //     return false;
          //   }
          //   if (mobile == "") {
          //     alert("mobile  must be filled out");
          //     return false;
          //   }
            
          

          // }
          </script>
    </head>
    
    <body class="container" style="background-color : #4c90a5;">

    
      


    <div class="container">
 
   


    <a href="show_request.php"><button type="button" class="btn btn-primary btn-lg" >View Requests</button></a>
    </div>
    <div class="row">
    
      <div class="col-sm-3">
        </div>
       
      <div class="col-sm-6">
        

        <form name="myForm" onsubmit="return validateForm()" action="./requestItem.Controller.php" method="POST" style="background-color:rgb(190, 215, 229); ">
          <div class="col-sm-12"> 
          <h2 class="border-bottom center pb-3 mb-4" style="text-align: center;">Item Request Form</h2>
        </div> 

                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3" for="name">Name:</label>
                    <div class="col-sm-7">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" required >
                    </div>
                    
                </div>
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="branch">Branch:</label>
                    <div class="col-sm-7">
                     <select class="form-select" name="branch" id="branch" aria-label="Default select example">
              
                        <option value="" >select the branch</option>
                        <option value="CM">Computer Technology</option>
                        <option value="CE">Civil Enggineering</option>
                        <option value="EE">Electrical Enggineering</option>
                        <option value="ME">Mechanical Enggineering</option>
                        <option value="EJ">Electronics and Telecomunication</option>
                        </select>
                     
            
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="iName">Item Name:</label>
                    <div class="col-sm-7">
                        <input type="text" name="iname" class="form-control" id="itemName" placeholder="Item Name" required>
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="iquanity">Quantity:</label>
                    <div class="col-sm-7">
                        <input type="number" name="iquantity" class="form-control" id="iQuanity" placeholder="Item Quantity"  required>
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="ispec">Item Specification:</label>
                    <div class="col-sm-7">
                        <input type="text" name="ispec" class="form-control" id="ispec" placeholder="Item Specification"  required>
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="email">Email Address:</label>
                    <div class="col-sm-7">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="mobile">Mobile Number:</label>
                    <div class="col-sm-7">
                        <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Phone Number" required>
                        <div id="emailHelp" class="form-text" style="font-size:10;">Enter mobile number without leading 0 and country prefix.</div>
                    </div>
                </div>

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


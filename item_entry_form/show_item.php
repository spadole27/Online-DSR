
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    </head>

<style>

</style>
<!-- style="background-image: url(img.jpg);" -->
    <body style="background-color : #4c90a5;" >
    <div class="container">
    <a href="index.php"><button type="button" class="btn btn-primary btn-lg" >Add Data</button></a>
    </div>
    
         <h2 style="text-align:center;  color:white; "><span style="background-color:#343a40;">ITEMS LIST </span></h2>

    <div class="container">
    <table class="table table-dark" style="width=100% ;background-color:rgb(190, 215, 229); color: black;">
        <thead>
            
            <tr>
                
                <th scope="col">Item Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Specification</th>
                <th scope="col">Price</th>
                <th scope="col">Date of Entry</th>
                <th scope="col">OPERATIONS</th>
                
            </tr>
            <?php 
                include_once"config.php";
                $sql=mysqli_query($conn,"SELECT * FROM item_entry");

                while($row=mysqli_fetch_assoc($sql)){
                    // $unserializeHobby=unserialize($row['hobbies']);

           ?>

        </thead>
        <tbody>
            <tr>
              
                <td><?=$row["iname"] ?></td>
                <td><?=$row["iquantity"] ?></td>
                <td><?=$row["ispec"] ?></td>
                <td><?=$row["price"] ?></td>
                 <td><?=$row["date"] ?></td>
                
            </tr>
            <?php 
                }
            ?>
           
        </tbody>
    </table>
    </div>
    </body>

</html>


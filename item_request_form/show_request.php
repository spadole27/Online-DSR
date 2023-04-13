<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <script type="text/javascript">
   function deleter(){
    msg="delete"
    if(msg){

        alert("do you want to delete");
    }
   }


</script>
</head>

<style>
    .btn_del {
        background: #fff;
        color: darkred;
        font-size: 1.2em;
        padding: 3px 30px;
        text-decoration: none;
    }

    .btn_del:hover {
        background-color: red;
        color: #fff;
    }
</style>
<!-- style="background-image: url(img.jpg);" -->

<body style="background-color : #4c90a5;">
    <div class="container">
        <a href="index.php"><button type="button" class="btn btn-primary btn-lg">Add Data</button></a>
    </div>

    <h2 style="text-align:center;  color:white; "><span style="background-color:#343a40;">ITEM REQUSET PANEL</span></h2>

    <div class="container">
        <table class="table table-dark" style="width=100% ;background-color:rgb(190, 215, 229); color: black;">
            <thead>

                <tr>
                    <th scope="col">Token No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Specification</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date</th>
                    <th scope="col">OPERATIONS</th>

                </tr>
                <?php
                include_once "config.php";



                $sql = mysqli_query($conn, "SELECT * FROM request");

                while ($row = mysqli_fetch_assoc($sql)) {
                    // $unserializeHobby=unserialize($row['hobbies']);
                
                    ?>

                </thead>
                <tbody>
                    <tr>
                        <td><?= $row["token"] ?></td>
                        <td><?= $row["name"] ?></td>
                        <td><?= $row["branch"] ?></td>
                        <td><?= $row["iname"] ?></td>
                        <td><?= $row["iquantity"]?></td>
                        <td><?= $row["ispec"] ?></td>
                        <td><?= $row["email"] ?></td>
                        <td><?= $row["mobile"] ?></td>
                        <td><?= $row["date"] ?></td>
                        <td><a href="delete.php?id=<?php echo $row['id'] ?>" onclick="deleter()">DELETE</a></td>
                    </tr>
                    <?php
                }

              

                ?>

            </tbody>
        </table>
    </div>
</body>

</html>
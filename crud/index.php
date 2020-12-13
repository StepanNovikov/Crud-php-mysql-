<?php
    require_once("../crud/php/component.php");
    require_once("../crud/php/db.php");
    require_once("../crud/php/operation.php");

    CreateDb();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--Custom css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook">Book Store</i></h1>

            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="py-2">
                        <?php inputElemenet("<i class='fas fa-id-badge'></i>", "ID","book_id",""); ?>
                    </div>
                    <div class="pt-2">
                        <?php inputElemenet("<i class='fas fa-book'></i>", "Book Name","book_name",""); ?>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <?php inputElemenet("<i class='fas fa-people-carry'></i>", "Publisher","book_publisher",""); ?>
                        </div>
                        <div class="col">
                            <?php inputElemenet("<i class='fas fa-dollar-sign'></i>", "Price","book_price",""); ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-success", "<i class='fas fa-plus'></i>", "create","data-toggle='tooltip' data-placement='bottom' title='Create'") ?>
                        <?php buttonElement("btn-read","btn btn-primary", "<i class='fas fa-sync'></i>", "read","data-toggle='tooltip' data-placement='bottom' title='Read'") ?>
                        <?php buttonElement("btn-update","btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update","data-toggle='tooltip' data-placement='bottom' title='Update'") ?>
                        <?php buttonElement("btn-delete","btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete","data-toggle='tooltip' data-placement='bottom' title='Delete'") ?>
                    </div>
                    </div>
                    
                </form>
            </div>

            <div class="d-flex table-data">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Publisher</th>
                            <th>Book Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td>1</td>
                            <td>Book Name</td>
                            <td>Daily Tuition</td>
                            <td>44.99</td>
                            <td><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


    <script src="https://kit.fontawesome.com/955f3ae4c3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
<?php
                      // Connect to database 
                      $con = mysqli_connect("localhost","root","","geowisata");
                 
                      // mysqli_connect("servername","username","password","database_name")
                 
                      // Get all the categories from category table
                 
                      $sql = "SELECT * FROM `table_kategori`";
                      $all_kategoris = mysqli_query($con,$sql);
                 
                      // The following code checks if the submit button is clicked 

                      // and inserts the data in the database accordingly

                      if(isset($_POST['submit']))
                      {
        
                          // Store the Product name in a "name" variable
                          $kategori = mysqli_real_escape_string($con,$_POST['kategori']);
                 
                          // Store the Category ID in a "id" variable
                          $id_kategori = mysqli_real_escape_string($con,$_POST['id_kategori']); 

                          // Creating an insert query using SQL syntax and

                          // storing it in a variable.
                          $sql_insert = "INSERT INTO `table_wisata`(`kategori`, `id_kategori`) VALUES ('$kategori','$id_kategori')";
                 
                          // The following code attempts to execute the SQL query
                 
                          // if the query executes with no errors 
                 
                          // a javascript alert message is displayed
                 
                          // which says the data is inserted successfully
                 
                          if(mysqli_query($con,$sql_insert))
                          { 
                            echo '<script>alert("Data Wisata Berhasil Ditambahkan")</script>';

                          }
                 

                      }
                 

                  ?>

<!--<!DOCTYPE html>


<html lang="en">


<head>


    <meta charset="UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>


<body>


    <form method="POST">


        <label>Name of Product:</label>


        <input type="text" name="Product_name" required><br>


        <label>Select a Category</label>


        <select name="Category">


            <?php 
                 

                                  // use a while loop to fetch data 
                 

                                  // from the $all_categories variable 
                 

                                  // and individually display as an option
                 

                                  while ($category = mysqli_fetch_array(
                 

                                          $all_categories,MYSQLI_ASSOC)):; 
                 

                              ?>


            <option value="<?php echo $category["Category_ID"];
                 

                                      // The value we usually set is the primary key
                 

                                  ?>">


                <?php echo $category["Category_Name"];
                 

                                          // To show the category name to the user
                 

                                      ?>


            </option>


            //<?php
                 

                                  endwhile; 
                 

                                  // While loop must be terminated
                 

                              ?>


        </select>


        <br>


        <input type="submit" value="submit" name="submit">


    </form>


    <br>


</body>


</html>
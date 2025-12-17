<html>
<head></head>
<body>
<div class="about">
    <div class="product">
        <div class="product-listy">
            <h3>Our Category</h3>
            <ul class="product-list">
                <?php
                // Assuming you have a valid database connection stored in $conn
                $sql = "SELECT * FROM category";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <li><a href="category.php?cat=<?php echo $row['id']; ?>"><i class="fa fa-arrow-right"
                                                                               aria-hidden="true"></i>
                            <?php echo $row['categoryname']; ?>
                        </a></li>
                    <?php
                }

                // Don't forget to free the result set and close the connection
                mysqli_free_result($result);
                ?>
            </ul>
        </div>
        <div class="latest-bis">
            <a href="alto.php"><img src="images/alto.jpg" class="img-responsive"></a>
            <div class="offer">
                <p>20%</p>
                <small>Top Offer</small>
            </div>
        </div>

        <div>
            <img src="images/virat.jpg" class="img-responsive ">
        </div>
    </div>
</div>
</body>
</html>

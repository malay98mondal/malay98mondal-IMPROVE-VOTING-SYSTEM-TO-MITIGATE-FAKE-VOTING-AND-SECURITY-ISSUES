<html>
    <head>
        <title>AuthorityDisplay</title>
    </head>
    <center>
        <form action="" method="POST" enctype="multipart/form-data">
            <table width="50%" border="1" cellpadding="5" cellspacing="5">
                <thead>
                    <tr>
                        
                        <th>name</th>
                        <th>voterid</th>
                        <th>constitutionid</th>
                        <th>boothid</th>
                    </tr>
                </thead>
                <?php
		include 'connection.php';


        $sql="SELECT * FROM voterregister ";
        $sql_run = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($sql_run))
        {
            ?>

            <tr>
           
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['voterid'];?></td>
            <td><?php echo $row['constitutionid'];?></td>
            <td><?php echo $row['boothid'];?></td>
            </tr>
            <?php
        }
        ?>
            </table>
        </form>
    </center>
</html>
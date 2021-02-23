<?php include('header.php') ?>
   <?php 
    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);
    ?>

    <div class="container">
        <h2 class="text-center pt-4 text-dark">Transfer Money</h2>
       
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm pt-3">
                    <table class="table table-hover table table-striped table-bordered " id="userTable">
                        <thead class="text-center bg-dark text-white">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="py-2 text-center"><?php echo $rows['id'] ?></td>
                                    <td class="py-2 text-center"><?php echo $rows['name'] ?></td>
                                    <td class="py-2 text-center"><?php echo $rows['email'] ?></td>
                                    <td class="py-2 text-center"><?php echo $rows['currentbalance'] ?></td>
                                    <td class="text-center">
                                         <a href="selecteduserdetail.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transfer</button></a>
                                         <a class="btn-primary btn" href="showcustomer.php?id= <?php echo $rows['id'];?>" class="text-white">Show</a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>
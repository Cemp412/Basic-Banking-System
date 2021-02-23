<?php include('header.php') ?>

<body>

   

    <div class="container">
        <h2 class="text-center pt-4 text-dark">Transaction History</h2>

        <br>
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead class="text-center bg-dark text-white">
                    <tr>
                        <th scope="col text-center">S.No</S></th>
                        <th scope="col text-center">Sender</th>
                        <th scope="col text-center">Receiver</th>
                        <th scope="col text-center">Amount</th>
                        <th scope="col text-center">Date & Time</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';

                    $sql = "SELECT * FROM `transaction`";
                    $query = mysqli_query($con, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>

                        <tr">
                            <td class="py-2 text-center"><?php echo $rows['id']; ?></td>
                            <td class="py-2 text-center"><?php echo $rows['sender']; ?></td>
                            <td class="py-2 text-center"><?php echo $rows['receiver']; ?></td>
                            <td class="py-2 text-center"><?php echo $rows['balance']; ?></td>
                            <td class="py-2 text-center"><?php echo $rows['created_at']; ?></td>
                        </tr>

                    <?php
                    }

                    ?>

                </tbody>


            </table>

        </div>


    </div>

<?php include('footer.php') ?>
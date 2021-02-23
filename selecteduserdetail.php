<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from user where id=$from";
    $query = mysqli_query($con, $sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from user where id=$to";
    $query = mysqli_query($con, $sql);
    $sql2 = mysqli_fetch_array($query);

    // constraint to check input of negative value by user
    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check insufficient balance.
    else if ($amount > $sql1['currentbalance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check insufficient balance.
    else if ($amount > $sql1['currentbalance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    
    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
     if($amount< $sql1['currentbalance']){
           // deducting amount from sender's account
           $newbalance = $sql1['currentbalance'] - $amount;
           $sql = "UPDATE user SET currentbalance=$newbalance where id=$from";
           mysqli_query($con, $sql);
        
    }


    // adding amount to reciever's account
    $newbalance = $sql2['currentbalance'] + $amount;
    $sql = "UPDATE user SET currentbalance=$newbalance where id=$to";
    mysqli_query($con, $sql);

    $sender = $sql1['name'];
    $receiver = $sql2['name'];
    $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
    $query = mysqli_query($con, $sql);

    if ($query) {
            echo "<script> alert('Transaction Successful');
                     window.location='transactionhistory.php';
                 </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}

?>

<?php include('header.php') ?>
    
    <div class="container">
    <h1 class="dispay-1 text-center p-3"> Send Money</h1>
        <?php
        include 'config.php';
        $sid = $_GET['id'];
        $sql = "SELECT * FROM  user where id=$sid";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            echo "Error : " . $sql . "<br>" . mysqli_error($con);
        }
        $rows = mysqli_fetch_assoc($result);
        ?>
        <form method="post">
            <div class="form-group">
                <table class="table table-striped table-condensed table-bordered">
                    <thead class="text-center bg-dark text-white">
                        <th scope="col text-center">Id</th>
                        <th scope="col text-center">Name</th>
                        <th scope="col text-center">Email</th>
                        <th scope="col text-center">Current Balance</th>
                    </thead>
                    <tr>
                        <td class="text-center"><?php echo $rows['id'] ?></td>
                        <td class="text-center"><?php echo $rows['name'] ?></td>
                        <td class="text-center"><?php echo $rows['email'] ?></td>
                        <td class="text-center"><?php echo $rows['currentbalance'] ?></td>
                    </tr>
                </table>
            </div>
            <br><br><br>
            <label style="color : black;"><b>Transfer To:</b></label>
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose</option>
                <?php
                include 'config.php';
                $sid = $_GET['id'];
                $sql = "SELECT * FROM user where id!=$sid";
                $result = mysqli_query($con, $sql);
                if (!$result) {
                    echo "Error " . $sql . "<br>" . mysqli_error($con);
                }
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['id']; ?>">

                        <?php echo $rows['name']; ?> (Balance:
                        <?php echo $rows['currentbalance']; ?> )

                    </option>
                <?php
                }
                ?>
                <div>
            </select>
            <br>
            
            <label class="form-group"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>
        
            <div class="text-center">
                <button class="btn btn-primary mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
            <br><br>
        </form>
    </div>


   <?php include('footer.php') ?>
<?php
$Payment_id=$_GET['Payment_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="SELECT * FROM payment_information WHERE Payment_id=$Payment_id";
$query=mysqli_query($con, $sql);
$payment_information=mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Payment info</title>
</head>

<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-2">
                <br>
                <a href="payment_information_view.php" class="btn btn-success">Back</a>
            </div>
            <div class="col-md-8">

                <h1>Payment information</h1>
                <table class="table">
                    <tr>
                        <th class="text-right">Payment id:</th>
                        <td>
                            <?php echo $payment_information['Payment_id'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Student id:</th>
                        <td>
                            <?php echo $payment_information['Stu_id'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Student name:</th>
                        <td>
                            <?php echo $payment_information['Student_name'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Payment Date:</th>
                        <td>
                            <?php echo $payment_information['Payment_Date'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Payment_month:</th>
                        <td>
                            <?php echo $payment_information['Payment_month'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Amount:</th>
                        <td>
                            <?php echo $payment_information['Amount'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Due:</th>
                        <td>
                            <?php echo $payment_information['Due'];?>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-outline-secondary" onclick="myFunction()">Print this page</button>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            window.print();
        }

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

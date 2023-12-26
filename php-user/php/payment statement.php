<?php $page1 = "myaccount.php"; include 'php includes/header.php'?>
<?php include 'php includes/parsePaymentStatement.php'?>

          <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
          <?php else: ?>
        <section class="container table-container">
            <table id="datatablesSimple" class="table">
                <thead>
                    
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Payer's email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Reference number</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php
                while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
                  <tr>
                    <th scope="row"><?php echo  "#"  ?></th>
                    <td><?php echo $row['email_address'];  ?></td>
                    <td><?php echo $row['date_purchased']  ?></td>
                    <td><?php echo $row['statuses']  ?></td> 
                    <td><?php echo $row['reference'];  ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
        </section>

    </div>
    <?php endif ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>   
</body>
</html>
<?php $page1 = "transaction.php"; include 'php includes/header.php'?> 
<?php include 'php includes/parseTransactionHistory.php';
include 'php includes/parseWattPrice.php';
?> 



<?php 
                                    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)){ 
                                        $rs['price'];
                                        $price =   $rs['price'];
                                        
                                        }
 ?>
 <section class="container table-container">
            <table id="datatablesSimple" class="table">
            <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
                <thead>
                    
                  <tr>
                    <th></th>
                    <th scope="col">#</th>
                    <!-- <th scope="col">Payer's name</th> -->
                    <th scope="col">Email Address</th>
                     <th>Card Type</th>
                    <th scope="col">Card last four digits</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col"><b>Token Number</b></th>
                    <th scope="col">Amount</th>
                    <th scope="col">Watts purchased</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
                  <tr>
                    <td><a href="print.php?reference=<?php echo $row['reference'];  ?>" class="btn btn-primary" style="background-color: #1c62ac; color:#fff">View Receipt</a></td>
                    <th scope="row"><?php echo  "#"  ?></th>
                   
                    <!-- <td><?php echo $row['lastname'];  ?></td> -->
                    <td><?php echo $row['email_address'];  ?></td>
                    
                    <td><?php echo $row['card_type']; ?> </td>
                    <td><?php echo $row['card_last4'];  ?></td>
                    <td><?php echo $row['date_purchased']  ?></td>
                    <td><?php echo $row['statuses']  ?></td>
                    <td><?php echo $row['reference'];  ?></td>
                    <td>&#8358;<?php echo $row['amount'];  ?></td>
                    
                    <td><?php echo $row['amount']/$price;  ?></td>
                  </tr>

                  <?php } ?>
                </tbody>
                <div class="hidden-id">
                      <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">   
                </div>
                <?php endif ?>
              </table>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>   
</body>
</html>
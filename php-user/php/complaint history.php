<?php 
$page1 = "makecomplaint.php";
include 'php includes/header.php';
include 'php includes/parseComplaintHistory.php';

?>
       <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
      <section class="container table-container">
            <table id="datatablesSimple" class="table">
                <thead>
                    
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Meter ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Complaint</th>
                    <th scope="col">Status</th>
                    <th scope="col">Response</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                while($row = $statement->fetch(PDO::FETCH_ASSOC) ){ ?>
                  <tr>
                    <th scope="row"><?php echo "#"; ?></th>
                    <td><?php echo $row['email_address']; ?></td>
                    <td><?php echo $row['meter_id'];  ?></td>
                    <td><?php echo $row['created_at'];  ?></td>
                    <td><?php echo $row['comment'];  ?></td>
                    <td><?php echo $row['statuss'];  ?></td>
                    <td><?php echo $row['response'];  ?></td>
                  </tr>
                   <?php } ?>
                </tbody>
              </table>
        </section>
        <?php endif ?>
        <?php include 'php includes/footer.php'?>
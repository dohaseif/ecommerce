<?php
require_once "includes/sidebar.php";
require_once "includes/topbar.php";
require_once "functions/connect.php";


?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">messages</h1>


                    <table class="table table-bordered table-strapped">
                        <tr>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>View</th>
                            <th>Controls</th>
                        </tr>
                        
                            <?php
                            $Select_Message = "SELECT * FROM massage ";
                            $query_massage=$conn->query($Select_Message);
                          
                            foreach($query_massage as $message){



                            ?>
                            <tr>
                            <td><?= $message['name'] ?></td>
                            <td><?= $message['phone'] ?></td>
                            <td><?= $message['email']?></td>
                            <td class="view"><?= $message['view']==1?"read":"unread" ?></td>
                            <td>
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary modalbtn" data-toggle="modal" data-target="#e<?= $message['massage']?>" data-id="<?= $message['id']?>">
  View
</button>

<!-- Modal -->
<div class="modal fade " id="e<?= $message['massage']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $message['massage']?>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">close</button>
      </div>
    </div>
  </div>
</div>


                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </table>





                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>




 <?php
include "includes/footer.php";

?>
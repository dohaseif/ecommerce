 

<a href="?action=add" class="btn btn-primary">Add new Admin</a><br><br>


 <table class="table table-bordered table-strapped">

                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>email</th>
                            <th>address</th>
                            <th>phone</th>
                            <th>gender</th>
                            <?php
                            if ($_SESSION['privilage']<300) {
                              ?>
                                         <th>controls</th>
                                         <?php

                            }

                            ?>
                 
                        </tr>

                        <?php 
                        $counter=1;

                        $select_admin ="SELECT * FROM admins";
                        $query = $conn->query($select_admin);
                        foreach ($query as $admin) {
                            ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td><?=$admin['username']?></td>
                            <td><?=$admin['email']?></td>
                            <td><?=$admin['address']?></td>
                            <td><?=$admin['phone']?></td>
                            <td><?=$admin['gender']==0? "male":"female"?></td>
                            
                            <td>

                              <?php
                              if ($_SESSION['privilage']<300) {
                                ?>
                                <a href="?action=edit&id=<?=$admin['id']?>" class="btn btn-primary">edit</a>
                              <?php
                              }


                              ?>
                                



                                <!-- Button trigger modal -->
                                <?php
                                 if ($_SESSION['privilage']<300){
?>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#e<?= $admin['id']?>">
  Delete
</button>
<?php
                                 }

                                ?>


<!-- Modal -->
<div class="modal fade" id="e<?= $admin['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to delete <?= $admin['username']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
          <a href="functions/deleteAdmin.php?id=<?=$admin['id']?>" class="btn btn-danger">delete</a>
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
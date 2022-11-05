
<a href="?action=add" class="btn btn-primary">Add new prodect</a><br><br>


 <table class="table table-bordered table-strapped">

                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>description</th>
                            <th>img</th>
                            <th>price</th>
                            <th>category</th>
                            <th>sale</th>
                            <th>controls</th>


                        </tr>

                        <?php 
                        $counter=1;

                        $select_pro ="SELECT * FROM prodects";
                        $query = $conn->query($select_pro);

                        foreach ($query as $pro) {
                            ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td><?=$pro['name']?></td>
                            <td><?=$pro['description']?></td>
                            <td><?php
                            $pro_id=$pro['id'];

                            $select_images="SELECT * FROM images WHERE pro_id = '$pro_id' ";
                            $query_image=$conn->query($select_images);
                            foreach($query_image as $img){

                              ?>

                              <img src='images/<?= $img['image'] ?>' style="width:50px ; height: 50px;">
                              <?php
                            }
                            

                          ?></td>
                             <td><?=$pro['price']?></td>
                            <td><?=$pro['cat_id']?></td>
                            <td><?=$pro['sale']?></td>
                            
                            <td>
                              
                                <a href="?action=edit&id=<?=$pro['id']?>" class="btn btn-primary">edit</a>




                                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#e<?php echo  $pro['id']?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="e<?php echo  $pro['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to delete <?= $pro['name']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>

          <a href="functions/prodects/deletePro.php?id=<?=$pro['id']?>" class="btn btn-danger">delete</a>
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
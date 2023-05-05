
<?= $this->extend('layouts/include_folder/msg.php') ?>
<?= $this->section('content') ?>
   <div class="container">
      <div class="bg-body-tertiary mt-5 text-center py-2">
         <span class="text-dark text-uppercase text-cus fw-bold fs-1 fst-italic"></span>
         <img src="../img/ma..png" style="width:150px; height:160px;">
      </div>
   </div>

   <div class="container">
      <div class="row mt-5">
         <div class="col">
            <div class=" bg-custom mt-5">
               <div class="card=header">
                  <h2 class="display-6 m-3 text-center">Mesages</h2>
               </div>
               <div class="card-body">
                  <table class="table table-striped table-bordered table-hover text-center">
                     <thead class="thead-c">
                        <tr class=" text-light">
                           <td> Username </td>
                           <td> Email </td>
                           <td> Phone</td>
                           <td> Message</td>
                           <td> Date</td>
                           <td> View </td>
                           <td> Edit </td>
                           <td> Delete </td>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($message as $row) : ?>
                           <!-- check what's inside $row -->
                           <!-- <?= print_r($row) ?> -->
                           <tr>
                              <!-- shorthand for php echo -->
                              <td><?= $row['username'] ?></td>
                              <td><?= $row['email'] ?></td>
                              <td><?= $row['phone'] ?></td>
                              <td><?= $row['messages'] ?></td>
                              <td><?= $row['date'] ?></td>
                              <td><button type="button" class="btn viewbtn"> VIEW </button></td>
                              <td><button type="button" class="btn editbtn"> EDIT </button></td>
                              <td><button type="button" class="btn deletebtn"> DELETE </button>
                              </td>
                           </tr>
                        <?php endforeach ?>
                     <tbody>
                  </table>
               </div>

               <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
               <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"> Edit </h5>
                           <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <form action="<?=base_url('Message/update/'. $row['username'])?>" method="POST">
                        <input type="hidden" name="_method" value="PUT">

                           <div class="modal-body">
                              <input type="hidden" name="update" id="update">

                              <div class="form-group my-3">
                                 <label> Username </label>
                                 <input name="username" id="username" class="form-control" readonly="readonly">
                              </div>

                              <div class="form-group my-3">
                                 <label> Email </label>
                                 <input type="text" name="email" id="email" class="form-control"  placeholder="Enter Email">
                              </div>

                              <div class="form-group my-3">
                                 <label> Phone </label>
                                 <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter Phone">
                              </div>

                              <div class="form-group my-3">
                                 <label> Message </label>
                                 <input type="text" name="messages" id="messages" class="form-control"  placeholder="Enter Message">
                              </div>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary mx-1" data-bs-dismiss="modal">Close</button>
                              <button type="submit" name="updatedata" class="btn btn-primary mx-1">Update</button>
                           </div>
                        </form>

                     </div>
                  </div>
               </div>

               <!-- VIEW FORM (Bootstrap MODAL) -->
               <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content text-center">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"> View </h5>
                           <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                           <div class="modal-body">
                              <input type="hidden" name="update" id="update">

                              <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Username</label>
                                 <div class="col-sm-10">
                                 <p class="form-control">
                                 <?=$row['username'];?>
                                 </p>
                                 </div>
                              </div>

                              <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                 <div class="col-sm-10">
                                 <p class="form-control">
                                 <?=$row['email'];?>
                                 </p>
                                 </div>
                              </div>

                              <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Phone</label>
                                 <div class="col-sm-10">
                                 <p class="form-control">
                                 <?=$row['phone'];?>
                                 </p>
                                 </div>
                              </div>

                              <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Message</label>
                                 <div class="col-sm-10">
                                 <p class="form-control">
                                 <?=$row['messages'];?>
                                 </p>
                                 </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary mx-1" data-bs-dismiss="modal">Close</button>
                           </div>
                     </div>
                  </div>
               </div>
               <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
               <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"> Delete </h5>
                           <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>

                        <form action="<?=base_url('Message/delete/'.$row['username'])?>" method="POST">
                           <div class="modal-body">
                              <input type="hidden" name="delete" id="delete">
                              <p> Do you want to delete this Data ?</p>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary mx-1" data-bs-dismiss="modal"> NO </button>
                              <button type="submit" name="deletedata" class="btn btn-primary mx-1"> Delete </button>
                           </div>
                        </form>

                     </div>
                  </div>
               </div>

      <script>$(document).ready(function() {
   $('.editbtn').on('click', function() {
      $('#editmodal').modal('show');
      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function() {
         return $(this).text();
      }).get();

      console.log(data);
      $('#username').val(data[0]);
      $('#email').val(data[1]);
      $('#phone').val(data[2]);
      $('#messages').val(data[3]);
   });
});           </script>       

<script>$(document).ready(function() {
   $('.viewbtn').on('click', function() {
      $('#viewmodal').modal('show');
      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function() {
         return $(this).text();
      }).get();

      console.log(data);
      $('#username').val(data[0]);
      $('#email').val(data[1]);
      $('#phone').val(data[2]);
      $('#messages').val(data[3]);
   });
});</script>
<script>$(document).ready(function() {
   $('.deletebtn').on('click', function() {
      $('#deletemodal').modal('show');
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
         return $(this).text();
      }).get();
      console.log(data);
      $('#delete').val(data[0]);

   });
});
</script>




               <?= $this->endSection() ?>
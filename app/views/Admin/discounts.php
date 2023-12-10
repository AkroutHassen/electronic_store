<?php

$title = 'Page Title';
function getTitle()
{   return '<h1 class="m-0">Discounts</h1>';
}
function getContent($discounts)
{    
    ?>
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-header row">
                    <h3 class=" col-10">Discount List</h3>
                    <button type = "button" class= "btn btn-primary pl-2 pr-2 col-2" data-toggle="modal" data-target="#modal-add" >Add Discount</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="col-1" >Id</th>
                                <th class="col-7">Name</th>
                                <th class="col-2">Discount</th>
                                <th clss="col-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($discounts as $discount) { ?>
                                <tr>
                                    <td><?= $discount->id ?></td>
                                    <td><?= $discount->name ?></td>
                                    <td><?= $discount->discount ?></td>
                                    <td>
                                        <button type = "button" onclick="showcategory('<?= $discount->id ?>','<?= $discount->name ?>','<?= $discount->discount ?>')" 
                                         class= "btn btn-primary"  data-toggle="modal" data-target="#modal-show"><i class="far fa-eye"></i></button>
                                        <button type = "button" onclick="editcategory('<?= $discount->id ?>','<?= $discount->name ?>','<?= $discount->discount ?>')" 
                                        class= "btn btn-primary" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></button>
                                        <button type = "button" onclick="deletecategory('<?= $discount->id?>')" data-toggle="modal" data-target="#modal-delete" class= "btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- ./col -->
    </div>
    <?php
}
?>
<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">Add Discount</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=discounts/create" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="form-group col-6">
                                <label for="add_name">Discount Name</label>
                                <input type="text" class="form-control" id="add_name" name="name"
                                    placeholder="Enter name">
                            </div>
                            <div class="form-group col-6">
                                <label for="add_discount">Discount</label>
                                <input type="number" class="form-control" id="add_discount" step="0.01" name="discount"
                                    placeholder="Enter name">
                            </div>
                            
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save changes">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header ">
            <h4 class="modal-title">Edit Discount</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/?url=discounts/update" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="form-group col-6">
                    <input id="edit_id" type="number" name="id" class="form-control" hidden required>
                    <label for="edit_name">Categorie Name</label>
                    <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-group col-6">
                        <label for="edit_discount">Discount</label>
                        <input type="number" class="form-control" id="edit_discount" step="0.01" name="discount"
                                    placeholder="Enter name">
                    </div>
                  
                </div>              
              </div>
            
            
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
 <div class="modal fade" id="modal-show">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">Show Discount</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="form-group col-6">
                            <label for="show_name">Categorie Name</label>
                            <input type="text" class="form-control" id="show_name" disabled name="name"
                                placeholder="Enter name">
                        </div>
                        <div class="form-group col-6">
                            <label for="show_discount">Discount</label>
                            <input type="number" class="form-control" id="show_discount" step="0.01" name="discount"
                                    placeholder="Enter name">
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">Delete Discount</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=discounts/delete" method="POST">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group col-12">
                            <p>Are you sure you want to delete this Discount?</p>
                            <input id="delete_id" type="number" name="id" class="form-control" hidden required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    function editcategory(id, name, discount ) {
        document.getElementById("edit_id").value = id;
        document.getElementById("edit_name").value = name;
        document.getElementById("edit_discount").value = discount;
    }
    function deletecategory(id) {
        document.getElementById("delete_id").value = id;

    }   
    function showcategory(id, name, discount ) {
        document.getElementById("show_name").value = name;
        document.getElementById("show_discount").value = discount;
    }
</script>
<?php
include 'app/views/Admin/layout.php';

?>
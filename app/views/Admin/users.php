<?php

$title = 'Page Title';
function getTitle()
{   return '<h1 class="m-0">Clients</h1>';
}
function getContent($users)
{    
    ?>
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-header row">
                    <h3 class=" col-10">Clients List</h3>
                    <!-- <button type = "button" class= "btn btn-primary pl-2 pr-2 col-2" data-toggle="modal" data-target="#modal-add" >Add User</button> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="col-1" >Id</th>
                                <th class="col-2">Name</th>
                                <th class="col-2">Email</th>
                                <th class="col-1">Phone</th>
                                <th class="col-2">Address</th>
                                <th class="col-1">Country</th>
                                <th class="col-1">City</th>
                                <th class="col-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) { ?>
                                <tr>
                                    <td><?= $user['id'] ?></td>
                                    <td><?= $user['name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td><?= $user['phone'] ?></td>
                                    <td><?= $user['address'] ?></td>
                                    <td><?= $user['country'] ?></td>
                                    <td><?= $user['city'] ?></td>
                                    <td>
                                        <button type = "button" onclick="showUser('<?= $user['id'] ?>','<?= $user['name'] ?>','<?= $user['email'] ?>','<?= $user['phone'] ?>','<?= $user['address'] ?>','<?= $user['country'] ?>','<?= $user['city'] ?>','<?= $user['postal_code'] ?>')" 
                                         class= "btn btn-primary"  data-toggle="modal" data-target="#modal-show"><i class="far fa-eye"></i></button>
                                        <button type = "button" onclick="deleteUser('<?= $user['id']?>')" data-toggle="modal" data-target="#modal-delete" class= "btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                            <th class="col-1" >Id</th>
                                <th class="col-2">Name</th>
                                <th class="col-2">Email</th>
                                <th class="col-1">Phone</th>
                                <th class="col-2">Address</th>
                                <th class="col-1">Country</th>
                                <th class="col-1">City</th>
                                <th class="col-2">Actions</th>
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
<div class="modal fade" id="modal-show">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">show User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=users/create" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="form-group col-6">
                                <label for="show_name">User Name</label>
                                <input type="text" class="form-control" id="show_name" disabled name="name"
                                    placeholder="Enter name">
                            </div>

                            <div class="form-group col-6">
                                <label for="show_email">User Email</label>
                                <input type="email" class="form-control" id="show_email" disabled name="email"
                                    placeholder="Enter email">  
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-between">
                                <div class="form-group col-12">
                                    <label for="show_phone">User Phone</label>
                                    <input type="text" class="form-control" id="show_phone" disabled name="phone"
                                        placeholder="Enter phone">
                                </div>
                               
                        </div>
                        <div class="d-flex justify-content-between">
                                <div class="form-group col-6">
                                    <label for="show_country">User Country</label>
                                    <input type="text" class="form-control" id="show_country" disabled name="country"
                                        placeholder="Enter country">
                                </div>
                                <div class="form-group col-6">
                                    <label for="show_city">User City</label>
                                    <input type="text" class="form-control" id="show_city" disabled name="city"
                                        placeholder="Enter city">
                                </div>
                               
                        </div>
                        <div class="d-flex justify-content-between">
                                <div class="form-group col-6">
                                    <label for="show_showress">User address</label>
                                    <input type="text" class="form-control" id="show_address" disabled name="address"
                                        placeholder="Enter address">
                                </div>
                                <div class="form-group col-6">
                                    <label for="show_postal_code">User Postal Code</label>
                                    <input type="text" class="form-control" id="show_postal_code" disabled name="postal_code"
                                        placeholder="Enter postal code">
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

<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">Delete Categorie</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=users/delete" method="POST">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group col-12">
                            <p>Are you sure you want to delete this User?</p>
                            <p><span class="text-warning">Warning : </span>This will delete all orders within the selected User.</p>
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
  
    function deleteUser(id) {
        document.getElementById("delete_id").value = id;
    }   
    function showUser(id, name, email, phone, address, country, city, postal_code ) {
        document.getElementById("show_name").value = name;
        document.getElementById("show_email").value = email;
        document.getElementById("show_phone").value = phone;
        document.getElementById("show_address").value = address;
        document.getElementById("show_country").value = country;
        document.getElementById("show_city").value = city;
        document.getElementById("show_postal_code").value = postal_code;
    }
</script>
<?php
include 'app/views/Admin/layout.php';

?>
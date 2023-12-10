<?php

$title = 'Page Title';
function getTitle()
{
    return '<h1 class="m-0">Orders</h1>';
}
function getContent($orders)
{
    ?>
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-header row">
                    <h3 class=" col-10">Order List</h3>
                    <button type="button" class="btn btn-primary pl-2 pr-2 col-2" data-toggle="modal"
                        data-target="#modal-add">Add Order</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Address</th>
                                <th>Client</th>
                                <th>Phone Number</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($orders == null)
                                echo "<tr></tr>";
                            else
                                foreach ($orders as $order) { ?>
                                    <tr>
                                        <td>
                                            <?= $order->id ?>
                                        </td>
                                        <td>
                                            <?= $order->date ?>
                                        </td>
                                        <td>
                                            <?php echo substr($order->order_address, 0, 49) ; if(strlen($order->order_address)>=49)   echo '...'; ?>
                                        </td>
                                        <td>
                                            <?= $order->user_id . ' : ' . $order->user_name ?>
                                        </td>
                                        <td>
                                            <?= $order->user_phone ?>
                                        </td>
                                        <td>
                                            <?= $order->total_amount ?>
                                        </td>
                                        <td>
                                            <?= $order->status == 1 ? 'Paid' : ($order->status == 2 ? 'Canceld' : 'Unpaid') ?>
                                        </td>
                                        <td>
                                            <button type="button"
                                                onclick="showOrder('<?= $order->id ?>','<?= $order->date ?>','<?= $order->order_address ?>','<?= $order->user_id ?>','<?= $order->user_phone ?>','<?= $order->total_amount ?>', '<?= $order->status ?>')"
                                                class="btn btn-primary" data-toggle="modal" data-target="#modal-show"><i
                                                    class="far fa-eye"></i></button>
                                            <button type="button"
                                                onclick="editOrder('<?= $order->id ?>','<?= $order->date ?>','<?= $order->order_address ?>','<?= $order->user_id ?>','<?= $order->user_phone ?>','<?= $order->total_amount ?>', '<?= $order->status ?>')"
                                                class="btn btn-primary" data-toggle="modal" data-target="#modal-edit"><i
                                                    class="fa fa-edit"></i></button>
                                            <button type="button" onclick="deleteOrder('<?= $order->id ?>')" data-toggle="modal"
                                                data-target="#modal-delete" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Address</th>
                                <th>Client</th>
                                <th>Phone Number</th>
                                <th>Total Amount</th>
                                <th>Status</th>
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
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">Edit Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=orders/update" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div div class="form-group col-6">
                                <input type="number" name="id" id="edit_id" hidden required>
                                <label for="edit_client">Client</label>
                                <select name="user" id="edit_client" class="form-control ">
                                    <?php
                                    if (isset($users)) {
                                        foreach ($users as $key => $user) {
                                            ?>
                                            <option value='<?= $user['id'] ?>'>
                                                <?php echo $user['id'] . ' : ' . $user['name']; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="edit_status">Order Status</label>
                                <select name="status" id="edit_status" class="form-control">
                                    <option value="0">Unpaid</option>
                                    <option value="1">Paid</option>
                                    <option value="2">Canceled</option>
                                </select>
                            </div>
                            
                            
                        </div>
                        <div class="form-group col-12">
                                <label for="edit_address">Order Adress</label>
                                <input type="text" class="form-control" id="edit_address" name="address"
                                    placeholder="Enter address">
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
<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">Add Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=orders/create" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body" id="add_card">
                        <div class="d-flex justify-content-between">
                            <div div class="form-group col">
                                <label for="add_client">Client</label>
                                <select name="user" id="add_client" class="form-control ">
                                    <option>Choose a Client</option>
                                    <?php
                                    if (isset($users)) {
                                        foreach ($users as $key => $user) {
                                            ?>
                                            <option value='<?= $user['id'] ?>'>
                                                <?php echo $user['id'] . ' : ' . $user['name']; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="add_status">Order Status</label>
                                <select name="status" id="add_status" class="form-control">
                                    <option value="0" selected>Unpaid</option>
                                    <option value="1">Paid</option>
                                    <option value="2">Canceled</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-12">
                                <label for="add_address">Order Address</label>
                                <input type="text" class="form-control" id="add_address" name="address"
                                    placeholder="Enter address">
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
<div class="modal fade" id="modal-show">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">Show Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div div class="form-group col-6">
                            <label for="show_client">Client</label>
                            <select name="product" id="show_client" disabled class="form-control ">
                                <option></option>
                                <?php
                                if (isset($users)) {
                                    foreach ($users as $key => $user) {
                                        ?>
                                        <option value='<?= $user['id'] ?>'>
                                                <?php echo $user['id'] . ' : ' . $user['name']; ?>
                                            </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col">
                                <label for="show_status">Order Status</label>
                                <select name="status" id="show_status" disabled class="form-control">
                                    <option value="0" >Unpaid</option>
                                    <option value="1">Paid</option>
                                    <option value="2">Canceled</option>
                                </select>
                            </div>
                        
                    </div>
                    <div class="form-group col-12">
                            <label for="show_address">Order Adress</label>
                            <input type="text" class="form-control" disabled id="show_address" name="name"
                                placeholder="Enter name">
                        </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

            <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">Delete Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=orders/delete" method="POST">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group col-12">
                            <p>Are you sure you want to delete this Order?</p>
                            <p><span class="text-warning">Warning : </span>This will delete all order Details the selected Order.</p>
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
    function editOrder(id, date, address, client, phone, total, status) {
        document.getElementById("edit_id").value = id;
        document.getElementById("edit_address").value = address;
        document.getElementById("edit_client").value = client;
        document.getElementById("edit_status").value = status;
    }
    function deleteOrder(id) {
        document.getElementById("delete_id").value = id;
    }
    function showOrder(id, date, address, client, phone, total, status) {
        document.getElementById("show_address").value = address;
        document.getElementById("show_client").value = client;
        document.getElementById("show_status").value = status;
    }

</script>
<?php
include 'app/views/Admin/layout.php';

?>
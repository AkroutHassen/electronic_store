<?php

$title = 'Page Title';
function getTitle()
{
    return '<h1 class="m-0">Orders Details</h1>';
}
function getContent($orderDetails)
{
    ?>
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-header row">
                    <h3 class=" col-10">Order Details List</h3>
                    <button type="button" class="btn btn-primary pl-2 pr-2 col-2" data-toggle="modal"
                        data-target="#modal-add">Add Order Detail</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Product Name</th>
                                <th>Client Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Order Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($orderDetails == null)
                                echo "<tr></tr>";
                            else
                                foreach ($orderDetails as $orderDetail) { ?>
                                    <tr>
                                        <td>
                                            <?= $orderDetail->order_id; ?>
                                        </td>
                                        <td>
                                            <?= $orderDetail->product_id . ' : '. $orderDetail->product_name ?>
                                        </td>
                                        <td>
                                            <?= $orderDetail->user_id . ' : ' . $orderDetail->user_name; ?>
                                        </td>
                                        <td>
                                            <?= $orderDetail->quantity ?>
                                        </td>
                                        <td>
                                            <?= $orderDetail->price ?>
                                        </td>
                                        <td>
                                            <?= $orderDetail->price * $orderDetail->quantity ?>
                                        </td>
                                        <td>
                                            <?= $orderDetail->order_status == 1 ? 'Paid' : ($orderDetail->order_status == 2 ? 'Canceld' : 'Unpaid') ?>
                                        </td>
                                        <td>
                                            <button type="button"
                                                onclick="showOrderDetails('<?= $orderDetail->id ?>','<?= $orderDetail->order_id ?>','<?= $orderDetail->product_id?>','<?= $orderDetail->user_id ?>','<?= $orderDetail->quantity ?>','<?= $orderDetail->price ?>', '<?= $orderDetail->order_status ?>')"
                                                class="btn btn-primary" data-toggle="modal" data-target="#modal-show"><i
                                                    class="far fa-eye"></i></button>
                                            <button type="button"
                                                onclick="editOrderDetails('<?= $orderDetail->id ?>','<?= $orderDetail->order_id ?>','<?= $orderDetail->product_id?>','<?= $orderDetail->user_id ?>','<?= $orderDetail->quantity ?>','<?= $orderDetail->price ?>', '<?= $orderDetail->order_status ?>')"
                                                class="btn btn-primary" data-toggle="modal" data-target="#modal-edit"><i
                                                    class="fa fa-edit"></i></button>
                                            <button type="button" onclick="deleteOrder('<?= $orderDetail->id ?>')" data-toggle="modal"
                                                data-target="#modal-delete" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Order Id</th>
                                <th>Product Name</th>
                                <th>Client Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Order Status</th>
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
                            <input type="number" name="id" id="edit_id" hidden>
                            <div div class="form-group col">
                                <label for="edit_order">Orders</label>
                                <select name="order" id="edit_order" class="form-control ">
                                    <?php
                                        if (isset($allOrders)) {
                                            foreach ($allOrders as $key => $order) {
                                                ?>
                                                <option value='<?= $order->id ?>'>
                                                    <?php echo $order->id ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div div class="form-group col">
                                <label for="edit_product">Products</label>
                                <select name="product" id="edit_product" class="form-control ">
                                    <?php
                                        if (isset($productsAvailable)) {
                                            foreach ($productsAvailable as $key => $product) {
                                                ?>
                                                <option value='<?= $product->id ?>'>
                                                    <?php echo $product->id . ' : ' . $product->name ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group col-6">
                                    <label for="edit_quantity">Order Quantity</label>
                                    <input type="number" min="1" class="form-control" id="edit_quantity" name="qty"
                                        placeholder="Enter quantity">
                            </div>
                            <div class="form-group col-6">
                                    <label for="edit_price">Order Price</label>
                                    <input type="number" class="form-control" step = "0.01" min ="0" id="edit_price" name="price"
                                        placeholder="Enter price">
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
<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title">Add Order Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=orderdetails/create" method="POST" >
                <div class="modal-body">
                    <div class="card-body" id="add_card">
                        <div class="d-flex justify-content-between">
                            <div div class="form-group col">
                                <label for="add_order">Orders</label>
                                <select name="order" id="add_order" class="form-control ">
                                    <option>Choose an Order</option>
                                    <?php
                                        if (isset($allOrders)) {
                                            foreach ($allOrders as $key => $order) {
                                                ?>
                                                <option value='<?= $order->id ?>'>
                                                    <?php echo $order->id ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div div class="form-group col">
                                <label for="add_product">Products</label>
                                <select name="product" id="add_product" class="form-control " onchange="getDetails()">
                                    <option>Choose a product</option>
                                    <?php
                                        if (isset($productsAvailable)) {
                                            foreach ($productsAvailable as $key => $product) {
                                                ?>
                                                <option value='<?= $product->id ?>'>
                                                    <?php echo $product->id . ' : ' . $product->name ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group col-6">
                                    <label for="add_quantity">Order Quantity</label>
                                    <input type="number" class="form-control" min="1" value="1" id="add_quantity" name="quantity"
                                        placeholder="Enter quantity">
                            </div>
                            <div class="form-group col-6">
                                    <label for="add_price">Order Price</label>
                                    <input type="number" class="form-control" step="0.01" min="0" value="0" id="add_price" name="price"
                                        placeholder="Enter price">
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
                            <div div class="form-group col">
                                <label for="show_order">Orders</label>
                                <select name="order" id="show_order" disabled class="form-control ">
                                    <option>Choose an Order</option>
                                    <?php
                                        if (isset($allOrders)) {
                                            foreach ($allOrders as $key => $order) {
                                                ?>
                                                <option value='<?= $order->id ?>'>
                                                    <?php echo $order->id ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div div class="form-group col">
                                <label for="show_product">Products</label>
                                <select name="product" id="show_product" disabled class="form-control ">
                                    <option>Choose a product</option>
                                    <?php
                                        if (isset($productsAvailable)) {
                                            foreach ($productsAvailable as $key => $product) {
                                                ?>
                                                <option value='<?= $product->id ?>'>
                                                    <?php echo $product->id . ' : ' . $product->name ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group col-6">
                                    <label for="show_quantity">Order Quantity</label>
                                    <input type="text" class="form-control" id="show_quantity" disabled name="qty"
                                        placeholder="Enter quantity">
                            </div>
                            <div class="form-group col-6">
                                    <label for="show_price">Order Price</label>
                                    <input type="text" class="form-control" id="show_price" disabled name="price"
                                        placeholder="Enter price">
                            </div>
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
            <form action="/?url=orderdetails/delete" method="POST">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group col-12">
                            <p>Are you sure you want to delete this Order Detail?</p>
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
    function editOrderDetails(id, order_id, product_id, user_id, quantity, price, status) {
        document.getElementById("edit_order").value = order_id;
        document.getElementById("edit_product").value = product_id;
        document.getElementById("edit_quantity").value = quantity;
        document.getElementById("edit_price").value = price;
    }
    function deleteOrder(id) {
        document.getElementById("delete_id").value = id;
    }
    function showOrderDetails(id, order_id, product_id, user_id, quantity, price, status) {
        document.getElementById("show_order").value = order_id;
        document.getElementById("show_product").value = product_id;
        document.getElementById("show_quantity").value = quantity;
        document.getElementById("show_price").value = price;
    }
    function getPrice(){
        var product = document.getElementById("add_product").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
                document.getElementById("add_price").value = parseFloat(this.responseText);
            }
        };
        xhttp.open("GET", "/?url=products/getPrice&id="+product, true);
        xhttp.send();
    
    }
    function getMaxQty(){
        var product = document.getElementById("add_product").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
                document.getElementById("add_quantity").max = parseInt(this.responseText);
            }
        };
        xhttp.open("GET", "/?url=products/getMaxQty&id="+product, true);
        xhttp.send();
    }
    function getDetails(){
        getPrice();
        document.getElementById("add_quantity").value = 1;
        getMaxQty();
    }
</script>
<?php
include 'app/views/Admin/layout.php';

?>
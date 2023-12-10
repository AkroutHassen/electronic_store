<?php

$title = 'Page Title';
function getTitle()
{
    return '<h1 class="m-0">Products</h1>';
}
function getContent($products, $product_images = null)
{
    ?>
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-header row">
                    <h3 class=" col-10">Product List</h3>
                    <button type="button" class="btn btn-primary pl-2 pr-2 col-2" data-toggle="modal"
                        data-target="#modal-add">Add product</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Categorie</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product) { ?>
                                <tr>
                                    <td>
                                        <?= $product->id ?>
                                    </td>
                                    <td>
                                        <?= $product->product_name ?>
                                    </td>
                                    <td>
                                        <?= $product->brand ?>
                                    </td>
                                    <td>
                                        <?= $product->category_name ?>
                                    </td>
                                    <td>
                                        <?= $product->quantity ?>
                                    </td>
                                    <td>
                                        <?= $product->price ?>
                                    </td>

                                    <td>
                                        <button type="button"
                                            onclick="showProduct('<?= $product->id ?>','<?= $product->product_name ?>','<?= $product->brand ?>','<?= $product->category_id ?>','<?= $product->stock ?>','<?= $product->quantity ?>','<?= $product->price ?>','<?= $product->image ?>','<?= $product->discount_id ?>','<?= $product->description ?>')"
                                            class="btn btn-primary" data-toggle="modal" data-target="#modal-show"><i
                                                class="far fa-eye"></i></button>
                                        <button type="button"
                                            onclick="editProduct('<?= $product->id ?>','<?= $product->product_name ?>','<?= $product->brand ?>','<?= $product->category_id ?>','<?= $product->stock ?>','<?= $product->quantity ?>','<?= $product->price ?>','<?= $product->image ?>','<?= $product->discount_id ?>','<?= $product->description ?>')"
                                            class="btn btn-primary" data-toggle="modal" data-target="#modal-edit"><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" onclick="deleteProduct('<?= $product->id ?>')" data-toggle="modal"
                                            data-target="#modal-delete" class="btn btn-danger"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Categorie</th>
                                <th>Quantity</th>
                                <th>Price</th>
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
            <h4 class="modal-title">Edit Product</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/?url=products/update" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="form-group col-6">
                    <input id="edit_id" type="number" name="id" class="form-control" hidden required>
                    <label for="edit_name">Product Name</label>
                    <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-group col-6">
                    <label for="edit_brand">Brand</label>
                    <input type="text" class="form-control" id="edit_brand" name="brand" placeholder="Enter brand">
                  </div>
                </div>
                <div class="d-flex justify-content-between">
                  <div class="form-group col-6">
                    <label for="edit_categ">Category</label>
                    <select name="category" id="edit_categ" class="form-control ">
                      <?php 
                      if(isset($categories)){
                        foreach ($categories as $key=>$category) {
                          ?>
                          <option value='<?=$category->id?>'><?php echo $category->name; ?></option>
                          <?php
                        }
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="edit_stock">In Stock</label>
                    <select name="stock" id="edit_stock" class="form-control">
                          <option value='0'>False</option>
                          <option value='1'>True</option>
                    </select>
                  </div>
                </div>
                <div class="d-flex justify-content-between">
                  <div class="form-group col-6">
                    <label for="edit_qty">Quantity</label>
                    <input type="number" name="quantity" class="form-control" id="edit_qty" placeholder="Enter quantity">
                  </div>
                  <div class="form-group col-6">
                    <label for="edit_price">Price</label>
                    <input type="number" class="form-control" name="price" id="edit_price" step = "0.01" placeholder="Enter quantity">
                  </div>
                </div>
                
                <div class="d-flex">
                <div class="form-group col-6">
                    <label for="edit_image">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        
                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                        <input type="file" class="form-control custom-file-input" id="edit_image" name="add_image" accept=".png,.jpg,.jpeg,.gif">
                        <label class="custom-file-label" for="edit_image">Choose file</label>
                      </div>
                                        
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="edit_discount">Discount</label>
                    <select name="discount" id="edit_discount" class="form-control ">
                        <option></option>
                        <?php 
                        if(isset($discounts)){
                          foreach ($discounts as $key=>$discount) {
                            ?>
                            <option value='<?=$discount->id?>'><?php echo $discount->name . ' : ' . $discount->discount*100 . '%'; ?></option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                  </div>
                </div>
                <div class="d-block" id="edit_uploaded_image">
                        
                </div>  
                
                <div class="form-group">
                  <label for="edit_desc">Description</label>
                  <textarea class="form-control" name = "description" id="edit_desc"> </textarea>
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
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=products/create" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="form-group col-6">
                                <label for="add_name">Product Name</label>
                                <input type="text" class="form-control" id="add_name" name="name"
                                    placeholder="Enter name">
                            </div>
                            <div class="form-group col-6">
                                <label for="add_brand">Brand</label>
                                <input type="text" class="form-control" id="add_brand" name="brand"
                                    placeholder="Enter brand">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group col-6">
                                <label for="add_categ">Category</label>
                                <select name="category" id="add_categ" class="form-control ">
                                    <option></option>
                                    <?php
                                    if (isset($categories)) {
                                        foreach ($categories as $key => $category) {
                                            ?>
                                            <option value='<?= $category->id ?>'>
                                                <?php echo $category->name; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="add_stock">In Stock</label>
                                <select name="stock" id="add_stock" class="form-control">
                                    <option value='0'>False</option>
                                    <option value='1'>True</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group col-6">
                                <label for="add_qty">Quantity</label>
                                <input type="number" name="quantity" class="form-control" id="add_qty"
                                    placeholder="Enter quantity">
                            </div>
                            <div class="form-group col-6">
                                <label for="add_price">Price</label>
                                <input type="number" class="form-control" name="price" id="add_price" step="0.01"
                                    placeholder="Enter quantity">
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="form-group col-6">
                                <label for="add_image">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                                        <input type="file" class="form-control" name="add_image" id="add_image">
                                        <label class="custom-file-label" for="add_image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="add_discount">Discount</label>
                                <select name="discount" id="add_discount" class="form-control ">
                                    <option></option>
                                    <?php
                                    if (isset($discounts)) {
                                        foreach ($discounts as $key => $discount) {
                                            ?>
                                            <option value='<?= $discount->id ?>'>
                                                <?php echo $discount->name . ' : ' . $discount->discount * 100 . '%'; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea class="form-control" name="description" id="desc"> </textarea>
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
                <h4 class="modal-title">Show Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="form-group col-6">
                            <label for="show_name">Product Name</label>
                            <input type="text" class="form-control" id="show_name" disabled name="name"
                                placeholder="Enter name">
                        </div>
                        <div class="form-group col-6">
                            <label for="show_brand">Brand</label>
                            <input type="text" class="form-control" id="show_brand" name="brand"
                                placeholder="Enter brand" disabled>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group col-6">
                            <label for="show_categ">Category</label>
                            <select name="category" id="show_categ" class="form-control " disabled>
                                <option value=""></option>
                                <?php
                                if (isset($categories)) {
                                    foreach ($categories as $key => $category) {
                                        ?>
                                        <option value='<?= $category->id ?>'>
                                            <?php echo $category->name; ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="show_stock">In Stock</label>
                            <select name="stock" id="show_stock" class="form-control" disabled>
                                <option value=""></option>
                                <option value='0'>False</option>
                                <option value='1'>True</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group col-6">
                            <label for="show_qty">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="show_qty"
                                placeholder="Enter quantity" disabled>
                        </div>
                        <div class="form-group col-6">
                            <label for="show_price">Price</label>
                            <input type="number" class="form-control" name="price" disabled id="show_price" step="0.01"
                                placeholder="Enter quantity">
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="form-group col-6">
                            <label for="show_image">File input</label>
                            <div id="show_uploaded_image">

                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="show_discount">Discount</label>
                            <select name="discount" disabled id="show_discount" class="form-control ">
                                <option></option>
                                <?php
                                if (isset($discounts)) {
                                    foreach ($discounts as $key => $discount) {
                                        ?>
                                        <option value='<?= $discount->id ?>'>
                                            <?php echo $discount->name . ' : ' . $discount->discount * 100 . '%'; ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="show_desc">Description</label>
                        <textarea disabled class="form-control" name="description" id="show_desc"> </textarea>
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
                <h4 class="modal-title">Delete Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/?url=products/delete" method="POST">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group col-12">
                            <p>Are you sure you want to delete this product?</p>
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
    function editProduct(id, name, brand, category, stock, quantity, price, image, discount, description) {
        document.getElementById("edit_id").value = id;
        document.getElementById("edit_name").value = name;
        document.getElementById("edit_brand").value = brand;
        document.getElementById("edit_categ").value = category;
        document.getElementById("edit_stock").value = stock;
        document.getElementById("edit_qty").value = quantity;
        document.getElementById("edit_price").value = price;
        if (image)
            document.getElementById("edit_uploaded_image").innerHTML = "<img src=\"assets/dist/img/" + image + "\" alt=\"image\" class=\"d-block\" style=\"width:100px;\">";
        else
            document.getElementById("edit_uploaded_image").innerHTML = "";
        document.getElementById("edit_discount").value = discount;
        document.getElementById("edit_desc").value = description;

    }
    function deleteProduct(id) {
        document.getElementById("delete_id").value = id;
    }
    function showProduct(id, name, brand, category, stock, quantity, price, image, discount, description) {
        document.getElementById("show_name").value = name;
        document.getElementById("show_brand").value = brand;
        document.getElementById("show_categ").value = category;
        document.getElementById("show_stock").value = stock;
        document.getElementById("show_qty").value = quantity;
        document.getElementById("show_price").value = price;
        if (image)
            document.getElementById("show_uploaded_image").innerHTML = "<img src=\"assets/dist/img/" + image + "\" alt=\"image\" class=\"d-block\" style=\"width:100px;\">";
        else
            document.getElementById("show_uploaded_image").innerHTML = "";
        document.getElementById("show_discount").value = discount;
        document.getElementById("show_desc").value = description;

    }
</script>
<?php
include 'app/views/Admin/layout.php';

?>
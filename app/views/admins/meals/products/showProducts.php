<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>
<?php flash('product_message'); ?>

<div class="col-md-12 card card-body">
<div class="mb-3 col-md-12 d-flex bd-highlight">
<h3 class="mr-auto p-2 bd-highlight">Show Meal</h3> 
<a href="<?php echo URLROOT; ?>/products/addProducts" class="p-2 bd-highlight btn btn-light"><i class="fa fa-plus-circle"></i> Add</a>
<a href="<?php echo URLROOT; ?>/admins/manageMeals" class="p-2 bd-highlight btn btn-light"><i class="fa fa-backward"></i> Back</a>

   </div>
<div class="col-sm-8 col-lg-8">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                    <?php if(!empty($data['products'])) : ?>
                     <?php foreach($data['products'] as $product) : ?>   
                       
    <div class="dropdown float-right">   
        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
            <i class="fa fa-cog"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-menu-content">
                <a class="dropdown-item" href="editProduct/<?php echo $product->id;?>">Edit</a>
                <a class="dropdown-item" href="deleteProduct/<?php echo $product->id;?>">Delete</a>
            </div>
        </div>
    </div>

<div class="text-white"><?php echo $product->title; ?></div>
 <hr>
    
                     <?php endforeach; ?>
                     <?php else: ?>
                     <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="addProducts">Add</a>
                                 
                                </div>
                                </div>
                        </div>
                     <p class="text-light mt-1">No records</p>
                    </div>
                <?php endif; ?>
                </div>
            </div>
<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>
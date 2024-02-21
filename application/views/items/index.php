<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Products

        </h1>
    </div>
    <div class="col-md-12">
        <?php 
        echo $this->session->flashdata('errorMessage');
        echo $this->session->flashdata('successMessage'); 
        ?>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            <select class="form-control filter-items " data-column="7" name="test">
                <option value="">Filter By Supplier</option>
                <?php foreach ($suppliers as $supplier): ?>
                <option value="<?php echo $supplier->name ?>"><?php echo $supplier->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <select class="form-control filter-items" data-column="2" name="test">
                <option value="">Filter By Category</option>
                <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category->name ?>"><?php echo $category->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search by Part Number" name="partNumber"
                id="partNumberSearch" />
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search by OEM" name="oem" id="oemSearch" />
        </div>
    </div>
    <div class="col-md-4">
        <span class="pull-right" style="font-size: 22px;">Inventory Value: ₱<span
                id="total"><?php echo $total; ?></span></span>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="fa fa-inbox fa-fw"></span> Items List 
                <span class="show-hide-column-wrapper pull-right">
                    <i class="fa fa-columns column-toggle-btn" style="font-size:20px"></i>
                    <div class="show-hide-overlay">
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="1" checked type="checkbox">Barcode</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="2" checked type="checkbox">Item Name</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="3" checked type="checkbox">Part Number</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="4" checked type="checkbox">OEM</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="5" checked type="checkbox">Supplier</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="6" checked type="checkbox">Category</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="7" checked type="checkbox">Capital</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="8" checked type="checkbox">Price</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="9" checked type="checkbox">Stocks</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="10" checked type="checkbox">Reordering Level</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input name="11" checked type="checkbox">Total</label>
                            </div>
                        </div>
                    </div> 
                </span>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table class="table table-responsive table-hover table-bordered" id="item_tbl" width="100%">
                 
                </table>
            </div> 
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>  

<div class="overlay-body"></div>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->views("templates/header.php") ?>
</head>

<body id="page-top">

    <?php $this->load->views("templates/sidebar.php") ?>
    <div id="wrapper">

        <?php $this->load->views("templates/footer.php") ?>

        <div class="form-group">
            <label for="name">Id</label>
            <input class="form-control <?php echo form_error('id') ? 'is-invalid' : '' ?>" type="text" name="name" placeholder="Id your" value="<?php echo $edit->id ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('id') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="price">Menu</label>
            <input class="form-control <?php echo form_error('price') ? 'is-invalid' : '' ?>" type="number" name="price" min="0" placeholder="Product price" value="<?php echo $product->price ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('menu') ?>
            </div>
        </div>

        <input class="btn btn-success" type="submit" name="btn" value="Save" />
        </form>

    </div>

    <div class="card-footer small text-muted">
        * required fields
    </div>


    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->views("templates/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
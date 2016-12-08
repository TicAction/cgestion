<?php include('admin/header.ctp'); ?>
<?php include('admin/navbar.ctp'); ?>

    <div class="container">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php include('sidebar.ctp'); ?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-10 col-md-offset-2 main-top">
                <?= $this->fetch('content'); ?>
            </div>

        </div>
    </div>

<?php include('admin/footer.ctp'); ?>
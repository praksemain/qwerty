<?php include('./inc/header.php'); ?>

<section id="<?php echo $id ?>">
    <div class="container">
        <div class="row" id="section-title">
            <div class="col-md-12">
                <hr>
                <h2 class="text-center"><?php echo $title ?></h2>
                <hr>
            </div>
        </div>
        <?php echo $content ?>
    </div>
</section>

<?php include('./inc/footer.php'); ?>


<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-3">

        <div class="col-2"></div>

        <div class="col-8">

            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/smartphones/index ">Toon smartphones</a> |
            <a href="<?= URLROOT; ?>/sneakers/index">Mooiste Sneakers</a> |
            <a href="<?= URLROOT; ?>/zangeres/zangeres.php">Beste Zangeressen<a> |
            <a href="<?= URLROOT; ?>/vulkaan/index">Actiefste Vulkanen</a></li>

        </div>
        
        <div class="col-2"></div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 text-center">
            <h3 class="text-warning fw-bold">Top 5 actiefste vulkanen ter wereld</h3>
        </div>
        <div class="col-1"></div>
    </div>
    
    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Hoogte (m)</th>
                        <th scope="col">Land</th>
                        <th scope="col">Jaar Laatste Uitbarsting</th>
                        <th scope="col">Aantal Slachtoffers</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['vulkanen'] as $vulkaan) : ?>
                        <tr>
                            <td><?= $vulkaan->Naam; ?></td>
                            <td><?= $vulkaan->Hoogte; ?></td>
                            <td><?= $vulkaan->Land; ?></td>
                            <td><?= $vulkaan->JaarLaatsteUitbarsting; ?></td>
                            <td><?= $vulkaan->AantalSlachtoffers; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index" class="text-decoration-none">&#8592; Terug</a>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<?php require_once APPROOT . '/views/includes/footer.php'; ?>
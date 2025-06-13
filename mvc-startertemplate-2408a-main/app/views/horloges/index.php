<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>



        <div class="row mt-3 mb-2">
        <div class="col-1"></div>
        <div class="col-10">
            <a class="btn btn-outline-danger" href="<?= URLROOT; ?>/horloges/create" role="button">Nieuwe horloge</a>
        </div>
        <div class="col-1"></div>
    </div>

    <!-- begin tabel horloges -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>
                        <th scope="col">Prijs(&euro;)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['horloges'] as $horloges) : ?>
                        <tr>
                            <td><?= $horloges->Merk; ?></td>
                            <td><?= $horloges->Model; ?></td>
                            <td><?= $horloges->Prijs; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">home</a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- einde tabel smartphones -->

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
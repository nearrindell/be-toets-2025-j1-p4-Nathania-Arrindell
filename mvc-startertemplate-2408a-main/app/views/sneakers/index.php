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
            <a class="btn" href="<?= URLROOT; ?>/sneakers/create" role="button" style="color: #000; background-color: #ffc000; border: none;">
                Nieuwe sneaker
            </a>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>
                        <th scope="col">Prijs(&euro;)</th>
                        <th scope="col">Type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['sneakers'] as $sneaker) : ?>
                        <tr>
                            <td><?= htmlspecialchars($sneaker->Merk ?? '-'); ?></td>
                            <td><?= htmlspecialchars($sneaker->Model ?? '-'); ?></td>
                            <td><?= htmlspecialchars($sneaker->Prijs ?? '-'); ?></td>
                            <td><?= htmlspecialchars($sneaker->Type ?? '-'); ?></td>
                            <td>
                                <a href="<?= URLROOT; ?>/sneakers/delete/<?= $sneaker->Id; ?>">
                                    <i class="bi bi-trash3-fill text-danger" style="font-size: 1.2rem;"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="col-1"></div>
    </div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>

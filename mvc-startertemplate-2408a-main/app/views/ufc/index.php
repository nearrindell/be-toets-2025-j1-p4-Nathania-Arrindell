<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>

    


   
    <!-- begin tabel smartphones -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">RanglijstNummer</th> 
                        <th scope="col">Lengte</th>
                        <th scope="col">Gewicht</th>
                        <th scope="col">Leeftijd</th>
                        <th scope="col">Winst Door Knockout</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['ufc'] as $ufc) : ?>
                        <tr>
                            <td><?= $ufc->Naam; ?></td>
                            <td><?= $ufc->RanglijstNummer; ?></td>
                            <td><?= $ufc->Lengte; ?></td>
                            <td><?= $ufc->Gewicht; ?></td>
                            <td><?= $ufc->Leeftijd; ?></td>
                            <td><?= $ufc->WinstDoorKnockout; ?></td>
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

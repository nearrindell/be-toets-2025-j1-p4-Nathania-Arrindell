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
                        <th scope="col">Locatie</th> 
                        <th scope="col">Hoogte</th>
                        <th scope="col">Aantalverdiepingen</th>
                        <th scope="col">Jaarvoltooid</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['torens'] as $torens) : ?>
                        <tr>
                            <td><?= $torens->Naam; ?></td>
                            <td><?= $torens->Locatie; ?></td>
                            <td><?= $torens->Hoogte; ?></td>
                            <td><?= $torens->Aantalverdiepingen; ?></td>
                            <td><?= $torens->Jaarvoltooid; ?></td>

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
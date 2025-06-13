<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6">
            <h3 style="color: #ffc000;"><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>

       
    <!-- begin tabel smartphones -->
    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6">
                
            <form action="<?= URLROOT; ?>/sneakers/create" method="post">
                <div class="mb-3">
                    <label for="Merk" class="form-label">Merk</label>
                    <input name="Merk" type="text" class="form-control" id="Merk">
                </div>
                <div class="mb-3">
                    <label for="Model" class="form-label">Model</label>
                    <input name="Model" type="text" class="form-control" id="Model">
                </div>
                <div class="mb-3">
                    <label for="Prijs" class="form-label">Prijs</label>
                    <input name="Prijs" type="text" class="form-control" id="Prijs">
                </div>
                <div class="mb-3">
                    <label for="Type" class="form-label">Type</label>
                    <input name="Type" type="text" class="form-control" id="Type">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Versturen</button>
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>

    <!-- einde tabel smartphones -->

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <a href="<?= URLROOT; ?>/sneakers/index"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="col-3"></div>
    </div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 
<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>

       
    <!-- begin tabel smartphones -->
    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6">
                
            <form action="<?= URLROOT; ?>/horloges/create" method="post">
                <div class="mb-3">
                    <label for="naam" class="form-label">Naam</label>
                    <input name="naam" type="text" class="form-control" id="naam">
                </div>
                <div class="mb-3">
                    <label for="nettowaarde" class="form-label">Nettowaarde (miljoen)</label>
                    <input name="nettowaarde" type="number" class="form-control" id="nettowaarde">
                </div>
                <div class="mb-3">
                    <label for="land" class="form-label">Land</label>
                    <input name="land" type="text" class="form-control" id="land">
                </div>
                <div class="mb-3">
                    <label for="mobiel" class="form-label">Mobiel</label>
                    <input name="mobiel" type="text" placeholder="+31 6 1234 12 13"  class="form-control" id="mobiel">
                </div>
                <div class="mb-3">
                    <label for="leeftijd" class="form-label">Leeftijd</label>
                    <input name="leeftijd" type="number" min="0" max="130" class="form-control" id="leeftijd">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Sla op</button>
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>

    <!-- einde tabel smartphones -->

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 
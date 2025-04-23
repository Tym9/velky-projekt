<?= $this->extend('layout/master'); ?>
<?= $this->section('content'); ?>

<h1><?= esc($typ['typKomponent']) ?></h1>

<div class="row">
    <?php foreach ($komponenty as $k): ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="<?= base_url('uploads/' . $k['pic']) ?>" class="card-img-top" alt="<?= esc($k['nazev']) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($k['nazev']) ?></h5>
                    <a href="<?= base_url('komponenta/' . $k['id']) ?>" class="btn btn-secondary">Detail</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>

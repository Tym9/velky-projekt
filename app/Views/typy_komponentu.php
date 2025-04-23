<?= $this->extend('layout/master'); ?>
<?= $this->section('content'); ?>

<h1 class="mb-4">Typy komponent</h1>

<div class="row">
    <?php foreach ($typy as $typ): ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($typ['typKomponent']) ?></h5>
                    <a href="<?= base_url('typ/' . esc($typ['url'])) ?>" class="btn btn-primary">
                        Zobrazit komponenty
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>

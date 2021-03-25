<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Film</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $film['gambar']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $film['judul']; ?></h5>
                            <p class="card-text"><b>Genre : </b><?= $film['genre']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Deskripsi : </b><?= $film['deskripsi']; ?></small></p>

                            <a href="/film/edit/<?= $film['slug']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/film/<?= $film['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                            </form>

                            <br><br>
                            <a href="/film">Kembali ke daftar film</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
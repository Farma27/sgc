<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Toko</h1>
    <div class="row">
        <div class="col-12">
            <form class="user" action="/admin/tambah_toko" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_toko" placeholder="Nama Toko">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="alamat_toko" placeholder="Alamat Toko">
                </div>
                <div class="form-group">
                    <label for="owner">Owner</label>
                    <select name="idPemilik" id="owner"
                        class="form-control form-select form-select-transition form-control-user">
                        <?php foreach ($users as $user): ?>
                        <option value="<?= $user->id; ?>">
                            <?= $user->fullname; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nohp">Nomor Telepon Toko</label>
                    <input type="text" class="form-control form-control-user" name="telepon_toko" id="noHp">
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    <?= lang('Auth.register') ?>
                </button>
            </form>

        </div>
    </div>

</div> <!-- /.container-fluid -->

<script>
    document.getElementById('noHp').addEventListener('input', function (e) {
        var input = e.target;
        input.value = input.value.replace(/[^0-9]/g, '');
    });
</script>

<?= $this->endSection(); ?>
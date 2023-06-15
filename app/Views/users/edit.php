<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<h3 class="m-5">MANAGE ROLE ADMIN</h3>
<div class="card m-5">
    <div class="card-header bg-dark">
        <h5 class="text-white pt-2">Users List Edit</h5>
    </div>
    <div class="card-body">
        <a href="/users" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
        <div class="form mt-3">
            <div class="form-group mb-3">
                <label for="nik_naker">NIK Naker</label>
                <input type="text" class="form-control" id="nik_naker" name="nik_naker" value="1234567890123456"
                    readonly>
            </div>
            <div class="form-group mb-3">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="Chandra Wijaya"
                    readonly>
            </div>
            <div class="form-group mb-3">
                <label for="role">Role User</label>
                <select class="form-control" id="role" name="role">
                    <option value="1">Area</option>
                    <option value="2">Regional</option>
                    <option value="3">MGR Telkom</option>
                    <option value="4">Verifikator</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-success btn-sm mb-3">Submit</button>
                <button class="btn btn-danger btn-sm mb-3">Delete</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
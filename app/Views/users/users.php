<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<h3 class="m-5">MANAGE ROLE ADMIN</h3>
<div class="card m-5">
    <div class="card-header bg-dark">
        <h5 class="text-white pt-2">Users List</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <!-- insert -->
            <a href="/users/tambah" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Insert</a>
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID#</th>
                        <th>NIK Naker</th>
                        <th>Role User</th>
                        <th>Password</th>
                        <th>Nama Lengkap</th>
                        <th>No HP</th>
                        <th>Username Telegram</th>
                        <th>Gmail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <?= $i ?>
                            </td>
                            <td>
                                <?= $user['nik_naker'] ?>
                            </td>
                            <td>
                                <?= $user['role'] ?>
                            </td>
                            <td>
                                <?= $user['password'] ?>
                            </td>
                            <td>
                                <?= $user['nama_lengkap'] ?>
                            </td>
                            <td>
                                <?= $user['no_hp'] ?>
                            </td>
                            <td>
                                <?= $user['username_telegram'] ?>
                            </td>
                            <td>
                                <?= $user['gmail'] ?>
                            </td>
                            <td>
                                <div class="d-inline">
                                    <a href="/users/edit" class="btn btn-success btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="#" class="btn btn-info btn-sm">Accept</a>
                                </div>
                            </td>
                        </tr>
                        <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<style>
    .dataTables_length,
    .dataTables_filter {
        margin-bottom: 20px;
    }

    .dataTables_info,
    .dataTables_paginate {
        margin-top: 20px;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table').DataTable({

        });
    });
</script>
<?= $this->endSection() ?>
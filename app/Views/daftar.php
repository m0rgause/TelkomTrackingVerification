<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SuperBot</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="container mt-5">
        <h3>Form Pengajuan User Telkom</h3>
        <div class="mb-4">
            <label for="nik" class="form-label">Input NIK Naker</label>
            <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK Naker">
        </div>
        <div class="mb-4">
            <label for="role" class="form-label">Pilih Role User</label>
            <select class="form-select" aria-label="Default select example" id="role" name="role">
                <option value="1">Admin Area</option>
                <option value="2">Admin Regional</option>
                <option value="3">Admin Off/Mgr Telkom</option>
                <option value="4">Admin Verifikator</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Input Password</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Masukkan Password User">
        </div>
        <div class="mb-4">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="mb-4">
            <label for="nohp" class="form-label">No HP (WA)</label>
            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukkan No HP">
        </div>
        <div class="mb-4">
            <label for="username" class="form-label">Username Telegram</label>
            <input type="text" class="form-control" id="username" name="username"
                placeholder="Masukkan Username Telegram">
        </div>
        <div class="mb-4">
            <label for="email" class="form-label">Email (Gmail)</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Gmail">
        </div>
        <div class="mb-4">
            <a href="/home" class="btn btn-primary">Daftar</a>
        </div>
    </div>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
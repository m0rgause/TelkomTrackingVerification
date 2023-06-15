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
    <div class="d-flex justify-content-center align-items-center" style="height: 500px;">
        <div class="card shadow mb-3" style="max-width: 640px;">
            <div class="row g-0">
                <div class="col-md-4 bg-green d-flex justify-content-center align-items-center">
                    <div class="m-1 text-white ">
                        <p class="fs-5 text-center">SuperProject Login</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="/home" method="post">
                            <div class="form-group shadow-sm mb-2">
                                <input type="text" name="" id="" class="form-control" placeholder="Masukkan NIK">
                            </div>
                            <div class="form-group shadow-sm mb-2">
                                <input type="text" name="" id="" class="form-control" placeholder="Masukkan Password">
                            </div>
                            <!-- pilih role -->
                            <div class="form-group shadow-sm mb-2">
                                <select class="form-select" aria-label="Default select example" id="role" name="role">
                                    <option value="1">Admin Area</option>
                                    <option value="2">Admin Regional</option>
                                    <option value="3">Admin Off/Mgr Telkom</option>
                                    <option value="4">Admin Verifikator</option>
                                    <option value="5">Super Admin</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-light btn-block shadow-sm w-100" type="submit">Login</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="/daftar" class="btn btn-light btn-block shadow-sm w-100">Daftar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
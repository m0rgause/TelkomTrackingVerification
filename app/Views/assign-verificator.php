<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<h3 class="m-5">Approval Admin Regional</h3>

<div class="card m-5">
    <div class="card-body h-full">
        <div class="d-flex justify-content-between">
            <input type="text" placeholder="KTEL">
            <input type="text" placeholder="WITEL">
            <input type="text" placeholder="STO">
            <input type="text" placeholder="SEARCH PID">
            <input type="text" placeholder="NO ID">
        </div>
        <div class="table-responsive">
            <table class="table table-bordered mt-3">
                <thead class="">
                    <tr>
                        <th>NO</th>
                        <th>KTEL</th>
                        <th>PID</th>
                        <th>REG</th>
                        <th>WITEL</th>
                        <th>STO</th>
                        <th>LOKASI</th>
                        <th>ACTIVITY</th>
                        <th>POSISI PIC</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="doc">
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-dark">Upload Doc</button>
                    <div>
                        <h5 class="mt-3 mb-3">NDE Permohonan UT</h5>
                        <div class="d-flex align-items-center">
                            <div class="mb-3">
                                <label class="form-label" style="color:transparent">.</label>
                                <select name="yes" class="form-control" id="">
                                    <option value="">YA/TIDAK</option>
                                    <option value="ya">YA</option>
                                    <option value="tidak">TIDAK</option>
                                </select>
                            </div>
                            <div class="mb-3 ms-5">
                                <label class="form-label" style="color:#4462CB">NDE_SP#9_REG2_STO_LOC</label>
                                <input type="text" class="form-control" placeholder="Catatan (Free/Text)">
                            </div>
                        </div>
                    </div>
                    <div>
                        <h5 class="mt-3 mb-3">AS Built Drawing</h5>
                        <div class="d-flex align-items-center">
                            <div class="mb-3">
                                <label class="form-label" style="color:transparent">.</label>
                                <select name="yes" class="form-control" id="">
                                    <option value="">YA/TIDAK</option>
                                    <option value="ya">YA</option>
                                    <option value="tidak">TIDAK</option>
                                </select>
                            </div>
                            <div class="mb-3 ms-5">
                                <label class="form-label" style="color:#4462CB">ABD_SP#9_REG2_STO_LOC</label>
                                <input type="text" class="form-control" placeholder="Catatan (Free/Text)">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-6">
                    <center>
                        <div class="d-flex align-items-center p-3 mb-3"
                            style="height: 150px;border:solid 1px #000;width:350px">
                            Comment Catatan : <textarea style="background-color:transparent;border:none" name="" id=""
                                cols="20" rows="5"></textarea>
                        </div>
                        <div class="submit mb-3">
                            <button class="btn btn-success">Submit Via Assign</button>
                            <button class="btn btn-warning">Submit Not Via Assign</button>
                            <button class="btn btn-danger">Return / Reject</button>
                        </div>
                        <div class="date">
                            Automatic Create Date / Time <input type="text" value="<?= date('m/d/Y H:i') ?>">
                        </div>
                    </center>
                </div> -->
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
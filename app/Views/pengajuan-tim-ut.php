<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<h3 class="m-5">PENGAJUAN TIM UT</h3>

<div class="card m-5">
    <div class="card-header bg-dark">
        <h6 class="text-white pt-2">INPUT LOC</h6>
    </div>
    <div class="card-body">
        <table>
            <tr>
                <td>NO. KTEL</td>
                <td>:</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>REGIONAL</td>
                <td>:</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>WITEL</td>
                <td>:</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>STO</td>
                <td>:</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>LOKASI SMILE</td>
                <td>:</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>PROJECT ID</td>
                <td>:</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>STATUS SMILE <br>(harus 90%)</td>
                <td>:</td>
                <td><select name="smile" class="form-control" id="">
                        <option value="ya">YA</option>
                        <option value="tidak">TIDAK</option>
                    </select></td>
            </tr>
        </table>
    </div>
    <div class="card-header bg-dark">
        <h6 class="text-white pt-2">APPROVAL</h6>
    </div>
    <div class="card-body">
        <table>
            <tr>
                <td>Approval-1</td>
                <td> : </td>
                <td><input type="text" class="form-control"></td>
                <td>PILIH/SEARCH<br>Admin Reg</td>
            </tr>
            <tr>
                <td>OFF/MGR TELKOM</td>
                <td> : </td>
                <td><input type="text" class="form-control"></td>
                <td>PILIH/SEARCH<br>off/mgr telkom</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <div class="row">
                        <div class="col-7">
                            <a href="#" class="btn btn-primary btn-sm form-control">SIMPAN DRAFT</a>
                        </div>
                        <div class="col-5">
                            <a href="#" class="btn btn-success btn-sm form-control">SUBMIT</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>DATE/TIME<br>Automatic</td>
                <td>:</td>
                <td style="background-color: yellow;"><?= date('d-m-Y H:i') ?></td>
            </tr>
        </table>
    </div>
    <div class="card-header bg-dark">
        <h6 class="text-white pt-2">UPLOAD DOC (SITUASIONAL)</h6>
    </div>
    <div class="card-body">
        <table>
            <tr>
                <td>NDE Pelaksanaan UT</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>Checklist BA UT</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>BoQ Uji Terima</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>Hasil ukur OPM dan Photo</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>Hasil Ukur OTDR (.PDF)</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>Hasil Ukur OTDR (.Sor)</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>*Hasil Ukur Ground & Photo</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>*BA Sitac</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>*Matriks</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>Eviden CT/Pekerjaan</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>KML Realisasi</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>*BA Lapangan</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>*BA Redesain</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
            <tr>
                <td>As Build Drawing</td>
                <td>:</td>
                <td><input type="file" class="form-control" name="" id=""></td>
                <td>*Attach File, Maks 50 MB</td>
            </tr>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
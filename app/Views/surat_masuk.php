<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="row">
    <form role="form">
        <div class="col-lg-12">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-eye"></i> Surat Masuk</h3>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal Surat Terima</th>
                                    <th>Nomor Agenda Surat</th>
                                    <th>Perihal</th>
                                    <th>Lama Disposisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3326</td>
                                    <td>10/21/2013</td>
                                    <td>3:29 PM</td>
                                    <td>321.33</td>
                                    <td>321.33</td>
                                </tr>
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
</div>
<?= $this->endSection() ?>
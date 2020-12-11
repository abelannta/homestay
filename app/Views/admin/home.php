<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <<?php endif; ?> <center>
        <h1>Selamat Datang Admin</h1>
        </center>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <center>
            <div class="col d-flex justify-content-center">
                <div class="card-deck">
                    <div class="card text-white bg-primary mb-3 mr-4" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Pembayaran Suhat</h5>
                            <p class="card-text">Berisi Data Pembayaran Suhat Dengan Status On-Going.</p>
                        </div>
                        <a href="/admin/suhat">
                            <div class="card-footer">Klik Disini</div>
                        </a>
                    </div>
                    <div class="card text-white bg-success mb-3 mr-4" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Riwayat Suhat</h5>
                            <p class="card-text">Berisi Data Riwayat Seluruh Pembayaran Suhat Yang Telah Selesai.</p>
                        </div>
                        <a href="/admin/riwayat">
                            <div class="card-footer">Klik Disini</div>
                        </a>
                    </div>
                    <div class="card text-white bg-info mb-3 mr-4" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Pembayaran Candi</h5>
                            <p class="card-text">Berisi Data Pembayaran Candi Dengan Status On-Going.</p>
                        </div>
                        <a href="/admin/candi">
                            <div class="card-footer">Klik Disini</div>
                        </a>
                    </div>
                    <div class="card text-white bg-danger mb-3 mr-4" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Riwayat Candi</h5>
                            <p class="card-text">Berisi Data Riwayat Seluruh Pembayaran Candi Yang Telah Selesai.</p>
                        </div>
                        <a href="/admin/riwayatCND">
                            <div class="card-footer">Klik Disini</div>
                        </a>
                    </div>
                </div>
            </div>
        </center><br>

        <center>
            <div class="panel">
                <div id="chart1"></div>
            </div>
        </center>



        <?= $this->endSection(); ?>

        <?= $this->section('footer'); ?>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
            /* Chart Lingkaran */
            Highcharts.chart('chart1', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Persentase Booking Homestay'
                },
                subtitle: {
                    text: 'Data dari keseluruhan booking dalam database'
                },

                accessibility: {
                    announceNewData: {
                        enabled: true
                    },
                    point: {
                        valueSuffix: '%'
                    }
                },

                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}: {point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },

                series: [{
                    name: "Booking Kamar",
                    colorByPoint: true,
                    data: [{
                            name: "Suhat",
                            y: <?= ($totalSHT / $totalAll) * 100; ?>,
                            drilldown: "Suhat"
                        },
                        {
                            name: "Candi",
                            y: <?= ($totalCND / $totalAll) * 100; ?>,
                            drilldown: "Candi"
                        }
                    ]
                }]
            });
        </script>

        <?= $this->endSection(); ?>
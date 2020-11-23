<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

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
                <a href="#">
                    <div class="card-footer">Klik Disini</div>
                </a>
            </div>
        </div>
    </div>
</center><br>
<div class="panel">
    <div id="chart1"></div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('footer'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    // Create the chart
    Highcharts.chart('chart1', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Browser market shares. January, 2018'
        },
        subtitle: {
            text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
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
            name: "Browsers",
            colorByPoint: true,
            data: [{
                    name: "Suhat",
                    y: 62.74,
                    drilldown: "Suhat"
                },
                {
                    name: "Candi",
                    y: 10.57,
                    drilldown: "Candi"
                }
            ]
        }],
        drilldown: {
            series: [{
                    name: "Suhat",
                    id: "Suhat",
                    data: [
                        [
                            "v65.0",
                            0.1
                        ],
                        [
                            "v64.0",
                            1.3
                        ],
                        [
                            "v63.0",
                            53.02
                        ],
                        [
                            "v62.0",
                            1.4
                        ],
                        [
                            "v61.0",
                            0.88
                        ],
                        [
                            "v60.0",
                            0.56
                        ],
                        [
                            "v59.0",
                            0.45
                        ],
                        [
                            "v58.0",
                            0.49
                        ],
                        [
                            "v57.0",
                            0.32
                        ],
                        [
                            "v56.0",
                            0.29
                        ],
                        [
                            "v55.0",
                            0.79
                        ],
                        [
                            "v54.0",
                            0.18
                        ],
                        [
                            "v51.0",
                            0.13
                        ],
                        [
                            "v49.0",
                            2.16
                        ],
                        [
                            "v48.0",
                            0.13
                        ],
                        [
                            "v47.0",
                            0.11
                        ],
                        [
                            "v43.0",
                            0.17
                        ],
                        [
                            "v29.0",
                            0.26
                        ]
                    ]
                },
                {
                    name: "Candi",
                    id: "Candi",
                    data: [
                        [
                            "v58.0",
                            1.02
                        ],
                        [
                            "v57.0",
                            7.36
                        ],
                        [
                            "v56.0",
                            0.35
                        ],
                        [
                            "v55.0",
                            0.11
                        ],
                        [
                            "v54.0",
                            0.1
                        ],
                        [
                            "v52.0",
                            0.95
                        ],
                        [
                            "v51.0",
                            0.15
                        ],
                        [
                            "v50.0",
                            0.1
                        ],
                        [
                            "v48.0",
                            0.31
                        ],
                        [
                            "v47.0",
                            0.12
                        ]
                    ]
                }
            ]
        }
    });
</script>

<?= $this->endSection(); ?>
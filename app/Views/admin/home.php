<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<center>
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
                <a href="#">
                    <div class="card-footer">Klik Disini</div>
                </a>
            </div>
        </div>
    </div>
</center><br>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel">
                <div id="chart1"></div>
            </div>
        </div>
        <div class="col">
            <div class="panel">
                <div id="chart2"></div>
            </div>
        </div>
    </div>
</div>


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

    /* Chart Diagram */
    Highcharts.chart('chart2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
</script>

<?= $this->endSection(); ?>
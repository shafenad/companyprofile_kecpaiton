    <!-- Header-->
    <header id="header" class="header">

<div class="header-menu">

    <div class="col-sm-7">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        <div class="user-area dropdown float-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                          </svg>
                </a>

            
            </div>
        </div>
        
    </div>
    <style>
    .rb-admin{
        font-family: 'Franklin Gothic'
    }
    </style>
    <div class="col-sm-5">   
        <div class="rb-admin">
            <h4 class="text-right">Kecamatan Paiton Administrator</h4>
</div>
</div>
</header><!-- /header -->
<!-- Header-->

<div class="content mt-3">




<div class="col-sm-6 col-lg-4">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Total Kunjungan Facebook</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>

        </div>

    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-4">
    <div class="card text-white bg-flat-color-2">
        <div class="card-body pb-0">
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Total Kunjungan Twitter</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart2"></canvas>
            </div>

        </div>
    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-4">
    <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Total Kunjungan Linkedin</p>
        </div>
        <div class="chart-wrapper px-0" style="height:70px;" height="70">
            <canvas id="widgetChart3"></canvas>
        </div>
    </div>
</div>
<!--/.col-->


<!--/.col-->

<div class="col-sm-6 col-lg-4">
    <div class="social-box facebook">
        <i class="fa fa-facebook"></i>
        <ul>
            <li>
                <span class="count">40</span> k
                <span>friends</span>
            </li>
            <li>
                <span class="count">450</span>
                <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-sm-6 col-lg-4">
    <div class="social-box twitter">
        <i class="fa fa-twitter"></i>
        <ul>
            <li>
                <span class="count">30</span> k
                <span>friends</span>
            </li>
            <li>
                <span class="count">450</span>
                <span>tweets</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-sm-6 col-lg-4">
    <div class="social-box linkedin">
        <i class="fa fa-linkedin"></i>
        <ul>
            <li>
                <span class="count">40</span> +
                <span>contacts</span>
            </li>
            <li>
                <span class="count">250</span>
                <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->



<!--/.col-->

<div class="col-xl-6">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="card-title mb-3">Grafik Perkembangan</h4>
                </div>
                <!--/.col-->
                <div class="col-sm-8 hidden-sm-down">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="options" id="option1"> Hari
                            </label>
                            <label class="btn btn-outline-secondary active">
                                <input type="radio" name="options" id="option2" checked=""> Bulan
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="options" id="option3"> Tahun
                            </label>
                        </div>
                    </div>
                </div>
                <!--/.col-->


            </div>
            <!--/.row-->
            <div class="chart-wrapper mt-4">
                <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
            </div>

        </div>
        <div class="card-footer">
            <ul>
                <li>
                    <div class="text-muted">Kunjungan Halaman</div>
                    <strong>29.703 Pengguna (40%)</strong>
                    <div class="progress progress-xs mt-2" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li class="hidden-sm-down">
                    <div class="text-muted">Khusus</div>
                    <strong>24.093 Pengguna (20%)</strong>
                    <div class="progress progress-xs mt-2" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li class="hidden-sm-down">
                    <div class="text-muted">Rating Pengguna</div>
                    <strong>40.15%</strong>
                    <div class="progress progress-xs mt-2" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Total Keuntungan</div>
                    <div class="stat-digit">1,012</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Total Pembaca</div>
                    <div class="stat-digit">1087</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Total Artikel</div>
                    <div class="stat-digit">770</div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.nama-bawah{
  padding-top: 90pt;
  padding-bottom: 10pt;
  font-family: 'Sans serif';
}
</style>
<div class="col-xl-6 col-lg-6 pt-5 mt-5">
    <div class="nama-bawah">
<div class="text-right">
        <div class="small">Logged in as:</div>
      <?=$_SESSION['namauser']?>
    </div>
    </div>
</div>
</div> 
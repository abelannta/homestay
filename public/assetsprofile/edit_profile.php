 <header class="panel-heading tab-bg-info">
            <ul class="nav nav-tabs">
              <li class="active">
                <a data-toggle="tab" href="#edit-it">
                  <i class="icon-envelope"></i>
                  Edit Profile
                </a>
              </li>
            </ul>
            <div id="edit-it" class="tab-pane">
              <section class="panel">
                <div class="panel-body bio-graph-info">
                  <h1> Edit data anda</h1>
                  <form class="form-horizontal" role="form" action="edit.php" method="post">

                    <!-- NAMA -->
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Nama</label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" name="namaku" placeholder=" " style="width: 50%;">
                      </div>
                    </div>

                    <!-- NO_HP -->
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Nomor Hp</label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" name="no_telp" placeholder=" " style="width: 50%;">
                      </div>
                    </div>

                    <!-- TOMBOL -->
                    <div class="form-group">
                      <label class="col-lg-2 control-label"></label>
                      <div class="col-lg-4">
                        <input type="submit" name="change" class="form-control" value="Konfirmasi" style="width: 40%; ">
                      </div>
                    </div>
                </div>
          </header>

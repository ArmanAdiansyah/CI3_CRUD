    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH DATA MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
   
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- form start -->
            <form action="<?php echo base_url();?>index.php/mahasiswa/tambah"method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control"  placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No.telp</label>
                  <div class="col-sm-10">
                    <input type="number" name="notelp" class="form-control"  placeholder="Notelp">
                  </div>
              
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button-back" class="btn btn-back">Cancel</button>
                <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
         
            
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
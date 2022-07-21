<section class="content-header">
      <h1>
        DATA MAHASISWA
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <section class="content">
    <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url();?>index.php/mahasiswa/tambah" class="btn btn-sm btn-success">Tambah</a>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No. </th>
                  <th>Nama Mahasiswa</th>
                  <th>No. Telp</th>
                  <th>Alamat</th>
                  <th>Action</th>
                  
                </tr>              
                </thead>
                <tbody>
                <?php 
                $no=0;
                foreach ($data->result_array() as $mhs):
                $no++;
                $nm=$mhs['namamhs'];
                $hp=$mhs['notelp'];
                $alamat=$mhs['alamatmhs'];
                ?>             
<tr>
  <td><?php echo $no;?></td>
  <td><?php echo $nm;?></td>
  <td><?php echo $hp;?></td>
  <td><?php echo $alamat;?></td>
  <td>
    <a href="<?php echo base_url();?>index.php/mahasiswa/edit/<?php echo $mhs['mhs_id']?>"
  class="btn btn-xs btn-warning">Edit</a>
  <a href="<?php echo base_url();?>index.php/mahasiswa/delete/<?php echo $mhs['mhs_id']?>"
  class="btn btn-xs btn-danger">Delete</a></td>
  
</tr>
<?php endforeach ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   :  true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
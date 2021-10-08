<?php include 'sessiondash.php';?>

<?php
include 'db.php';

$sql = "SELECT * FROM tbl_profile";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
?>




<?php 
 include "include/header.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">View Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
      if(isset($_GET['Success']))

      { 

      ?>
      <div class="alert alert-success m-3" role="alert">
      <?php
      echo "Account has been deleted Successfully.";
      ?>
    </div>
<?php
      }
      ?>
      <?php
      if(isset($_GET['Error']))

      { 

      ?>
      <div class="alert alert-danger m-3" role="alert">
      <?php
      echo "Not Deleted Unsuccessfully!Please try again.";
      ?>
    </div>
<?php
      }
      ?>


      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        
      <div class="row">
      <div class="col-12">                    
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Family Name</th>
                    <th>Test Type</th>
                    <th>ID Number</th>
                    <th>Center Number</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>
<?php
while ($data = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td> <?=$data['name']?> </td>
                    <td><?=$data['family_name']?>
                    </td>
                    <td><?=$data['test_type']?></td>
                    <td> <?=$data['id_number']?></td>
                    <td><?=$data['center_number']?></td>
                    <td>
                      <a href='edit-profile.php?id=<?=$data['pf_id']?>' class='btn btn-primary btn-sm mb-2'><i class='fa fa-eye'></i> View</a><br>
                      <a class='btn btn-danger btn-sm mb-2' onclick="return confirm('Are you sure?')" href='delete_profile.php?id=<?=$data['pf_id']?>'><i class='fa fa-trash'></i> Delete</a>

                    </td>

                  </tr>

                  <?php 
}
?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
  include "include/footer.php";
<?php 
include_once('header.php');
include_once('nav.php');
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Profile Management</a></li>
        <li class="active">Add User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- ADD FORM -->
      <div class="box box-default">
    
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
            
              <div class="form-group">
                <label>Staff ID</label>
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-id-card"></i>
                  </div>
                <input type="text" class="form-control" placeholder="Staff ID...">
              </div>
                </div>
                
              <div class="form-group">
                <label>Name</label>
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                <input type="text" class="form-control" placeholder="Name...">
                  </div>
                  </div>
                  
                
             <div class="form-group">
                  <label>Email Address</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address...">
            </div>
                  </div>
            
            <div class="form-group">
                <label>Default Password</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-key"></i>
                  </div>
                <input type="text" class="form-control" placeholder="Password...">
            </div>
                 </div>
                
            <div class="form-group">
                <label>Contact Number</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
                <!-- /.input group -->
            </div>
            
            <div class="form-group">
                <label>Gender</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-intersex"></i>
                  </div> 
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--Select--</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
            </div>
                </div>
            
            <div class="form-group">
                  <label>Address (Residential/Postal)</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <textarea class="form-control" rows="2" placeholder="Address"></textarea>
                </div>
                </div>
            
             <div class="form-group">
                <label>User Role</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-cog"></i>
                  </div> 
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--Select--</option>
                  <option>Front Desk</option>
                  <option>Manager/Admin</option>
                  <option>Super Admin</option>
                </select>
            </div>
                </div>
                
            
            <div class="form-group">
                  <label for="exampleInputFile">User Photo</label>
                  <input type="file" id="exampleInputFile">
            </div>
            
            <div class="box-footer">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-success">Add user</button>
              </div>
                           
            </div>
                
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
                  <!-- /.row -->
                  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
include_once('footer.php');
?>

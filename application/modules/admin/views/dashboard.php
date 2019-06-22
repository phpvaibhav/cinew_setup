<!--- Content Wrapper. Contains page content -->
<style type="text/css">
    .info-box-icon i{
        padding-top: 20px;
    }
</style>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome Admin
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
       
        <!-- /.col -->
        
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
              
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
              <a href="#">
            <span class="info-box-icon bg-yellow"><i class="ion ion-android-contact"></i></span>

            <div class="info-box-content">
                
              <span class="info-box-text">Total Company</span>
              <span class="info-box-number"><?php /*echo $this->Common_model->get_total_count(USERS,array(' user_type_id '=>1));*/ ?></span>
               
            </div>
            <!-- /.info-box-content -->
             </a>

          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
              <a href="#">
            <span class="info-box-icon bg-green"><i class="ion ion-pinpoint"></i></span>

            <div class="info-box-content">
                
              <span class="info-box-text">Total Driver</span>
              <span class="info-box-number"><?php /*echo $this->Common_model->get_total_count(USERS,array(' user_type_id '=>3));*/ ?></span>
               
            </div>
            <!-- /.info-box-content -->
             </a>
             
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

         <div class="col-md-3 col-sm-6 col-xs-12">
         
          <div class="info-box">
            <a href="#">
            <span class="info-box-icon bg-blue"><i class="ion ion-android-person"></i></span>

            <div class="info-box-content">
                
              <span class="info-box-text">Total Customer</span>
              <span class="info-box-number"><?php /*echo $this->Common_model->get_total_count(CATEGORIES,array());*/ ?> </span>
               
            </div>
            </a>
          </div>
        </div>

        
        <div class="col-md-3 col-sm-6 col-xs-12">
         
          <div class="info-box">
              <a href="#">
            <span class="info-box-icon bg-red"><i class="ion ion-android-car"></i></span>

            <div class="info-box-content">
                
              <span class="info-box-text">Total Vehicles</span>
              <span class="info-box-number"><?php /*echo $this->Common_model->get_total_count(STATIONS)*/ ?> </span>
               
            </div>
            <!-- /.info-box-content -->
             </a>
          </div>
          <!-- /.info-box -->

        </div>

        
      </div>
      <!-- /.row -->

      
      <!-- /.row -->

      <!-- Main row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
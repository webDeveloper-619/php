<?php
include "header.php";
?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                    
<?php

?>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <h2 class="font-weight-normal text-primary" data-plugin="counterup"><?php echo $row['today']?></h2>
                                        <h5>Toady Leads</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <h2 class="font-weight-normal text-pink" data-plugin="counterup"><?php echo $row['month']?></h2>
                                        <h5>Month Leads</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <h2 class="font-weight-normal text-warning" data-plugin="counterup"><?php echo $row['year']?></h2>
                                        <h5>Year Leads</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <h2 class="font-weight-normal text-info" data-plugin="counterup"><?php echo $row['total']?></h2>
                                        <h5>Total Leads</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-box">
                                    <div class="card">
              <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title" id="weekleads">Monthly Leads<span id="demo" style="font-size: 18px"></span></h3>
                  <a href="javascript:void(0)" id="reporting">View Report</a>
                </div>
              </div>
              <div class="card-body">
                 <div class="position-relative">
                  <canvas id="visitors-chart3" height="290" width="436" class="chartjs-render-monitor" style="display: block; width: 436px; height: 290px;"></canvas>
                </div>
           </div>
                </div>
                </div>
                </div>

        <div class="col-xl-6">
            <div class="card-box">
              <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title" id="weekleads">Monthly Sell <span  class="monthSell" style="font-size: 18px"></span></h3>
                  <a href="javascript:void(0)" id="reporting">View Report</a>
                </div>
              </div>
              <div class="card-body">
                 <div class="position-relative">
                    <canvas id="monthSell" height="200"></canvas>
                </div>
             </div>  
             </div>
     </div><!-- end col -->
     
     
     
     
     
           <div class="col-xl-6">
            <div class="card-box">
              <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title" id="weekleads">Monthly Articles <span class="articles" style="font-size: 18px"></span></h4>
                  <a href="javascript:void(0)" id="reporting">View Report</a>
                </div>
              </div>
              <div class="card-body">
                 <div class="position-relative">
                    <canvas id="articles" height="200"></canvas>
                </div>
             </div>  
             </div>
     </div><!-- end col -->
      <div class="col-xl-6">
            <div class="card-box">
              <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                  <h5 class="card-title" id="weekleads">Monthly Highlights <span class="highlights" style="font-size: 18px"></span></h5>
                  <a href="javascript:void(0)" id="reporting">View Report</a>
                </div>
              </div>
              <div class="card-body">
                 <div class="position-relative">
                    <canvas id="highlights" height="200"></canvas>
                </div>
             </div>  
             </div>
     </div><!-- end col -->
     
     
     
      <div class="col-xl-6">
            <div class="card-box">
              <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title" id="weekleads">Monthly Shedules <span class="schedule" style="font-size: 18px"></span></h4>
                  <a href="javascript:void(0)" id="reporting">View Report</a>
                </div>
              </div>
              <div class="card-body">
                 <div class="position-relative">
                    <canvas id="schedule" height="200"></canvas>
                </div>
             </div>  
             </div>
     </div><!-- end col -->
      <div class="col-xl-6">
            <div class="card-box">
              <div class="card-header no-border">
                <div class="d-flex justify-content-between">
                  <h5 class="card-title" id="weekleads">Monthly Updated Articles <span class="updateart" style="font-size: 18px"></span></h5>
                  <a href="javascript:void(0)" id="reporting">View Report</a>
                </div>
              </div>
              <div class="card-body">
                 <div class="position-relative">
                    <canvas id="updateart" height="200"></canvas>
                </div>
             </div>  
             </div>
     </div><!-- end col -->
     

                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2016 - 2020 &copy; Adminto theme by <a href="#">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
            

            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <img width="100%" class="imageShow">
      </div>
      <div class="modal-footer">
        <form method="POST" action="insert_article.php" enctype="multipart/form-data">
          <input type="hidden" id="image_id" name="id" >
           <input type="hidden" name="table" value="admin">
          <input type="file" name="image" id="imgInp">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-info" name="imagechange">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
            
            
            
<?php
include "footer.php";
?>
<script src="../plugins/chart.js/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

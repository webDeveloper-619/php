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
                        
                  

                       <div class="row">
                            <div class="col-12">
                                <?php
                                    if(isset($_GET['message']) && $_GET['message'] == 'success' ){
                                        ?>
                                        <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                General insert/edit successfully! <a href="#" class="alert-link">Success</a>.
                                            </div>
                                        <?php
                                    }elseif(isset($_GET['message']) && $_GET['message'] == 'error' ){
                                        ?>
                                        <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                General insert/edit error! <a href="#" class="alert-link">Error</a>.
                                            </div>
                                        <?php
                                    }
                                ?>
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Form Leads
                                     <a class="btn btn-info float-right" style="color:white" id="TodayLeadsSreach">search</a> 
                           <a class="btn btn-info float-right" ><div id="reportrange" style="color:blue">
                  <i class="fa fa-calendar"></i>&nbsp;
                  <span></span> <i class="fa fa-caret-down"></i>
              </div></a></h4>
              <br>
                        

                                    <table id="example1" class="table table-centered mb-0">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id ="tbody">
                            
                                   <?php
    
    include "jotform/JotForm.php";
    
    $jotformAPI = new JotForm("902fe6c38d6fdfdcc704ad27f19fb626");
    $forms = $jotformAPI->getForms();
    
    foreach ($forms as $form) {
      //  print $form["title"];
    }


    
    try {
 

        $submissions = $jotformAPI->getSubmissions(0, 100, null, "created_at");
      
        $leads = $submissions;
    }
    catch (Exception $e) {
        var_dump($e->getMessage());
    }
    

                                		foreach($leads as $key => $value){
                                		 
                                		   $answers = $value['answers'];
                                		    //foreach($answers as $key => $value1){
                                		            if($key == 1 || $key == 2){
                                		            }else{
                                		     
                                       ?>
                                        <tr>
                                          
                                            <td><?php echo $answers[3]['answer']['first']." ".$answers[3]['answer']['last']?></td>
                                             <td><?php echo $answers[4]['answer']?></td>
                                              <td><?php echo $answers[5]['answer']?></td>
                                              <td><?php echo $answers[6]['answer']?></td>
                                            <td><a class="btn btn-info edit" 
                                            data-value="<?php echo $id?>"
                                           
                                            data-toggle="modal" data-target=".bs-example-modal-lg"><span class="mdi mdi-pencil"></span></a>
                                            <a class="btn btn-danger"><span class="mdi mdi-delete"></span></a>
                                            </td>
                                        </tr>
                                        <?php
                                		            
                                		           
                                		    }
                                       }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->
                        
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
            
            
               <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Insert Package</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                  <div class="card">
            <div class="card-header">
               <h3 class="card-title">User Profile Who's Status Pending</h3>

            </div>
    <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Alex Cross</a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">Created At - 2020-10-21</span>
                      </div>
                    </div>
                    <!-- /.post -->
                    <p>
                </p><ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                    <b>Full Name </b> <a class="float-right">AlexCross</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email </b> <a class="float-right">alexcross019@gmail.com</a>
                  </li>
                   <li class="list-group-item">
                    <b>Password </b> <a class="float-right">motocross191</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone Number </b> <a class="float-right">4407527835875</a>
                  </li>
                  <li class="list-group-item">
                    <b>Address </b> <a class="float-right">10 mill way 
Breachwood green</a>
                  </li>
                   <li class="list-group-item">
                    <b>City </b> <a class="float-right">Hitchin</a>
                  </li>
                  <li class="list-group-item">
                    <b>Zip Code </b> <a class="float-right">Sg4 8pe</a>
                  </li>
                  <li class="list-group-item">
                    <b>Country </b> <a class="float-right">United Kingdom</a>
                  </li>
                  <li class="list-group-item">
                    <b>Domain Name</b> <a class="float-right">www.watchmotocrossonline.com</a>
                  </li>
                  <li class="list-group-item">
                    <b>Package</b> <a class="float-right">$75</a>
                  </li>
                   <li class="list-group-item">
                    <b>Card</b> <a class="float-right"></a>
                  </li>
                   <li class="list-group-item">
                    <b>Card Number </b> <a class="float-right"></a>
                  </li>
                   <li class="list-group-item">
                    <b>Status</b> <a class="float-right">Padding</a>
                  </li>
                </ul>
                    <p></p>
                   
                </div>
                <!-- /.tab-content -->
              </div>
                </div>
</div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
<?php
include "footer.php";
?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
    $(document).ready(function(){
        $(".edit").click(function(){
            var id = $(this).data("value");
            
              var text = $(this).data("name");
            var name = $(this).data("title");
            var link = $(this).data("desc");
            $("#id").val(id);
            $("#rs").val(text);
            $("#dis").val(name);
            $("#days").val(link);
           
        })
        
        
     $(".card-box").on("click","#TodayLeadsSreach",function(){
      var TodayLeadsSreach = $('#reportrange span').html();
   
       $("#tbody").html("");
      $.post("insert.php",{TodayLeadsSreach:TodayLeadsSreach},function(data){

        $("#tbody").html(data);
      })
      
    })
    
    })
    
    		$(function() {

    var start = moment().subtract(29, 'days');
    var end   = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last 3 Month': [moment().subtract(90, 'days'), moment()],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);
});
    
</script>

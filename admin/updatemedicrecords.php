<?php include('includes/header.php'); ?>

<?php include('includes/sidebar.php') ; ?>

<?php   include('includes/mainsubheader.php'); ?>


<div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Medical History Records</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Patient Name</th>
                    <th scope="col" class="sort" data-sort="budget">Patient Sex</th>
                    <th scope="col" class="sort" data-sort="status">Staff Attender</th>
                    <th scope="col">Medical Issue</th>
                    <th scope="col" class="sort" data-sort="completion">Total Cost</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody class="list">
               

                    <?php

                        $query = "SELECT patient_name, staff_info, patient_sex,  treatment_status, total_cost, date, medical_issue FROM `medikhistory` ";
                        $readhistory_query = mysqli_query($connection, $query);

                        if(mysqli_num_rows($readhistory_query) > 0){
                            while($result = mysqli_fetch_assoc($readhistory_query)){
                                $patient_name = $result['patient_name'];
                                $staff_info = $result['staff_info'];
                                $patient_sex = $result['patient_sex'];
                                $treatment_status = $result['treatment_status'];
                                $total_cost = $result['total_cost'];
                                $date = $result['date'];
                                $medical_issue = $result['medical_issue'];

                                

                               


                                echo "<tr>
                                <th scope='row'>
                                  <div class='media align-items-center'>
                                    <div class='media-body'>
                                      <span class='name mb-0 text-sm'>{$patient_name}</span>
                                    </div>
                                  </div>
                                </th>
                                <td class='budget'>
                                  {$patient_sex}
                                </td>
                                <td>
                                  <span class='badge badge-dot mr-4'>
                                    <i class='bg-warning'></i>
                                    <span class='status'>{$staff_info}</span>
                                  </span>
                                </td>
                                <td>
                                  <div class='avatar-group'>
                                    <span class='status'>{$medical_issue}</span>
                                  </div>
                                </td>
                                <td>
                                    <div>
                                    <span class='status'>{$total_cost}</span>
                                  </div>
                                </td>
                                <td>
                                    <div>
                                    <span class='status'>{$date}</span>
                                  </div>
                                </td>
                              </tr> ";
                            }
                        }

                    ?>
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>


<?php


        if(isset($_POST['submit'])){
            $patient_name = $_POST['patient_name'];
            $patient_address = $_POST['patient_address'];
            $patient_sex = $_POST['patient_sex'];
            $treatment_status = $_POST['treatment_status'];
            $staff_info = $_POST['staff_info'];
            $date = $_POST['date'];
            $total_cost = $_POST['total_cost'];
            $medical_issue = $_POST['medical_issue'];

            $query = "UPDATE medikhistory SET patient_name = '{$patient_name}', patient_address = '{$patient_address}', patient_sex = '{$patient_sex}', treatment_status = '{$treatment_status}', staff_info = '{$staff_info}', date = '{$date}', total_cost = '{$total_cost}', medical_issue = '{$medical_issue}' WHERE patient_name = '{$patient_name}'";

            $update_query = mysqli_query($connection, $query);

            if(!$update_query){
                die('Query Failed' . mysqli_error($connection));
            } else {
                echo "<h3>Medical History updated successfully!!!!</h3>"; 
            }

        }




?>


      <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Update Medical Record </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action='' method='POST'>
                <h6 class="heading-small text-muted mb-4">Patient information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Patient Name</label>
                        <input type="text" id="input-patientname" name='patient_name' class="form-control" placeholder="Patient Name" value="lucky.jesse" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Patient address</label>
                        <input type="text" id="input-patientaddress" class="form-control" placeholder="Douala" name="patient_address">
                      </div>
                    </div>
                  
                  
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-patientsex">Sex</label>
                        <input type="text" id="input-patientsex" class="form-control" placeholder="Male of Female" name="patient_sex">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-treatmentstatus">Treatment Status</label>
                        <input type="text" id="input-treatmentstatus" class="form-control" placeholder="Discharged or Admitted" name="treatment_status">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Hospital Specific Info</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-doctorid">Staff Information</label>
                        <input id="input-doctorid" class="form-control" placeholder="Staff Information" value="1" type="text" name="staff_info">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-date">Date</label>
                        <input type="date" id="input-date" class="form-control" placeholder="Date of Patient consultation" value="Date of Consultation" name="date">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-totalcost">Total Cost</label>
                        <input type="text" id="input-totalcost" class="form-control" placeholder="10,000fcfa" value="10,000FCFA" name="total_cost">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Medical Issue</label>
                    <!--<textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>-->
                    <input type="text" id="input-medicalissue" class="form-control" placeholder="Patient Medical Issue"  name="medical_issue">
                  </div>
                </div>
                
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit">
                </div>
                <!--<a href="#!" class="btn btn-primary">Create Profile</a>-->
              </form>
            </div>
          </div>
    </div>


<?php  include('includes/footer.php');  ?>
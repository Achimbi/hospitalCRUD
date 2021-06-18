<?php include('includes/header.php'); ?>

<?php include('includes/sidebar.php') ; ?>

<?php   include('includes/mainsubheader.php'); ?>

<!-- Page content -->
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
      <!-- Dark table -->
      <!-- This dark table will be used to view medical records -->
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
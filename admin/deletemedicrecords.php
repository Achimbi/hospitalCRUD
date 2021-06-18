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
                                <td class='text-right'>
                                    <div class='form-group'>
                                    <a href='deletemedicrecords.php?delete={$patient_name}'>
                                    <input class='btn btn-warning' type='submit' name='submit' value='Delete Record'></a>
                                    </div>
                                </td>
                              </tr> ";
                            }
                        }

                    ?>
                </tbody>
              </table>
            </div>

            <?php

                            if(isset($_GET['delete'])){
                                $the_delete_name = $_GET['delete'];
                                $query = "DELETE FROM medikhistory WHERE patient_name = '{$the_delete_name}'";
                                $delete_query = mysqli_query($connection, $query);
                                header("Location: deletemedicrecords.php");
                                
                            }
                        
                        ?>
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


<?php  include('includes/footer.php');  ?>
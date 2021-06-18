<?php include('includes/header.php'); ?>

<?php include('includes/sidebar.php') ; ?>

<?php   include('includes/mainsubheader.php'); ?>

<div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Staff Records</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col" class="sort" data-sort="budget">Sex</th>
                    <th scope="col" class="sort" data-sort="status">Role</th>
                    <th scope="col">Username</th>
                    <th scope="col" class="sort" data-sort="completion">Email</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                <!-- for the loop
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Argon Design System</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $2500 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                          <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                          <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                          <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                          <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="completion mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  for the loop-->

                    <?php

                        $query = "SELECT first_name, last_name, sex, staff_role, username, email_address FROM `staff` WHERE staff_role <> ' '";
                        $readstaff_query = mysqli_query($connection, $query);

                        if(mysqli_num_rows($readstaff_query) > 0){
                            while($result = mysqli_fetch_assoc($readstaff_query)){
                                $firstname = $result['first_name'];
                                $lastname = $result['last_name'];
                                $fullname = $firstname . ' ' . $lastname;
                                $sex = $result['sex'];
                                $role = $result['staff_role'];
                                $username = $result['username'];
                                $email = $result['email_address'];


                                echo "<tr>
                                <th scope='row'>
                                  <div class='media align-items-center'>
                                    <div class='media-body'>
                                      <span class='name mb-0 text-sm'>{$fullname}</span>
                                    </div>
                                  </div>
                                </th>
                                <td class='budget'>
                                  {$sex}
                                </td>
                                <td>
                                  <span class='badge badge-dot mr-4'>
                                    <i class='bg-warning'></i>
                                    <span class='status'>{$role}</span>
                                  </span>
                                </td>
                                <td>
                                  <div class='avatar-group'>
                                    <span class='status'>{$username}</span>
                                  </div>
                                </td>
                                <td>
                                    <div>
                                    <span class='status'>{$email}</span>
                                  </div>
                                </td>
                                <td class='text-right'>
                                  <div class='dropdown'>
                                    <a class='btn btn-sm btn-icon-only text-light' href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                      <i class='fas fa-ellipsis-v'></i>
                                    </a>
                                    <div class='dropdown-menu dropdown-menu-right dropdown-menu-arrow'>
                                      <a class='dropdown-item' href='#'>Action</a>
                                      <a class='dropdown-item' href='#'>Another action</a>
                                      <a class='dropdown-item' href='#'>Something else here</a>
                                    </div>
                                  </div>
                                </td>
                              </tr> ";
                            }
                        }

                    ?>

                </tbody>
              </table>


            </div>

            </div>
        </div>
      </div>


        
    <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            //echo $username;
            $email_address = $_POST['email_address'];
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'] ;
            $sex = $_POST['sex'] ;
            $address = $_POST['address'] ;
            $phone_number = $_POST['phone_number'] ;
            $staff_role = $_POST['staff_role'] ;
            $password = $_POST['password'];
            $img = $_POST['image'];

            $query = "UPDATE staff SET email_address = '{$email_address}', address = '{$address}', phone_number = '{$phone_number}', staff_role = '{$staff_role}', password = '{$password}', username = '{$username}' WHERE first_name = '{$firstname}'";

            $update_query = mysqli_query($connection, $query);

            if(!$update_query){
                die('Query Failed' . mysqli_error($connection));
            } else {
                echo "<h3>Staff account updated successfully!!!!</h3>"; 
            }
        }
    ?>
      <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Update Profile </h3>
                        </div>
                    </div>
                </div>
            
            
                <div class="card-body">
                 <form action='' method='POST'>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" name='username' class="form-control" placeholder="Username" value="lucky.jesse" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com" name="email_address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky" name="first_name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse" name="last_name">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Sex</label>
                        <input type="text" id="input-postal-code" class="form-control" placeholder="Male of Female" name="sex">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Image</label>
                        <input type="text" id="input-postal-code" class="form-control" placeholder="not applicable" name="image">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Password</label>
                        <input type="text" id="input-postal-code" class="form-control" placeholder="password" name="password">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text" name="address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <!--
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control" placeholder="City" value="New York" name="">
                      </div>
                    </div>-->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Phone Number</label>
                        <input type="text" id="input-country" class="form-control" placeholder="Country" value="+237..." name="phone_number">
                      </div>
                    </div>
                    <!--
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                      </div>
                    </div>-->
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Staff Role</label>
                    <!--<textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>-->
                    <input type="text" id="input-country" class="form-control" placeholder="Your Hospital role"  name="staff_role">
                  </div>
                </div>
                
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Update Profile">
                </div>
                <!--<a href="#!" class="btn btn-primary">Create Profile</a>-->
              </form>
            </div>
            </div>
      </div>

      <?php  include('includes/footer.php');  ?>
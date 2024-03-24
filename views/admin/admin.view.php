<?php require 'models/admin.manage.model.php' ?>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center gap-3 p-4">
                            <i class="fas fa-th-large fa-3x " style='color:#F28500'></i>
                            <div class="ms-3">
                                <p class="mb-2">Categories</p>
                                <h6 class="mb-0"><?=count(getCategories())?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center gap-3 p-4">
                        <i class="fas fa-book fa-3x " style='color:#F28500'></i>
                            <div class="ms-3">
                                <p class="mb-2">Courses</p>
                                <h6 class="mb-0"><?=count(getCouses())?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center gap-3 p-4">
                        <i class="fas fa-chart-line fa-3x "style='color:#F28500'></i>
                            <div class="ms-3">
                                <p class="mb-2">Revenue</p>
                                <h6 class="mb-0"><?php 
                                $money = 0;
                                foreach (getRevenues() as $pay){
                                    $money += intval($pay['total']);
                                }
                                echo '$'.$money;
                            ?>
                            </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex gap-3 align-items-center p-4">
                            <i class="bi bi-people fa-2x" style='color:#F28500'></i>
                            <div class="ms-3">
                                <p class="mb-2">Users</p>
                                <h6 class="mb-0"><?=count(students())?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Popular rates</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Title</th>
                                    <th scope="col">students</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $courseCounts = array_count_values(array_column(getRevenues(), 'course_id'));

                                // Sort the counts in descending order
                                arsort($courseCounts);
                                // Print the course_ids and their counts
                                foreach ($courseCounts as $courseId => $count) :

                                ?>
                                <tr>
                                    <td><?=getCousesSold($courseId)['title']?></td>
                                    <td><?=$count?>
                                
                                </td>
                                </tr>
                                    <?php 
                                    endforeach;
                                     ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">User Payments</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Title</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach (getRevenues() as $cou):
                                ?>
                                <tr>
                                    <td><?=getCousesSold($cou['course_id'])['title']?></td>
                                    <td><?=getUsers($cou['user_id'])['name']?></td>
                                    <td><?=$cou['date']?></td>
                                    <td><?='$'.$cou['total']?></td>
                                </tr>
                                    <?php 
                                    endforeach;
                                     ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
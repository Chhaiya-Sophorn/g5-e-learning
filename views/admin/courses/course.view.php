<!-- Form pop up create form -->
<!-- Payment Modal -->

<!-- ........................\ -->
<div class="container p-0">
     <!-- CSS style -->
     <style>
     /* Center modal vertically */
     .modal-dialog {
          display: flex;
          align-items: center;
          min-height: calc(80% - 0.5rem);
     }

     /* Add color on text */
     .modal-title {
          color: black;
     }

     /* Style on search and input search */
     #search {
          border-radius: 5px;
          Bground-color: #343a40;
          color: white;
          border: 1px solid #6c757d;
          padding: 0.375rem 0.75rem;
     }
     </style>


     <!-- .............................. -->
     <div class="table-responsive pb-3 p-5 pt-4">
          <div class=" pt-2 d-flex justify-content-between align-items-center">
               <h3>Courses List</h3>

               <!-- input search -->
               <div class="d-flex align-items-center">
                    <!-- <form action="controllers/admin/courses/courseSearching.controller.php" method="post" > -->
                  <label for="search" class="me-4">Search:</label> <!-- Add margin to the label -->
                    <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" id="searchCourse"  name="searchCourse" type="text"
                         placeholder="Search" aria-label="Search" >
                         <!-- </form> -->
               </div>

               <!-- Button trigger modal -->
               <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style='background:#F28500;color:white'><i
                         class="fa fa-plus-square text-white"></i> Create Course</button>

          </div>
          <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
               aria-hidden="true">
               <div class="modal-dialog">
                    <div class="modal-content">
                         <div class="modal-body rounded-4">
                              <form action="controllers/admin/courses/create_course.controller.php" method="post"
                                   class="rounded-4 shadow" enctype="multipart/form-data">
                                   <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Course:</label>
                                        <input type="text" name="title" class="form-control bg-white" id="title">
                                   </div>
                                   <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Description:</label>
                                        <textarea class="form-control color-danger bg-white " name="description"
                                             id="description"></textarea>
                                   </div>
                                   <div class="mb-3">
                                        <!-- call database -->
                                        <label for="message-text" class="col-form-label">Category :</label>
                                        <select class="form-select bg-white" id="sell1" name="category_id"
                                             aria-label="Default select example">
                                             <?php 
                                        require 'database/database.php';
                                        require 'models/category.model.php' ;
                                        // require 'models/category.model.php';
                                        $categories = getCategories();
                                        foreach ($categories as $categiry):
                                        ?>
                                             <option><?=getCategoryName($categiry['category_id'])['title']?></option>
                                             <?php endforeach?>
                                        </select>

                                   </div>

                                   <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Trainer :</label>
                                        <select class="form-select bg-white" id="sell1" name="user_id"
                                        aria-label="Default select example">
                                        <!-- call database -->
                                             <?php 
                                        require 'database/database.php';
                                        require 'models/admin.model.php';
                                        require 'models/user.model.php' ;  
                                        $trainers = getTrainer();
                                        // $trainers = getTrainerWithUserName(); 
                                        foreach ($trainers as $trainer):?>
                                             <!-- $displayValue = isset($connection) ? $trainer['user_id'] : $trainer['name']; -->
                                             <option><?=$trainer['name']?></option>
                                             <?php endforeach?>
                                        </select>



                                   </div>
                                   <div>
                                        <label>
                                             <input type="radio" value="female" name="gender" /> Female
                                        </label>

                                        <label>
                                             <input type="radio" value="male" name="gender" /> Male
                                        </label>
                                   </div>
                                   <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Price :</label>
                                        <input type="text" name="price" class="form-control bg-white " id="price">
                                   </div>
                                   <div class="mb-3 shadow">
                                        <label for="message-text" class="col-form-label">Upload images :</label>

                                        <input type="file" name='image' class="form-control" aria-label="file example">
                                   </div>
                                   <div class="modal-footer">
                                        <button type="button" class="btn btn-danger p-2"
                                             data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success p-2">Create</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!-- Table get the course and create the course -->
     <div class="container p-5 pt-0 ">
          <table class="table text-start align-middle table-bordered table-dark table-hover mb-0 ">
               <thead class="bg-primary text-white">
                    <tr >
                         <th class="text-center">ID</th>
                         <th class="text-center">Title </th>
                         <!-- <th class="text-center">Description</th> -->
                         <!-- <th class="text-center"></th> -->
                         <th class="text-center">Category</th>
                         <th class="text-center">Trainer</th>
                         <th class="text-center">images</th>
                         <th class="text-center">Price</th>

                         <!-- th class="text-center">Role ID</th> -->
                         <th class="text-center">Action</th>
                    </tr>
               </thead>
               <tbody>

                    <?php
                         $getCourses = getCourses();
                         foreach ($getCourses as $key => $course) :?>

                    <tr>
                         <td scope="row" class="text-center " ><?= $key + 1?></td>
                         <td class="text-center"><?= $course['title'] ?></td>
                         <!-- <td class="text-center"><?= $course["description"] ?></td> -->
                         <td class="text-center"><?=getCategoryName($course['category_id'])['title']?></td>
                         <td class="text-center"><?=getTrainerName($course['user_id'])['name']?></td>

                         <td class="text-center ">
                              <!-- <img class="rounded-circle" src="assets/images/user.jpg" alt="" style="width: 40px; height: 40px;"> 
               -->
                              <div class="position-relative">
                                   <img class="rounded-circle" src="uploading/<?=$course['image_courses']?>" alt=""
                                        style="width: 40px; height: 40px;">
                              </div>
                         </td>
                         <td class="text-center"><?=$course['price']." $"?></td>
                         <td class="text-center d-sm-flex gap-1 align-items-center p-3 ">
                              <form action="/courseEdit" method="post">
                                   <input type="text" name='id' value='<?=$course['course_id']?>' hidden>
                                   <button class="btn btn-sm btn-success">
                                        <i class=" fas fa-edit">Edit</i>
                                   </button>
                              </form>
                              
                              <button type="button" class="btn btn-sm btn-warning show-detail" data-bs-toggle="modal"
                                   data-bs-target="#detailModal<?=$course['course_id']?>">
                                   <i class="fas fa-eye">Details</i>
                              </button>
                              
                              <form id="delete-form" style="display: inline;">
                                   <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal<?= $course['course_id'] ?>"><i
                                             class="fas fa-trash">Delete</i></button>
                                   <button type="submit" form="delete-form-<?= $course['course_id'] ?>"
                                        class="btn btn-primary" style="display: none;">Confirm Delete</button>
                              </form>
                              <!-- Delete Modal -->
                              <div class="modal fade  " id="delete-modal<?= $course['course_id'] ?>" role="dialog">
                                   <div class=" p-2">
                                        <div class="modal-dialog modal-content p-2">

                                             <div class="modal-body p-3">
                                                  <p class="text-dark">Are you sure you want to delete this Course ?</p>
                                             </div>
                                             <div class="modal-footer w-100  ">
                                                  <a href="/viewCourse" class="btn btn-sm  btn-dark ">Cancel</a>
                                                  <form action="controllers/admin/courses/course_delete.controller.php?id<?= $course['course_id'] ?>"
                                                       method="post">
                                                       <input type="text" hidden value="<?=$course['course_id']?>"
                                                            name='course_id'>
                                                       <button type='submit' class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash">Delete</i>
                                                       </button>
                                                  </form>
                                             </div>

                                        </div>
                                   </div>

                              </div>

                              <div class="modal fade " id="detailModal<?=$course['course_id']?>" tabindex="-1"
                                   aria-labelledby="detailModalLabel" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered " style=" max-width: 800px;">
                                        <div class="modal-content w-100 p-3 bg-muted  w-100 ">
                                             <!-- Modal body for course details -->
                                             <div class="modal-body  ">
                                                  <!-- Display course details here -->
                                                  <div class="card d-flex ">

                                                       <div class="modal-header bg-primary ">
                                                            <h5 class="modal-title text-primary text-dark"
                                                                 id="exampleModalLabel">
                                                                 Details </h5>
                                                            <button type="button" class="btn-close"
                                                                 data-bs-dismiss="modal" aria-label="Close"></button>
                                                       </div>
                                                       <div class="card-content d-flex w-100 gap-5 ">

                                                            <div class="image  mt-3" style="width: 300px">
                                                                 <div
                                                                      class="text-start rounded m-3 d-flex row p-3 border w-100 justify-content-center align-items-center mt-3 col ">
                                                                      <img src="uploading/<?=$course['image_courses']?>"
                                                                           alt="Profile Image"
                                                                           class="rounded-circle mb-3"
                                                                           style="width: 130px; height: 110px; object-fit: cover;">
                                                                      <a href=""><p
                                                                           class="modal-title border-bottom text-3 w-100 btn btn-primary text-dark text-center ">
                                                                           <?=getTrainerName($course['user_id'])['name'];?></p></a>
                                                                      </p></a>
                                                                 </div>

                                                            </div>
                                                            <!-- <p class="modal-footer"></p> -->
                                                            <div class="text-start rounded  w-50 d-flex row h-auto">
                                                                 <div class="text h-auto mt-5 gap-1">
                                                                      <a href="#"><p class="modal-title mt-2 p-0 btn text-start">Category Name : <?=getCategoryName($course['category_id'])['title']?></p></a> <br>
                                                                      <a href=""><p class="modal-title mt-2 p-0 btn text-start"> Course
                                                                           Name :
                                                                           <?=$course['title']?></p></a>
                                                                      <p class="modal-title mt-2 text-start">Gender :
                                                                           <?=getTrainerName($course['user_id'])['gender']?>
                                                                      </p>
                                                                      <div class="date text-start ">
                                                                           <small class="text-muted">Asign since:
                                                                                <?php echo date('Y-m-d'); ?></small>

                                                                      </div>
                                                                      <p class="modal-title mt-3  text-start ">
                                                                           <?=$course['description']?></p>
                                                        
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>

                                                  <!-- ... Add other details as needed ... -->
                                             </div>
                                             <!-- Modal footer -->
                                             <!-- <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary"
                                                       data-bs-dismiss="modal">Close</button>
                                             </div> -->
                                        </div>
                                   </div>
                              </div>
                         </td>
                    </tr>
                    <?php endforeach;?>

               </tbody>
               <!-- <tbody>
               </tbody> -->
          </table>
     </div>
     
     <!-- Javascrip for Searching  -->
     <script>
     const searchCourses = document.querySelector("#searchCourse");
     const tbodyChild = document.querySelector("tbody");

     searchCourses.addEventListener("keyup", () => {
          const children = tbodyChild.children;
          const searchTerm = searchCourses.value.toLowerCase(); // Convert search input to lowercase

          for (let i = 0; i < children.length; i++) {
               const contentToSearch = children[i].children[1].textContent.toLowerCase(); // Convert content to lowercase
               
               if (contentToSearch.includes(searchTerm)) {
                    children[i].style.display = "table-row";
               } else {
                    children[i].style.display = "none";
               }
          }
     });
</script>

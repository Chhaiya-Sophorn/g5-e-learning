<!-- Form pop up create form -->
<div class="container mt-5">

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
          background-color: #343a40;
          color: white;
          border: 1px solid #6c757d;
          padding: 0.375rem 0.75rem;
     }
     </style>

     <div class="table-responsive p-3 pt-2">
          <div class="mt-1 mb-1 d-flex justify-content-between align-items-center">
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
               <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                         class="fa fa-plus-square"></i> Create Course</button>

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
                                        foreach ($trainers as $trainer):
                                   ?>
                                             <!-- $displayValue = isset($connection) ? $trainer['user_id'] : $trainer['name']; -->
                                             <option><?=getTrainerName($trainer['user_id'])['name']?></option>
                                             <?php endforeach?>
                                        </select>

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
     <div class="container mt-4">
          <table class="table text-start align-middle table-bordered table-dark table-hover mb-0 mt-3">
               <thead class="bg-primary text-white">
                    <tr >
                         <th class="text-center">ID</th>
                         <th class="text-center">Title </th>
                         <th class="text-center">Description</th>
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
                         <td class="text-center"><?= $course["description"] ?></td>
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
                         <td class="text-center"><?=$course['price']?></td>
                         <td class="text-center d-sm-flex gap-3 align-items-center p-3 ">
                              <form id="delete-form" style="display: inline;">
                                   <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal<?= $course['course_id'] ?>"><i
                                             class="fas fa-trash"></i>Delete</button>
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
                                                  <a href="/viewCourse" class="btn btn-sm  btn-dark " >Cancel</a>
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
                              <form action="/courseEdit" method="post">
                                   <input type="text" name='id' value='<?=$course['course_id']?>' hidden>
                                   <button class="btn btn-sm btn-success""  >
                                        <i class=" fas fa-edit">Edit</i>
                                   </button>
                              </form>

                         </td>
                    </tr>
                    <?php endforeach;?>
               </tbody>
               <tbody>
               </tbody>
          </table>
     </div>
     
     <!-- Javascrip for Searching  -->
<script>
     const searchCourses=document.querySelector("#searchCourse")
     const tbodyChild=document.querySelector("tbody");
     searchCourses.addEventListener("keyup",()=>{
          const children=tbodyChild.children
          console.log(searchCourses.value);
          for(let i=0;i<children.length;i++){
               if(children[i].children[1].textContent.includes(searchCourses.value)){
                    children[i].style.display="table-row"
               }else{
                    children[i].style.display="none"
               }
          }
          
     })
</script>
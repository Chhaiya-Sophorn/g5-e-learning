
<!-- Form pop up create form -->
<div class="container mt-5">
     <!-- <a href="/create_staffs" class="btn btn-outline-primary"> <i class="fas fa-user-plus"></i> Add new course</a> -->
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add lesson</button>
     <!-- <a href="" class="btn btn-primary align-items-center p-3 data-bs-toggle="modal" data-bs-target="#exampleModal" ">Add Lesson</a> -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> -->
                    <div class="modal-body">
                         <form action="controllers/admin/courses/create_course.controller.php" method="post" enctype="multipart/form-data">
                              <div class="mb-3">
                                   <label for="recipient-name" class="col-form-label">Course:</label>
                                   <input type="text" name="title" class="form-control bg-white" id="Course">
                              </div>
                              <div class="mb-3">
                                   <label for="recipient-name" class="col-form-label">Description:</label>
                                   <textarea class="form-control color-danger bg-white " name="description"
                                        id="description"></textarea>
                              </div>
                              <div class="mb-3">
                                   <label for="message-text" class="col-form-label">Category_id:</label>
                                   <input type="number" name="category_id" class="form-control bg-white" id="category_id" mix="1" max="1">
                              </div>
                              <div class="mb-3">
                                   <label for="message-text" class="col-form-label">User_id:</label>
                                   <input type="number" name="user_id" class="form-control bg-white" id="user">
                              </div>
                              <div class="mb-3">
                                   <label for="message-text" class="col-form-label">price :</label>
                                   <input type="text" name="price" class="form-control bg-white" id="price">
                              </div>
                              <div class="mb-3">
                                   <label for="message-text" class="col-form-label">Upload images :</label>
                                   <input type="file" name='image' class="form-control" aria-label="file example">
                              </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                   <button type="submit" class="btn btn-primary">Create</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- Table get the course and create the course -->
<div class="container mt-4">
     <table class="table" style="font-size: 14px">
          <thead class="bg-primary text-white">
               <tr>
                    <th class="text-center">coiurse_id</th>
                    <th class="text-center">Titile </th>
                    <th class="text-center">Description</th>
                    <!-- <th class="text-center"></th> -->
                    <th class="text-center">Category_id</th>
                    <th class="text-center">user_id</th>
                    <th class="text-center">images</th>
                    <th class="text-center">Price</th>

                    <!-- th class="text-center">Role ID</th> -->
                    <th class="text-center">Action</th>
               </tr>
          </thead>
          <tbody>
          
          <?php
          require 'models/admin.model.php';
          $getCourses = getCourses();
          foreach ($getCourses as $course) :?>
               
        <tr>
            <td scope="row" class="text-center "><?=$course['course_id']?></td>
            <td class="text-center"><?= $course['title'] ?></td>
            <td class="text-center"><?= $course["description"] ?></td>
            <td class="text-center"><?=$course['category_id']?></td>
            <td class="text-center"><?=$course['user_id']?></td>
            <td class="text-center ">
            <!-- <img class="rounded-circle" src="assets/images/user.jpg" alt="" style="width: 40px; height: 40px;"> 
               -->
               <div class="position-relative">
                    <img class="rounded-circle" src="uploading/<?=$course['image_courses']?>" alt="" style="width: 40px; height: 40px;">
               </div>
            </td>
            <td class="text-center"><?=$course['price']?></td>
            <td class="text-center d-sm-flex gap-3 align-items-center p-3">
               <form action="controllers/admin/courses/course_delete.controller.php" method="post" >
                    <input type="text" hidden value="<?=$course['course_id']?>" name='course_id'>
                    <button type='sumit'class="btn btn-sm btn-danger" style="font-size: 10px">
                         <i class="fas fa-trash">Delete</i> 
                    </button> 
                  
               </form>

               <form action="#" method="post" >
                    <input type="text" name='id' value='<?=$course['course_id']?>' hidden>
                    <button class="btn btn-sm btn-success ml-3"  style="font-size: 10px">
                        <i class="fas fa-edit">Edit</i> 
                    </button>
               </form>
            </td>
        </tr>
          <?php
               endforeach;
          ?>

          </tbody>
          <tbody>
          </tbody>
     </table>
</div>
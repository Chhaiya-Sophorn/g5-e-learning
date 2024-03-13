<?php 
require "layouts/header.php";
require 'models/lesson.mode.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['update'])){
        editLesson($_POST['lesson_id'],$_POST['title'],$_POST['description'], $_POST['video']);
    }else if(isset($_POST['delete']) && isset($_POST['delete_id'])){
        deleteLesson($_POST['delete_id']);
    }else if(isset($_POST['delete_quiz']) && isset($_POST['quiz_id'])){
        if($_POST['quiz_id'] !=''){
            deleteQuiz($_POST['quiz_id']);
        }
    }else if(isset($_POST['quiz_edit']) && $_POST['quiz_edit'] !=''){
        editQuiz($_POST['edit_id'],getLessonByTitle($_POST['lesson_select'])['lesson_id'],$_POST['contents']);
    }else if(isset($_POST['delete_quizResult']) && $_POST['quiz_idResult'] !=''){
        deleteQuizsumit($_POST['quiz_idResult']);
    }else{
        if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['video']) && isset($_POST['course_id']) && count(lessonExist($_POST['title']))<1){
            if($_POST['title'] !='' && $_POST['description']!='' && $_POST['video']!='' && $_POST['course_id']!='' && count(lessonExist($_POST['title']))<1){
                addLesson( $_POST['title'], $_POST['description'],$_POST['video'], $_POST['course_id']);
               
            }
        }
        if(isset($_POST['lesson']) && isset($_POST['content'])){
            if($_POST['lesson'] !='' && $_POST['content']!=''){
                addQuizzes(getLessonByTitle($_POST['lesson'])['lesson_id'],$_POST['content']);
            }
        }
    }
    
}
?>
<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- addlessons Modal -->
<div class="container mt-5">
     <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                        <h5 class="mb-4 text-orange">Add Lessons</h5>
                        <form action="#lessons" method='post'>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" class="form-control" placeholder="Enter lesson title" style="border-color: #ced4da;" name='title'>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description:</label>
                                <textarea class="form-control" rows="3" placeholder="Enter lesson description" style="border-color: #ced4da;" name='description'></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="video" class="form-label">Video URL:</label>
                                <input type="text" class="form-control" placeholder="Enter video URL" style="border-color: #ced4da;" name='video'>
                            </div>  
                            <input type="text" value='<?=getCourse($_POST['email'])['course_id']?>' name='course_id' hidden>
                            <input type="text" name='email' value='<?=$_POST['email']?>'hidden>
                            <input type="password" name='password' value='<?=$_POST['password']?>' hidden>
                            <button type="sumit" class="btn btn-orange">Submit</button>
                        </form>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- editelesson Modal -->
<div class="container mt-5">
     <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                        <h5 class="mb-4 text-orange">Edit The Lesson</h5>
                        <form action="#lessons" method='post'>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter lesson title" style="border-color: #ced4da;" name='title' value=''>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description:</label>
                                <textarea class="form-control" id="description" rows="3" placeholder="Enter lesson description" style="border-color: #ced4da;" name='description' value=''></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="video" class="form-label">Video URL:</label>
                                <input type="text" class="form-control" id="video" placeholder="Enter video URL" style="border-color: #ced4da;" name='video' value=''>
                            </div>  
                            <input type="text" value='<?=getCourse($_POST['email'])['course_id']?>' name='course_id' hidden>
                            <input type="text" name='email' value='<?=$_POST['email']?>'hidden>
                            <input type="password" name='password' value='<?=$_POST['password']?>' hidden>
                            <input type="text" name='lesson_id' id='lesson_id' value='' hidden>
                            <input type="text" name='update' id='update' value='' hidden>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="sumit" class="btn btn-orange">Update</button>
                        </form>
                       
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- deleteLesson Modal -->
<div class="container mt-5">
     <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                        <h5 class="mb-4 text-orange text-center">Do you want to delete this lesson?</h5>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="#lessons" method='post'>
                                <input type="text" name='delete' hidden>
                                <input type="text" name='delete_id' id='delete_id' hidden>
                                <input type="text" name='email' value='<?=$_POST['email']?>'hidden>
                                <input type="password" name='password' value='<?=$_POST['password']?>' hidden>
                                <button typ='button' class="btn btn-danger">Delete</button>
                            </form>
					</div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- ------------------video showing popup------------ -->
<div class="container mt-1">
     <div class="modal fade" id="videoModel" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg"> <!-- Changed modal-dialog class to modal-lg for a wider modal -->
               <div class="modal-content">
                    <div class="modal-body border border-success p-2 m-4">
						<iframe width="730" height="345" id="videos" src=""></iframe>	
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						</div>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- addquiz Modal -->
<div class="container mt-5">
     <div class="modal fade" id="quizModal" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                        <h5 class="mb-4 text-orange">Add Quiz</h5>
                        <form action="#quizzes" method='post'>
                            <div class="mb-3">
                                <label for="lesson" class="form-label">Select the lesson:</label>
                                <select class="form-select" aria-label="Default select example" name='lesson'>
                                    <option selected>Select the lessons</option>
                                    <?php 
                                    $lessons =getTheLessons(getCourse($_POST['email'])['course_id']);
                                    foreach ($lessons as $lesson):
                                    ?>
                                    <option value="<?=$lesson['title']?>"><?=$lesson['title']?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="video" class="form-label">Quiz URL:</label>
                                <input type="text" class="form-control" placeholder="Enter Quiz URL" style="border-color: #ced4da;" name='content'>
                            </div>  
                            <input type="text" name='email' value='<?=$_POST['email']?>' hidden>
                            <input type="password" name='password' value='<?=$_POST['password']?>' hidden>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="sumit" class="btn btn-orange">Submit</button>
                        </form>
                        
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- ------------------quiz showing popup------------ -->
<div class="container mt-1">
     <div class="modal fade" id="quizModel" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg"> <!-- Changed modal-dialog class to modal-lg for a wider modal -->
               <div class="modal-content">
                    <div class="modal-body border border-success p-2 m-4">
						<iframe width="730" height="345" id="quiz" src=""></iframe>	
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						</div>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- deleteQuiz Modal -->
<div class="container mt-5">
     <div class="modal fade" id="deleteQuizModal" tabindex="-1" aria-labelledby="deleteQuizModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                        <h5 class="mb-4 text-orange text-center">Do you want to delete this Quiz?</h5>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="#quizzes" method='post'>
                                <input type="text" name='delete_quiz' hidden>
                                <input type="text" name='quiz_id' id='quizId' hidden>
                                <input type="text" name='email' value='<?=$_POST['email']?>' hidden>
                                <input type="password" name='password' value='<?=$_POST['password']?>' hidden>
                                <button typ='button' class="btn btn-danger">Delete</button>
                            </form>
					</div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- deleteQuizresult Modal -->
<div class="container mt-5">
     <div class="modal fade" id="deleteQuizResultModal" tabindex="-1" aria-labelledby="deleteQuizResultModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                        <h5 class="mb-4 text-orange text-center">Do you want to delete this Result?</h5>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="#list_student_join" method='post'>
                                <input type="text" name='delete_quizResult' hidden>
                                <input type="text" name='quiz_idResult' id='quiz_idResult' hidden>
                                <input type="text" name='email' value='<?=$_POST['email']?>' hidden>
                                <input type="password" name='password' value='<?=$_POST['password']?>' hidden>
                                <button typ='button' class="btn btn-danger">Delete</button>
                            </form>
					</div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- editQuiz Modal -->
<div class="container mt-5">
     <div class="modal fade" id="editQuizModal" tabindex="-1" aria-labelledby="editQuizModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                        <h5 class="mb-4 text-orange">Edit The Quiz</h5>
                        <form action="#quizzes" method='post'>
                            <div class="mb-3">
                                <label for="lesson" class="form-label">Select the lesson:</label>
                                <select class="form-select" aria-label="Default select example" name='lesson_select' id='lesson_select'>
                                    <option selected>Select the lessons</option>
                                    <?php 
                                    $lessons =getTheLessons(getCourse($_POST['email'])['course_id']);
                                    foreach ($lessons as $lesson):
                                    ?>
                                    <option value="<?=$lesson['title']?>"><?=$lesson['title']?></option>
                                    <?php endforeach ?>
                                </select>
                            </div> 
                            <div class="mb-3">
                                <label for="video" class="form-label">Quiz URL:</label>
                                <input type="text" class="form-control" placeholder="Enter Quiz URL" style="border-color: #ced4da;" name='contents' id='content'>
                            </div> 
                            <input type="text" value='<?=getCourse($_POST['email'])['course_id']?>' name='course_id' hidden>
                            <input type="text" name='email' value='<?=$_POST['email']?>'hidden>
                            <input type="password" name='password' value='<?=$_POST['password']?>' hidden>
                            <input type="text" name='edit_id' id='edit_id' value='' hidden>
                            <input type="text" name='quiz_edit' id='quiz_edit' value='' hidden>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="sumit" class="btn btn-orange">Update</button>
                        </form>
                       
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- -------------quiz result showing----------- -->
<div class="container mt-1">
     <div class="modal fade" id="qresultModel" tabindex="-1" aria-labelledby="qresultModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg"> <!-- Changed modal-dialog class to modal-lg for a wider modal -->
               <div class="modal-content">
                    <div class="modal-body border border-success p-2 m-4 text-center">
                        <img src="" id='imgresult'>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						</div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- ----------------------------------------------- -->
<div class="row mb-4 mt-5">
	<div class="col-lg-8 text-center mx-auto">
		<h2 class="fs-1">Welcom to the <span class='text-orange'><?=getCourse($_POST['email'])['title']?></span> Courses</h2>
		<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
	</div>
</div>

<section id='testing_blog'>
    <div class="container mt-5">
        <div class="row justify-content-center"> <!-- Center the row -->
        <?php
        $trainers =getCourse($_POST['email']);
        $train = selectTrainer($trainers['user_id']);
        foreach ($train as $trainer):
        ?>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="card card-body shadow rounded-3 text-center">
                    <img class="rounded-circle mx-auto d-block" src="uploading/<?=$trainer['profile_image']?>" alt="" style="width: 170px; height: 170px;margin-top: -100px;">
                    <h5 class='m-1'><?=$trainer['name']?></h5>
                    <span>I am here to develop you</span>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<div class="container ml-5">

    <a href="#lessons"><button type="button" class="btn btn-outline-orange">Lessons</button></a>
    <a href="#quizzes"><button type="button" class="btn btn-outline-orange">quiz</button></a>
    <a href="#list_student_join"> <button type="button" class="btn btn-outline-orange">The result testing of students</button></a>
</div>

<section id='lessons'>
    <div class="container">
    <div class="mt-1 mb-1 d-flex justify-content-between align-items-center">
    <h3>Lessons List</h3>

    <!-- input search -->
    <div class="d-flex align-items-center">
        <!-- <form action="controllers/admin/courses/courseSearching.controller.php" method="post" > -->
        <label for="search" class="me-4">Search:</label> <!-- Add margin to the label -->
        <input class="form-control pe-5 bg-secondary bg-opacity-10 border-info" id="searchListLisson"  name="searchCourse" type="text"
        placeholder="Search" aria-label="Search" >
        <!-- </form> -->
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#paymentModal"><i class="fa fa-plus-square"></i> Add lesson</button>

    </div>        
    <table class="table table-bordered" id="lessonTable" >
        <thead class='text-orange'>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Video</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $course_id =getCourse($_POST['email'])['course_id'];
        $lessons = getTheLessons($course_id);
        foreach ($lessons as $lesson):
        ?>
        <tr>
            <td><?=$lesson['title']?></td>
            <td><?=$lesson['description']?></td>
            <td><button type='button' class="video border border-0" data-bs-toggle="modal" data-bs-target="#videoModel" data-videos="<?=$lesson['video']?>"><i class="fas fa-play-circle" style="color:orange;font-size: 24px;"></i></button></td>
            <td class='d-flex gap-2'>
                <button type='button' class="btn btn-sm btn-orange show-popup" data-bs-toggle="modal" data-bs-target="#editModal" data-title='<?=$lesson['title']?>' data-description='<?=$lesson['description']?>' data-video='<?=$lesson['video']?>' data-id='<?=$lesson['lesson_id']?>'><i class="fas fa-edit"></i>Edit</button>
                <button type='button' class="btn btn-sm btn-danger delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-lesson='<?=$lesson['lesson_id']?>'><i class="fas fa-trash"></i>Delete</button>
            </td>
        </tr>
        <?php endforeach?>
        </tbody>
    </table>
    </div>

</section>
<section id='quizzes'>
    <div class="container">
    <div class="mt-1 mb-1 d-flex justify-content-between align-items-center">
    <h3>Quiz List</h3>

    <!-- input search -->
    <div class="d-flex align-items-center">
        <!-- <form action="controllers/admin/courses/courseSearching.controller.php" method="post" > -->
        <label for="search" class="me-4">Search:</label> <!-- Add margin to the label -->
        <input class="form-control pe-5 bg-secondary bg-opacity-10 border-info" id="trainerSearchQuiz"  name="trainerSearchQuiz" type="text"
        placeholder="Search" aria-label="Search" >
        <!-- </form> -->
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-orange"  data-bs-toggle="modal" data-bs-target="#quizModal"><i class="fa fa-plus-square"></i> Add quiz</button>

    </div>        
    <table class="table table-bordered" id="quizTable" >
        <thead class='text-orange'>
        <tr>
            <th>Lesson</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody id="quizTable" >
            <?php 
            $course_id =getCourse($_POST['email'])['course_id'];
            $lessons = getTheLessons($course_id);
            foreach ($lessons as $lesson):
                foreach (getQuizzesbylessonId($lesson['lesson_id']) as $quize):
            ?>
        <tr>
            <td><?=getLessonById($quize['lesson_id'])['title']?></td>
            <td><button type='button' class="quiz border border-0" data-bs-toggle="modal" data-bs-target="#quizModel" data-quiz="<?=$quize['content']?>"><i class="fas fa-list-alt" style="color:orange;font-size: 30px;"></i></button></td>
            <td>
                <button type='button' class="btn btn-sm btn-orange editQuiz" data-bs-toggle="modal" data-bs-target="#editQuizModal" data-lessonselect='<?=getLessonById($quize['lesson_id'])['title']?>' data-content='<?=$quize['content']?>' data-editid='<?=$quize['quiz_id']?>'><i class="fas fa-edit"></i>Edit</button>
                <button type='button' class="btn btn-sm btn-danger deleteQuiz" data-bs-toggle="modal" data-bs-target="#deleteQuizModal" data-quizid='<?=$quize['quiz_id']?>'><i class="fas fa-trash"></i>Delete</button>
            </td>
        </tr>
        <?php
            endforeach ;
        endforeach;
         ?>
        </tbody>
    </table>
    </div>

</section>
<section id='list_student_join'>
    <div class="container">
    <div class="mt-1 mb-1 d-flex justify-content-between align-items-center">
    <h3>The result testing of students List</h3>

    <!-- input search -->
    <div class="d-flex align-items-center">
        <!-- <form action="controllers/admin/courses/courseSearching.controller.php" method="post" > -->
        <label for="search" class="me-4">Search:</label> <!-- Add margin to the label -->
        <input class="form-control pe-5 bg-secondary bg-opacity-10 border-info" id="searchSubmit"  name="searchSubmit" type="text"
        placeholder="Search" aria-label="Search" >
        <!-- </form> -->
    </div>

    </div>        
    <table class="table table-bordered  " id="SubmitTable" >
        <thead class='text-orange'>
        <tr>
            <th>Name</th>
            <th>Lesson</th>
            <th>The result</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 
            $course_id =getCourse($_POST['email'])['course_id'];
            $lessons = getTheLessons($course_id);
            foreach ($lessons as $lesson):
                foreach (getQuizzesSumitbylessonId($lesson['lesson_id']) as $quizeSumit):
            ?>
        <tr>
            <td><?=getStudentById($quizeSumit['user_id'])['name']?></td>
            <td><?=getLessonById($quizeSumit['lesson_id'])['title']?></td>
            <td><button type='button' class="quiz border border-0 show-result" data-bs-toggle="modal" data-bs-target="#qresultModel" data-result="<?=$quizeSumit['image']?>"><i class="fas fa-image" style="color:orange;font-size: 30px;"></i></button></td>
            <td><button type='button' class="btn btn-sm btn-danger deleteQuizResult" data-bs-toggle="modal" data-bs-target="#deleteQuizResultModal" data-quizidresult='<?=$quizeSumit['sumit_id']?>'><i class="fas fa-trash"></i>Delete</button></td>
        </tr>
        <?php
            endforeach;
        endforeach;
        ?>
        </tbody>
    </table>
    </div>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('.show-popup').click(function() {
    var title = $(this).data('title');
    var description = $(this).data('description');
    var video = $(this).data('video'); 
    var id = $(this).data('id'); 
    
    $('#title').val(title);
    $('#description').val(description);
    $('#video').val(video);
    $('#update').val(title);
    $('#lesson_id').val(id);
  });
});

$(document).ready(function() {
  $('.delete').click(function() {
    var lesson_id = $(this).data('lesson');
    
    $('#delete_id').val(lesson_id);
  });
});


$(document).ready(function() {
  $('.video').click(function() {
    var videos = $(this).data('videos');
    $('#videos').attr('src', videos);
  });
});


$(document).ready(function() {
  $('.quiz').click(function() {
    var quiz = $(this).data('quiz');
    $('#quiz').attr('src', quiz);
  });
});


$(document).ready(function() {
  $('.deleteQuiz').click(function() {
    var quizID = $(this).data('quizid');
    
    $('#quizId').val(quizID);
    
  });
});

$(document).ready(function() {
  $('.deleteQuizResult').click(function() {
    var quizIDresult = $(this).data('quizidresult');
    
    $('#quiz_idResult').val(quizIDresult);
    
  });
});

$(document).ready(function() {
  $('.editQuiz').click(function() {
    var lesson_select = $(this).data('lessonselect');
    var content = $(this).data('content');
    var editid = $(this).data('editid');

    $('#lesson_select').val(lesson_select);
    $('#content').val(content);
    $('#edit_id').val(editid);
    $('#quiz_edit').val(lesson_select);

  });
});

$(document).ready(function() {
  $('.show-result').click(function() {
    var result = $(this).data('result');
    
    $('#imgresult').attr('src','uploading/'+result);
    
  });
});

// <!-- Javascript for trainer manage search -->

// trainer search listLesson
const searchLesson = document.querySelector("#searchListLisson");
     const tbodyChild = document.querySelector("#lessonTable tbody");

     searchLesson.addEventListener("keyup", () => {
          const children = tbodyChild.children;
          const searchTerm = searchLesson.value.toLowerCase(); // Convert search input to lowercase

          for (let i = 0; i < children.length; i++) {
               const contentToSearch = children[i].children[0].textContent.toLowerCase(); // Convert content to lowercase
               
               if (contentToSearch.includes(searchTerm)) {
                    children[i].style.display = "table-row";
               } else {
                    children[i].style.display = "none";
               }
          }
     });

// trainer Search quizzes
const searchQuiz = document.querySelector("#trainerSearchQuiz");
const tbodyQuiz = document.querySelector("#quizTable tbody");

searchQuiz.addEventListener("keyup", () => {
    const children = tbodyQuiz.children;
    const searchListQuiz = searchQuiz.value.toLowerCase();

    for (let k = 0; k < children.length; k++) {
        const quizToSearch = children[k].children[0].textContent.toLowerCase();
        if (quizToSearch.includes(searchListQuiz)) {
            children[k].style.display = "table-row";
        } else {
            children[k].style.display = "none";
        }
    }
});

//  <!-- trainer Search Submit -->
     const searchSubmit = document.querySelector("#searchSubmit");
     console.log(searchQuiz)
     const tbodySubmit = document.querySelector("#SubmitTable tbody");

     searchSubmit.addEventListener("keyup", () => {
          const children = tbodySubmit.children;
          const searchListQuiz = searchSubmit.value.toLowerCase(); // Convert search input to lowercase

          for (let k = 0; k < children.length; k++) {
               const quizToSearch = children[k].children[0].textContent.toLowerCase(); // Convert content to lowercase
               
               if (quizToSearch.includes(searchListQuiz)) {
                    children[k].style.display = "table-row";
               } else {
                    children[k].style.display = "none";
               }
          }
     }); 

</script>
</main>
<!-- **************** MAIN CONTENT END **************** -->


<?php require "layouts/footer.php";?>

<!-- Back to up -->





<div class="card  d-sm-flex bg-dark">
    <div class="card-body mt-8  w-50 align-self-center ">
        <form action="/updateCourse" method="post" class="g-5 " >
            <?php
                require 'models/admin.model.php';
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $course = getCourse($_POST['id']);
                }
            ?>
            <input type="number" placeholder="course_id" class="form-control w-100 bg-white  p-2  " name="course_id" value="<?= $course['course_id']?>" hidden>
            <div class="form-group mt-2"> 
                <input type="text " placeholder="course" class="form-control w-100 bg-white  p-2" name="title" value="<?= $course['title']?>">
            </div> 
            <div class="form-group mt-2"> 
                <textarea name="description" placeholder="description"  id="description" class="w-100"><?= $course['description']?></textarea>
            </div> 
            <div class="form-group mt-2"> 
                <input type="number" placeholder="category_id" class="form-control w-100 bg-white  p-2" name="category_id" value="<?= $course['category_id']?>">
            </div> 
            <div class="form-group mt-2"> 
                <input type="number" placeholder="user_id" class="form-control w-100 bg-white p-2" name="user_id" value="<?= $course['user_id']?>">
            </div> 
            <div class="form-group mt-2"> 
                <input type="file" placeholder="input file" class="form-control w-100 bg-white  p-2" name="image" value="<?= $course['image_courses']?>">
            </div> 
            <div class="form-group mt-2"> 
                <input type="text" placeholder="price" class="form-control w-100 bg-white  p-2" name="price" value="<?= $course['price']?>">
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-block btn-primary">Cancle </button>
                <button type="submit" class="btn btn-block btn-primary">Update </button>
            </div>
        </form>
    </div>
</div>

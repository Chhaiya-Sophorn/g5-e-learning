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

    .avatar {
        vertical-align: middle;
        width: 45px;
        height: 45px;
        border-radius: 50%;
    }
</style>

<div class="table-responsive p-5 pt-3">
    <div class="mt-3 mb-3 d-flex justify-content-between align-items-center">
        <h3>Students List</h3>

        <!-- input search -->
        <div class="d-flex align-items-center"> <!-- Wrap label and input in a flex container -->
            <label for="search" class="me-4">Search:</label> <!-- Add margin to the label -->
            <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-modal"><i class="fa fa-plus-square"></i> Add Student</button>

    </div>
    <table class="table text-start align-middle table-bordered table-dark table-hover mb-0 mt-3">
        <thead>
            <tr class="text-white">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Phone</th>
                <th scope="col">Gender</th>
                <th scope="col">Profile</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <!-- ==================Update trainer ============== -->
        <tbody>
            <?php
            require 'database/database.php';
            require 'models/student.model.php';

            $students = getStudents();
            foreach ($students as $key => $student) :
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['password'] ?></td>
                    <td><?= $student['phone'] ?></td>
                    <td><?= $student['gender'] ?></td>
                    <td>
                        <img src="../../../uploading/<?= $student['profile_image'] ?>" class="avatar">
                    </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="" data-bs-toggle="modal" data-bs-target="#deleteCategory<?= $student['user_id'] ?>"><i class="fas fa-trash"></i> Delete</a>
                    </td>
            </tr>

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteCategory<?= $student['user_id'] ?>" tabindex="-1" aria-labelledby="deleteCategoryLabel<?= $student['user_id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white" style="border: 3px solid white;">
                                <h5 class="modal-title text-white" id="deleteCategoryLabel<?= $student['user_id'] ?>">Delete Student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="lead">Are you sure you want to delete ?</p>
                            </div>
                            <form action="controllers/admin/students/student_delete.controller.php" method="post">
                                <input type="hidden" name="id" value="<?= $student['user_id'] ?>">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </tbody>
    </table>
</div>




<!-- ========================= show popup form when create student================= -->
<!-- Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/admin/students/student_addstudent.controller.php" method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="email" name="email">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="phone" name="phone">
                        <label for="floatingPassword">Phone</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                    </div>
                    <!-- <label for="image">Please upload your image here:</label> -->
                    <div class="form-floating mb-4">

                        <input type="file" name='image' class="form-control" aria-label="file example" style="background-color: rgba(0, 0, 0, 0.1);">
                    </div>
                    <div class="form-floating mb-4 btn d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-success" style="margin-left: 10px;">Add</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
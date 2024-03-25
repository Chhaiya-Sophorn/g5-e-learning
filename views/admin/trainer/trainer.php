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
        <h3>Trainers List</h3>

        <!-- input search -->
        <div class="d-flex align-items-center"> <!-- Wrap label and input in a flex container -->
            <label for="search" class="me-4">Search:</label> <!-- Add margin to the label -->
            <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
        </div>

        <!-- Button trigger modal -->
        <button type="button" style='background:#F28500;color:white' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-modal"><i class="fa fa-plus-square"></i> Add Trainer</button>

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
                <th scope="col">Operations</th>
            </tr>
        </thead>

        <!-- ==================Update trainer ============== -->
        <tbody>
            <?php
            require 'database/database.php';
            require 'models/user.model.php';

            $trainers = getTrainer();
            foreach ($trainers as $key => $trainer) :
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $trainer['name'] ?></td>
                    <td><?= $trainer['email'] ?></td>
                    <td><?= $trainer['password'] ?></td>
                    <td><?= $trainer['phone'] ?></td>
                    <td><?= $trainer['gender'] ?></td>
                    <td>
                        <img src="../../../uploading/<?= $trainer['profile_image'] ?>" class="avatar">
                    </td>
                    <td>
                        <form action="/trainer_home" method="post" style="display: inline;">
                            <input type="text" name="email" value="<?= $trainer['email'] ?>" hidden>
                            <input type="text" name="admin" value="" hidden>
                            <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> Detail</button>
                        </form>
                        <form id="delete-form-<?= $trainer['user_id'] ?>" action="controllers/admin/trainer/delete.controller.php" method="post" style="display: inline;">
                            <input type="text" name="id" value="<?= $trainer['user_id'] ?>" hidden>
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#delete-modal<?= $trainer['user_id'] ?>"><i class="fas fa-trash"></i>Delete</button>
                            <button type="submit" form="delete-form-<?= $trainer['user_id'] ?>" class="btn btn-primary" style="display: none;">Confirm Delete</button>
                        </form>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="delete-modal<?= $trainer['user_id'] ?>" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-primary">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-dark">Are you sure you want to delete this item?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" form="delete-form-<?= $trainer['user_id'] ?>" class="btn btn-primary">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- ========================= show popup form when create category ================= -->
<!-- Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Add Trainder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/admin/trainer/add.controller.php" method="post" enctype="multipart/form-data">
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
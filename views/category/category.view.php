<?php
require "models/admin.model.php";
?>

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

<div class="table-responsive p-5 pt-3">
    <div class="mt-3 mb-3 d-flex justify-content-between align-items-center">
        <h3>Categories List</h3>

        <!-- input search -->
        <div class="d-flex align-items-center"> <!-- Wrap label and input in a flex container -->
            <label for="search" class="me-4">Search:</label> <!-- Add margin to the label -->
            <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-modal"><i class="fa fa-plus-square"></i> Create Category</button>
        
    </div>
    <table class="table text-start align-middle table-bordered table-dark table-hover mb-0 mt-3">
        <thead>
            <tr class="text-white">
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <!-- ==================Edit Category ============== -->
        <tbody>
            <?php
            $categories = getCategories();
            foreach ($categories as $key => $category) :
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $category['title'] ?></td>
                    <td><?= $category['description'] ?></td>
                    <td>
                        <a onclick="return confirm('Do you want to delete this category?')" class="btn btn-sm btn-primary" href="controllers/category/category_delete.controller.php?id=<?= $category['category_id'] ?>"><i class="fas fa-trash"></i> Delete</a>
                        <button type='button' class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit-modal<?= $category['category_id'] ?>"><i class="fas fa-edit"></i>Edit</button>
                    </td>
                </tr>
                <div class="modal fade" id="edit-modal<?= $category['category_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-primary" id="exampleModalLabel">Update Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="controllers/category/category_edit.controller.php" method="post">
                                    <input type="hidden" class="form-control" value="<?= $category['category_id'] ?>" id="id" name="id">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?= $category['title'] ?>" id="title" name="title">
                                        <label for="floatingInput">Category Name</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" value="<?= $category['description'] ?>" id="description" name="description">
                                        <label for="floatingPassword">Description</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </tbody>


        </tbody>
    </table>
</div>

<!-- ========================= show popup form when create category ================= -->
<!-- Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Create Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/category/insert_category.controller.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" name="title">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="description" name="description">
                        <label for="floatingPassword">Description</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
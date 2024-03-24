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
            <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" id="searchCategory" aria-label="Search">
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn" style='background:#F28500;color:white' data-bs-toggle="modal" data-bs-target="#add-modal"><i class="fa fa-plus-square"></i> Create Category</button>

    </div>
    <table class="table text-start align-middle table-bordered table-dark table-hover mb-0 mt-3">
        <thead>
            <tr class="text-white">
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
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
                        <div class="position-relative">
                            <img class="rounded-circle" src="uploading/<?= $category['image'] ?>" alt="" style="width: 40px; height: 40px;">
                        </div>
                    </td>
                    <td>
                        <button type='button' class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit-modal<?= $category['category_id'] ?>"><i class="fas fa-edit"></i>Edit</button>
                        <a class="btn btn-sm btn-primary" href="" data-bs-toggle="modal" data-bs-target="#deleteCategory<?= $category['category_id'] ?>"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>

                <!-- Modal delete-->
                <div class="modal fade" id="deleteCategory<?= $category['category_id'] ?>" tabindex="-1" aria-labelledby="deleteCategoryLabel<?= $category['category_id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white" style="border: 3px solid white;">
                                <h5 class="modal-title" id="deleteCategoryLabel<?= $category['category_id'] ?>">Delete Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="lead">Are you sure you want to delete "<span class="text-primary"><?= $category['title'] ?></span>"?</p>
                            </div>
                            <form action="controllers/admin/category/category_delete.controller.php" method="post">
                                <input type="hidden" name="id" value="<?= $category['category_id'] ?>">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Modal Edit-->
                <div class="modal fade" id="edit-modal<?= $category['category_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="controllers/admin/category/category_edit.controller.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" value="<?= $category['category_id'] ?>" id="id" name="id">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?= $category['title'] ?>" id="title" name="title">
                                        <label for="floatingInput">Category Name</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" value="<?= $category['description'] ?>" id="description" name="description">
                                        <label for="floatingPassword">Description</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="file" placeholder="input file" class="form-control bg-dark p-3" name="image">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Update</button>
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
            <div class="modal-header" >
                <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controllers/admin/category/insert_category.controller.php" method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" name="title">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="description" name="description">
                        <label for="floatingPassword">Description</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="file" placeholder="input file" class="form-control bg-dark p-3" name="image">
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

<!--Search category in list by JavaScript-->
<script>
     const searchCategories = document.querySelector("#searchCategory");
     const tbodyChild = document.querySelector("tbody");

     searchCategories.addEventListener("keyup", () => {
          const children = tbodyChild.children;
          const searchCate = searchCategories.value.toLowerCase(); // Convert search input to lowercase

          for (let i = 0; i < children.length; i++) {
               const contentToSearch = children[i].children[1].textContent.toLowerCase(); // Convert content to lowercase
               
               if (contentToSearch.includes(searchCate)) {
                    children[i].style.display = "table-row";
               } else {
                    children[i].style.display = "none";
               }
          }
     });
</script>
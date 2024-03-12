
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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-modal"><i class="fa fa-plus-square"></i>Add Trainer</button>
        
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
            </tr>
        </thead>

        <!-- ==================Edit Category ============== -->
        <tbody>
                <tr>
                    <td>1</td>
                    <td>Chaiya</td>
                    <td>chaiy@sophorn.student</td>
                    <td>kaka24</td>
                    <td>0977770000</td>
                    <td>Male</td>
                    <td>
                    <img src="trainerprofile/trainer1.png" alt="Avatar" class="avatar">
                    </td>
                    <td>
                        <a onclick="return confirm('Do you want to delete this category?')" class="btn btn-sm btn-primary" href="controllers/admin/category/category_delete.controller.php?id=<?= $category['category_id'] ?>"><i class="fas fa-trash"></i> Delete</a>
                        <button type='button' class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit-modal<?= $category['category_id'] ?>"><i class="fas fa-edit"></i>Edit</button>
                    </td>
                </tr>
        </tbody>


        </tbody>
    </table>
</div>


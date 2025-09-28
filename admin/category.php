<?php
require_once '../../electro-hut-backend/category.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Categories - ElectroHut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'side-bar.php' ?>

            <div class="col-12 col-lg-9 p-4">
                <div class="container mt-4">
                    <h5>Categories</h5>
                    <button id="btnAddCategory" class="btn btn-outline-dark mb-3">Add New Category</button>

                    <div class="card w-100">
                        <div class="card-body">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Image</th>
                                        <th>Category Name</th>
                                        <th>Total Products</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $cat) : ?>
                                        <tr data-category-id="<?= $cat['category_id'] ?>">
                                            <td><?= $cat['category_id'] ?></td>
                                            <td>
                                                <img src="../<?= htmlspecialchars($cat['category_image_url']) ?>" alt="<?= htmlspecialchars($cat['category_name']) ?>" style="max-width: 80px; max-height: 80px;" />
                                            </td>
                                            <td><?= htmlspecialchars($cat['category_name']) ?></td>
                                            <td><?= isset($productCounts[$cat['category_id']]) ? $productCounts[$cat['category_id']] : 0 ?></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm btnEditCategory" data-category-id="<?= $cat['category_id'] ?>">Edit</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mt-4" id="categoryFormContainer" style="display: none;">
                        <div class="card-body">
                            <h6 id="formTitle">Add New Category</h6>
                            <form id="categoryForm" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="category_id" id="category_id" value="" />
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name" required />
                                </div>
                                <div class="mb-3">
                                    <label for="category_image" class="form-label">Category Image</label>
                                    <input type="file" class="form-control" id="category_image" name="category_image" accept="image/*" />
                                </div>
                                <button type="submit" id="btnSubmit" name="add_category" class="btn btn-success">Submit</button>
                                <button type="submit" id="btnSave" name="edit_category" class="btn btn-success">Save</button>
                                <button type="button" id="btnCancelForm" class="btn btn-secondary ms-2">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const btnAddCategory = document.getElementById('btnAddCategory');
        const formContainer = document.getElementById('categoryFormContainer');
        const formTitle = document.getElementById('formTitle');
        const categoryForm = document.getElementById('categoryForm');
        const btnCancelForm = document.getElementById('btnCancelForm');
        const btnSave = document.getElementById('btnSave');
        const btnSubmit = document.getElementById('btnSubmit');
        btnAddCategory.addEventListener('click', () => {
            formTitle.textContent = 'Add New Category';
            categoryForm.reset();
            document.getElementById('category_id').value = '';
            formContainer.style.display = 'block';
            btnSubmit.style.display = "inline-block";
            btnSave.style.display = "none";
        });

        btnCancelForm.addEventListener('click', () => {
            formContainer.style.display = 'none';
        });

        // Handle Edit buttons
        document.querySelectorAll('.btnEditCategory').forEach(btn => {
            btn.addEventListener('click', () => {
                const catId = btn.getAttribute('data-category-id');
                const row = document.querySelector(`tr[data-category-id="${catId}"]`);

                // Extract current values from the row
                const catName = row.children[2].textContent.trim();

                // Fill form with existing data
                formTitle.textContent = 'Edit Category ID : ' + catId;
                document.getElementById('category_id').value = catId;
                document.getElementById('category_name').value = catName;
                formContainer.style.display = 'block';
                btnSubmit.style.display = "none";
                btnSave.style.display = "inline-block";

                // Scroll to form
                formContainer.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
require_once '../../electro-hut-backend/brand.php'; // Your backend PHP (like the one I sent)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Brands - ElectroHut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'side-bar.php' ?>

            <div class="col-12 col-lg-9 p-4">
                <div class="container mt-4">
                    <h5>Brands</h5>
                    <button id="btnAddBrand" class="btn btn-outline-dark mb-3">Add New Brand</button>

                    <div class="card w-100">
                        <div class="card-body">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Brand Image</th>
                                        <th>Brand Name</th>
                                        <th>Total Products</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($brands as $brand) : ?>
                                        <tr data-brand-id="<?= $brand['brand_id'] ?>">
                                            <td><?= $brand['brand_id'] ?></td>
                                            <td>
                                                <img src="../<?= htmlspecialchars($brand['brand_image_url']) ?>" alt="<?= htmlspecialchars($brand['brand_name']) ?>" style="max-width: 80px; max-height: 80px;" />
                                            </td>
                                            <td><?= htmlspecialchars($brand['brand_name']) ?></td>
                                            <td><?= $brand['total_products'] ?></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm btnEditBrand" data-brand-id="<?= $brand['brand_id'] ?>">Edit</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mt-4" id="brandFormContainer" style="display: none;">
                        <div class="card-body">
                            <h6 id="formTitle">Add New Brand</h6>
                            <form id="brandForm" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="brand_id" id="brand_id" value="" />
                                <div class="mb-3">
                                    <label for="brand_name" class="form-label">Brand Name</label>
                                    <input type="text" class="form-control" id="brand_name" name="brand_name" required />
                                </div>
                                <div class="mb-3">
                                    <label for="brand_image" class="form-label">Brand Image</label>
                                    <input type="file" class="form-control" id="brand_image" name="brand_image" accept="image/*" />
                                </div>
                                <button type="submit" id="btnSubmit" name="add_brand" class="btn btn-success">Submit</button>
                                <button type="submit" id="btnSave" name="edit_brand" class="btn btn-success">Save</button>
                                <button type="button" id="btnCancelForm" class="btn btn-secondary ms-2">Cancel</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        const btnAddBrand = document.getElementById('btnAddBrand');
        const formContainer = document.getElementById('brandFormContainer');
        const formTitle = document.getElementById('formTitle');
        const brandForm = document.getElementById('brandForm');
        const btnCancelForm = document.getElementById('btnCancelForm');
        const btnSave = document.getElementById('btnSave');
        const btnSubmit = document.getElementById('btnSubmit');

        btnAddBrand.addEventListener('click', () => {
            formTitle.textContent = 'Add New Brand';
            brandForm.reset();
            document.getElementById('brand_id').value = '';
            formContainer.style.display = 'block';
            btnSubmit.style.display = "inline-block";
            btnSave.style.display = "none";
        });

        btnCancelForm.addEventListener('click', () => {
            formContainer.style.display = 'none';
        });

        // Handle Edit buttons
        document.querySelectorAll('.btnEditBrand').forEach(btn => {
            btn.addEventListener('click', () => {
                const brandId = btn.getAttribute('data-brand-id');
                const row = document.querySelector(`tr[data-brand-id="${brandId}"]`);

                // Extract current values from the row
                const brandName = row.children[2].textContent.trim();

                // Fill form with existing data
                formTitle.textContent = 'Edit Brand ID : ' + brandId;
                document.getElementById('brand_id').value = brandId;
                document.getElementById('brand_name').value = brandName;
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
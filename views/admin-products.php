<?php
require_once "templates/adminNav.php"
?>


<div class="container">

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped w-75 m-auto table-hover table-bordered border-secondary">
                <thead>
                    <tr>

                        <th class="border-0" colspan="3">
                            <h2>All Products</h2>
                        </th>
                        <th class="border-0 text-end">
                            <button class="add-btn fs-5 rounded p-2">Add Product</button>
                        </th>
                    </tr>
                    <tr class='text-center text-white fs-5' style="background-color: #362517;">
                        <th>Product</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody class='text-center'>
                    <tr>
                        <td>tea</td>
                        <td>20</td>
                        <td><img src='./imgs/' alt='User Image' style='max-width: 50px; max-height: 50px;'></td>
                        <td class='text-center'>
                            <!-- Button trigger modal***edit*** -->
                            <button type="button" class=" justify-content-center inline-flex rounded-circle fs-5  editborder " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>

                            <!--end edit btn -->

                            <!-- Modal -->
                            <div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...add product
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class=' mx-1 justify-content-center inline-flex rounded-circle fs-5  delborder'>
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
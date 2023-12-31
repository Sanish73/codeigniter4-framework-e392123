<!DOCTYPE html>
<html>
    <head>
        <title>Service Form</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <style>
            .contact-column,
            .location-column,
            .multiline-description,
            .name-column {
                overflow: hidden;

                word-wrap: break-word;
            }

        </style>
    </head>
    <body>
        <div class="container mt-5">
            <button
                type="button"
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#serviceModal">
               Add Service
            </button>

            <div
                class="modal fade"
                id="serviceModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="serviceModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="serviceModalLabel">Service Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form
                                method="post"
                                id="serviceForm"
                                action="<?=site_url('submit-service-form')?>">
                                <div class="form-group">
                                    <label for="serviceName">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="serviceName"
                                        name="serviceName"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="serviceDescription">Contact</label>
                                    <textarea
                                        class="form-control"
                                        id="serviceContact"
                                        name="serviceContact"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="serviceDescription">Location</label>
                                    <textarea
                                        class="form-control"
                                        id="serviceLocation"
                                        name="serviceLocation"
                                        required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="serviceDescription">Service Description</label>
                                    <textarea
                                        class="form-control"
                                        id="serviceDescription"
                                        name="serviceDescription"
                                        required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div style="overflow-x: auto;">
                <table class="table" style="width: 100%; table-layout: fixed;">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th width="15%">Name</th>
            <th width="10%">Contact</th>
            <th width="15%">Location</th>
            <th width="35%">Description</th>
            <th width="10%"></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $index => $row): ?>
        <tr>
            <th scope="row"><?php echo $index + 1; ?></th>
            <td class="name-column">
                <?php echo $row['name']; ?>
            </td>
            <td class="contact-column"><?php echo $row['contact']; ?></td>
            <td class="location-column"><?php echo $row['location']; ?></td>
            <td class="multiline-description" style="word-wrap: break-word;">
                <?php echo $row['description']; ?>
            </td>
                <td>
                <div class="dropdown">
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Options
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?=site_url('add-package/' . $row['id'])?>">Add Package</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModal_<?php echo $row['id']; ?>">Delete Package</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editServiceModal_<?php echo $row['id']; ?>">Edit Service</a>
                    </div>
                </div>
            </td>
        </tr>
        
        <!-- Delete Package Confirmation Modal -->
        <div class="modal fade" id="confirmDeleteModal_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this package?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a href="<?=site_url('delete-services/' . $row['id']); ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Package Confirmation Modal -->

        <!--Edit Pacage -->
    <div class="modal fade" id="editServiceModal_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editServiceModalLabel_<?php echo $row['id']; ?>" aria-hidden="true">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editServiceModalLabel_<?php echo $row['id']; ?>">Edit Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('update-services/' . $row['id'])?>">
                    <div class="form-group">
                        <label for="serviceName_<?php echo $row['id']; ?>">Name</label>
                        <input type="text" class="form-control" id="serviceName_<?php echo $row['id']; ?>" name="serviceName" value="<?php echo $row['name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="serviceContact_<?php echo $row['id']; ?>">Contact</label>
                        <input type="text" class="form-control" id="servicePrice_<?php echo $row['id']; ?>" name="serviceContact" value="<?php echo $row['contact']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="serviceLocation_<?php echo $row['id']; ?>">Location</label>
                        <input type="text" class="form-control" id="serviceLocation_<?php echo $row['id']; ?>" name="serviceLocation" value="<?php echo $row['location']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="serviceDescription_<?php echo $row['id']; ?>">Description</label>
                        <textarea class="form-control" id="serviceDescription_<?php echo $row['id']; ?>" name="serviceDescription" required><?php echo $row['description']; ?></textarea>
                    </div>                   
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

            

        <?php endforeach;?>
    </tbody>
</table>


                </div>
            </div>


        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </body>

</html>
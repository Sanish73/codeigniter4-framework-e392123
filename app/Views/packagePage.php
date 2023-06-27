<!DOCTYPE html>
<html>
    <head>
        <title>Package Form</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <button
                type="button"
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#serviceModal">
                Add Packages
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
                            <h5 class="modal-title" id="serviceModalLabel">Package Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form
                                method="post"
                                action="<?=site_url('submit-package-form')?>"
                                id="packageform">

                                <div class="form-group">
                                    <label for="packageName">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="packageName"
                                        name="packageName"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="packagePrice">Price</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="packagePrice"
                                        name="packagePrice"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="packageDescription">Package Description</label>
                                    <textarea
                                        class="form-control"
                                        id="packageDescription"
                                        name="packageDescription"
                                        required></textarea>
                                </div>

                                <input type="hidden" name="service_id" value="<?php echo $id; ?>">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">

               <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 1; ?>
        <?php foreach ($packages as $package): ?>
            <tr>
                <th scope="row"><?php echo $counter; ?></th>
                <td class="name-column"><?php echo $package['name']; ?></td>
                <td class="name-column"><?php echo $package['price']; ?></td>
                <td class="name-column"><?php echo $package['description']; ?></td>
            </tr>
            <?php $counter++; ?>
        <?php endforeach;?>
    </tbody>
</table>


            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </body>
</html>
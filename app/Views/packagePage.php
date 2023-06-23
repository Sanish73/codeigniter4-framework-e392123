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
                            <form method="post" id="packageform">
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
                                    <label for="serviceDescription">Price</label>
                                    <textarea
                                        class="form-control"
                                        id="serviceContact"
                                        name="serviceContact"
                                        required></textarea>
                                </div>

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

                        </tr>
                    </thead>
                    <tbody></tbody>
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

<!-- <script>
    function submitPackageForm() {
        window.location.href = "<?=site_url('package-submit-form')?>";
    }
</script> -->
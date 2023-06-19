


<!DOCTYPE html>
<html>
<head>
    <title>Service Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#serviceModal">
        Service
    </button>

   
    <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel"
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
                    <form method="post" id="serviceForm" action="<?= site_url('submit-service-form') ?>">
                        <div class="form-group">
                            <label for="serviceName">Name</label>
                            <input type="text" class="form-control" id="serviceName" name="serviceName" required>
                        </div>
                        <div class="form-group">
                            <label for="serviceDescription">Contact</label>
                            <textarea class="form-control" id="serviceContact" name="serviceContact"
                                      required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="serviceDescription">Location</label>
                            <textarea class="form-control" id="serviceLocation" name="serviceLocation"
                                      required></textarea>
                        </div>
                       
                        <div class="form-group">
                            <label for="serviceDescription">Service Description</label>
                            <textarea class="form-control" id="serviceDescription" name="serviceDescription"
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
            <th scope="col">Contact</th>
            <th scope="col">Location</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $index => $row): ?>
            <tr>
                <th scope="row"><?php echo $index + 1; ?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['description']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

</table>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>




</body>
</html>

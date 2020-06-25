<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body {
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact Book</h2>
                <?php if (isset($_GET['added']) && $_GET['added'] === 'yes') : ?>
                    <div class="alert alert-success">
                        Your data has been saved.
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['deleted']) && $_GET['deleted'] === 'yes') : ?>
                    <div class="alert alert-success">
                        Your record has been deleted.
                    </div>
                <?php endif; ?>
                <a href="add.php">Add a new contact</a>

                <?php if (count($records) > 0) : ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S. No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Avatar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($records as $record) { ?>
                                <tr>
                                    <td><?php echo $record["id"]; ?></td>
                                    <td><?php echo $record["fullname"]; ?></td>
                                    <td><?php echo $record["email"]; ?></td>
                                    <td><?php echo $record["mobile_number"]; ?></td>
                                    <td>
                                        <?php if (empty($record['avatar'])) : ?>
                                            <img src="assets/images/default-avatar.jpg" width="100" />
                                        <?php else : ?>
                                            <img src="uploads/<?php echo $record["avatar"]; ?>" width="100" />
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $record['id']; ?>">Edit</a> &nbsp;
                                        <a href="delete.php?id=<?php echo $record['id']; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <div class="alert alert-info">
                        no record found
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
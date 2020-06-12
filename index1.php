<?php

$records = [
    [
        "id" => 1,
        "name" => "Asif Iqbal",
        "email" => "webwizo@gmail.com",
        "mobile_number" => "0321-xxxxxx",
        "cnic" => "xxxx",
        "avatar" => "https://picsum.photos/50/50"
    ],
    [
        "id" => 2,
        "cnic" => "222222",
        "name" => "Zuhaib",
        "email" => "zuhaib@gmail.com",
        "mobile_number" => "0321-xxxxxx",
        "avatar" => "https://picsum.photos/60/60"
    ]
];
?>
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
                        <?php /* foreach ($records as $record) { ?>
                            <tr>
                                <td><?php echo $record["id"]; ?></td>
                                <td><?php echo $record["name"]; ?></td>
                                <td><?php echo $record["email"]; ?></td>
                                <td><?php echo $record["mobile_number"]; ?></td>
                                <td>
                                    <img src="<?php echo $record["avatar"]; ?>" />
                                </td>
                                <td>
                                    <?php echo $record["cnic"]; ?>
                                </td>
                            </tr>
                        <?php } */ ?>
                        <?php for($i=0; $i<=count($records)-1; $i++) { ?>
                            <tr>
                                <td><?php echo $records[$i]["id"]; ?></td>
                                <td><?php echo $records[$i]["name"]; ?></td>
                                <td><?php echo $records[$i]["email"]; ?></td>
                                <td><?php echo $records[$i]["mobile_number"]; ?></td>
                                <td>
                                    <img src="<?php echo $records[$i]["avatar"]; ?>" />
                                </td>
                                <td>
                                    <?php echo $records[$i]["cnic"]; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-4">

        <!-- Search  -->

        <form class="d-flex" role="search" method="POST" action="http://127.0.0.1:8000/ClientsController/search">

            <input class="form-control" type="search" placeholder="Search clients..." aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Full English Name</th>
                <th>Full Arabic Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Country Code</th>
                <th>Country</th>
                <th>Country Temp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client) : ?>
                <tr>
                    <td><?php echo $client->id ?> </td>
                    <td><?php echo $client->full_english_name ?> </td>
                    <td><?php echo $client->full_arabic_name ?></td>
                    <td><?php echo $client->username ?></td>
                    <td><?php echo $client->email ?></td>
                    <td><?php echo $client->mobile ?></td>
                    <td><?php echo $client->country_code ?></td>
                    <td><?php echo $client->country ?></td>
                    <td>

                        <?php $weather_data = get_client_weather($client->id);
                        echo '<p>' . $weather_data . '°C</p>';
                        ?>

                    </td> 
                    <td><a class="btn btn-primary" href="http://127.0.0.1:8000/ClientsController/edit/<?php echo $client->id; ?> ">Edit</a></td>
                    <td><a class="btn btn-danger" href="http://127.0.0.1:8000/ClientsController/delete_client/<?= $client->id; ?>" onclick="return confirm('Are you sure you want to delete this client?')">Delete</a></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <div class="container">
        <div class="col-md-12 text-center">
            <a class="btn btn-primary  mt-2" href="http://127.0.0.1:8000/create">Add Client</a>
            <a class="btn btn-primary  mt-2" href="http://127.0.0.1:8000/index">All Clients</a>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js" integrity="sha512-eSeh0V+8U3qoxFnK3KgBsM69hrMOGMBy3CNxq/T4BArsSQJfKVsKb5joMqIPrNMjRQSTl4xG8oJRpgU2o9I7HQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container mt-4">
        <a class="btn btn-primary  mt-2" href="http://127.0.0.1:8000/index">All Clients</a>

        <?php //echo validation_errors(); 
        ?>

        <?php echo form_open('http://127.0.0.1:8000/update'); ?>
        <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
        <label for="full_english_name">Full English Name:</label>
        <input class="form-control" type="text" name="full_english_name" id="full_english_name" value="<?= $client['full_english_name'] ?>">

        <label for="full_arabic_name">Full Arabic Name:</label>
        <input class="form-control" type="text" name="full_arabic_name" id="full_arabic_name" value="<?= $client['full_arabic_name'] ?> ">
        <?php if (form_error('full_arabic_name')) { ?>
            <div class="text-danger">
                <?php echo form_error('full_arabic_name'); ?>
            </div>
        <?php } ?>

        <label for="username">Username:</label>
        <input class="form-control" type="text" name="username" id="username" value="<?= $client['username'] ?> ">

        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password" id="password" value="<?= $client['password'] ?> ">

        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" id="email" value="<?= $client['email'] ?> ">

        <label for="mobile">Mobile:</label>
        <input class="form-control" type="tel" name="mobile" id="mobile" value="<?= $client['mobile'] ?> ">

        <label for="country_code">Country Code:</label>
        <input class="form-control" type="tel" name="country_code" id="country_code" readonly>

        <label for="country">Country:</label>
        <select class="form-control ch" name="country" id="country">
            <option selected disabled hidden>choose</option>
            <option value="Egypt" data-code="+20">Egypt</option>
            <option value="USA" data-code="+1">USA</option>
            <option value="UK" data-code="+44">UK</option>
            <option value="Canada" data-code="+1">Canada</option>
        </select>
        <?php if (form_error('country')) { ?>
            <div class="text-danger">
                <?php echo form_error('country'); ?>
            </div>
        <?php } ?>

        <button class="btn btn-primary mt-4" type="submit">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $('#country').change(function() {
                var code = $('option:selected', this).data('code');
                $('#country_code').val(code);
            });
        });
    </script>

    <!-- using chosen plugin in jquery  -->
    <script>
        $(document).ready(function() {
            $('.ch').chosen();
        });
    </script>

</body>

</html>
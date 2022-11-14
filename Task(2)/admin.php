<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">

    <style>
        body {
            background-image: url('images/background-3.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }
    </style>

</head>

<body>
    <div class="head-1">
        <h2>Welcome back (ADMIN) - have a good day!</h2>
    </div>

    <section class="container">
        <div class="card">

            <div class="card-image card-1"></div>
            <h2>Ford Focus</h2>
            <p>Lorem ipsum dolor sit amet doloremque ipsum eveniet omnis sunt numquam obcaecati iure numquam obcaecati iure vitae, asperiores!</p>

            <form action="admin.php" method="post">
                <?php if ($customer_rented_focus == 'true') {
                    $customer_rented_focus = 'false'; ?>
                    <p>Car already rented</p>
                    <button type="submit" style="background-color:darkred;"> Make Rentable</button>
                <?php } elseif ($customer_rented_focus == 'false') {
                    $admin_rentable_focus = 'false'; ?>
                    <button type="submit" style="background-color:darkgreen;">Car Rentable</button>
                <?php } ?>
            </form>

        </div>

        <div class="card">
            <div class="card-image card-2"></div>
            <h2>Kia Cerato</h2>
            <p>Lorem ipsum dolor sit amet doloremque ipsum eveniet omnis sunt numquam obcaecati iure numquam obcaecati iure vitae, asperiores!</p>


            <form action="admin.php" method="post">
                <?php if ($customer_rented_cerato == 'true') {
                    $customer_rented_cerato = 'false'; ?>
                    <p>Car already rented</p>
                    <button type="submit" style="background-color:darkred;"> Make Rentable</button>
                <?php } elseif ($customer_rented_cerato == 'false') {
                    $admin_rentable_cerato = 'false'; ?>
                    <button type="submit" style="background-color:darkgreen;">Car Rentable</button>
                <?php } ?>
            </form>

        </div>

        <div class="card">
            <div class="card-image card-3"></div>
            <h2>Hyundai Elentra</h2>
            <p>Lorem ipsum dolor sit amet doloremque ipsum eveniet omnis sunt numquam obcaecati iure numquam obcaecati iure vitae, asperiores!</p>


            <form action="admin.php" method="post">
                <?php if ($customer_rented_elentra == 'true') {
                    $customer_rented_elentra = 'false'; ?>
                    <p>Car already rented</p>
                    <button type="submit" style="background-color:darkred;"> Make Rentable</button>
                <?php } elseif ($customer_rented_elentra == 'false') {
                    $admin_rentable_elentra = 'false'; ?>
                    <button type="submit" style="background-color:darkgreen;">Car Rentable</button>
                <?php } ?>
            </form>

        </div>

        <div class="card">
            <div class="card-image card-4"></div>
            <h2>Toyota Corola</h2>
            <p>Lorem ipsum dolor sit amet doloremque ipsum eveniet omnis sunt numquam obcaecati iure numquam obcaecati iure vitae, asperiores!</p>


            <form action="admin.php" method="post">
                <?php if ($customer_rented_corola == 'true') {
                    $customer_rented_corola = 'false'; ?>
                    <p>Car already rented</p>
                    <button type="submit" style="background-color:darkred;"> Make Rentable</button>
                <?php } elseif ($customer_rented_corola == 'false') {
                    $admin_rentable_corola = 'false'; ?>
                    <button type="submit" style="background-color:darkgreen;">Car Rentable</button>
                <?php } ?>
            </form>

        </div>

    </section>
</body>

</html>
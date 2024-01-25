<?php 
include __DIR__.'/partials/vars.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white text-center text-uppercase fw-bolder">hotels</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container pt-3">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-primary">
                        <thead>
                            <tr>
                                <th class="text-uppercase">nome</th>
                                <th class="text-uppercase">descrizione</th>
                                <th class="text-uppercase">parcheggio</th>
                                <th class="text-uppercase">voto</th>
                                <th class="text-uppercase">distanza dal centro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hotels as $hotel) { ?>
                                <tr>
                                    <td>
                                        <?php echo $hotel['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['description']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['parking']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['vote']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['distance_to_center'] .' Km'; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </main>
</body>
</html>
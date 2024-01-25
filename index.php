<?php 
    include __DIR__.'/partials/vars.php';

    $filtered_hotels = $hotels;

    if (isset($_GET["parking"]) && $_GET["parking"] != '') {
        
        $newHotels = [];
        $parking = $_GET["parking"];

        $parking = filter_var($parking, FILTER_VALIDATE_BOOLEAN);

        foreach ($filtered_hotels as $hotel) {
            if ($hotel['parking'] == $parking) {
                
                $newHotels[] = $hotel;
            };
        }

        $filtered_hotels = $newHotels;
    }

    if (isset($_GET["vote"]) && $_GET["vote"] != '') {
        
        $newHotels = [];
        $vote = $_GET["vote"];

        foreach ($filtered_hotels as $hotel) {
            if ($hotel['vote'] >= $vote) {
                
                $newHotels[] = $hotel;
            };
        }

        $filtered_hotels = $newHotels;
    }

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
            <form action="./index.php" method="GET">
                <div class="row py-3">
                    <div class="col-6">
                        <span class="text-white fw-bolder">Parcheggio:</span>
                        <div class="py-3 d-flex">
                            <select class="form-select" name="parking">
                                <option value="">Seleziona la tua scelta</option>
                                <option value="true">SI</option>
                                <option value="false">NO</option>
                            </select>

                            <select class="form-select mx-3 w-25" name="vote">
                                <option value="">Rating</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <div class="px-3">
                                <button type="submit" class="btn btn-primary text-uppercase">Filtra</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
                            <?php foreach ($filtered_hotels as $hotel) { ?>
                                <tr>
                                    <td>
                                        <?php echo $hotel['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['description']; ?>
                                    </td>
                                    <td>
                                        <?php echo $hotel['parking'] ? 'SI' : "NO"; ?>
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
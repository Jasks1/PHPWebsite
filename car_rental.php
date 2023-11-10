<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./php.css">

  <!-- BOOTSTRAP ICONS LINK -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- GOOGLE FONTS LINK -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <title>Car Rental PHP</title>
</head>

<body>
  <header>
    <section class="navbar">
      <div>
        <a href="" class="logoText">Car Rental</a>
      </div>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">About</a></li>
      </ul>
    </section>
  </header>

  <?php

  $carsList = [
    "car1" => [
      "carImg" => "https://cdn.pixabay.com/photo/2017/11/09/15/04/bmw-1m-2933795_1280.jpg",
      "brand" => "BMW",
      "model" => "m series 1",
      "color" => "black",
      "price" => 40,
      "capacity" => "2 Small bags",
      "seats" => 4,
      "availability" => false
    ],
    "car2" => [
      "carImg" => "https://cdn.pixabay.com/photo/2014/07/05/03/42/auto-384543_1280.jpg",
      "brand" => "Opel",
      "model" => "corsa",
      "color" => "green",
      "price" => 50,
      "capacity" => "1 Large bag",
      "seats" => 4,
      "availability" => true
    ],
    "car3" => [
      "carImg" => "https://cdn.pixabay.com/photo/2020/05/13/15/26/auto-5167848_1280.jpg",
      "brand" => "Haundai",
      "model" => "i30",
      "color" => "navy blue",
      "price" => 35,
      "capacity" => "2 Large bags",
      "seats" => 4,
      "availability" => true
    ],
    "car4" => [
      "carImg" => "https://cdn.pixabay.com/photo/2022/01/26/17/08/car-6969349_1280.jpg",
      "brand" => "Renault",
      "model" => "cleo",
      "color" => "black",
      "price" => 20,
      "capacity" => "2 Small bags",
      "seats" => 4,
      "availability" => true
    ],
    "car5" => [
      "carImg" => "https://cdn.pixabay.com/photo/2014/04/26/21/58/auto-332727_1280.jpg",
      "brand" => "Mini",
      "model" => "Cooper",
      "color" => "navy blue",
      "price" => 25,
      "capacity" => "1 Large bags",
      "seats" => 4,
      "availability" => false
    ],
    "car6" => [
      "carImg" => "https://cdn.pixabay.com/photo/2020/08/21/10/48/hyundai-5505817_1280.jpg",
      "brand" => "Haundai",
      "model" => "ix35",
      "color" => "cashmere brown",
      "price" => 45,
      "capacity" => "2 Large bags 1 small bag",
      "seats" => 5,
      "availability" => true
    ]
  ];

  echo "<div class='cardRow'>";

  foreach ($carsList as $value) {

    echo "
      <div class='card'>
      <div class='cardImgContainer'>
      <img class='cardImg' src='$value[carImg]' alt='$value[brand] $value[model]'>
      </div>
      <div class='cardContent'>
      ";

    echo "
            <p class='cardTitle'><b>$value[brand] $value[model]</b></p>
            <p><i class='bi bi-luggage-fill'></i> <b>Storage capacity: </b>$value[capacity]</p>
            <br>
            <p><img src='https://cdn.icon-icons.com/icons2/2248/PNG/512/car_seat_icon_137808.png' alt='seats icon' class='seatsImg'> <b>Seats: </b>$value[seats]</p>
            <br>
            <hr>
            <br>
      ";

    if ($value["availability"] === false) {
      echo "
        <div class='notAvailable'>
        <p>This car is currently not available!</p>
        </div>
        ";
    } else {
      echo "
        <div class='visibleCardDescription'>
      <p class='cardDescription'>$value[brand] $value[model] is an excellent choice of car if you want a car for long road trips with family and friends. This car has $value[seats] seats and a capacity of $value[capacity]. It has a $value[color] color and it costs $value[price] € to rent.</p>
      </div>
      <div class='invisibleCardDescription'>
      <p>$value[brand] $value[model] is an excellent choice of car if you want a car for long road trips with family and friends. This car has $value[seats] seats and a capacity of $value[capacity]. It has a $value[color] color and it costs $value[price] € to rent.</p>
      </div>
      <a class='cardShowLessBtn'>Show less</a>
      <a class='cardReadMoreBtn'>Read more</a>
      <br>
      <br>
      <hr>
      <br>
      <div class='cardPriceContainer'>
        <p><b>Price: </b>$value[price] €</p>
        <a href='' class='cardRentBtn'>Rent car</a>
      </div>
        ";
    };

    echo "
      </div>
      </div>
      ";
  };

  echo "</div>";

  foreach ($carsList as $key => $value) {
    echo "
      
      ";
  };
  ?>

  <footer>
    <div class="footerCopyRight">
      <p>&copy; Jaskaran Singh 2023</p>
    </div>
  </footer>

  <!-- JAVASCRIPT LINK -->
  <script src="./main.js"></script>
</body>

</html>
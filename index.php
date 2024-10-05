<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $firstName = "Enrique";
        $lastName = "Andres";
        $age = 23;
        $address = "dyan lang";
        $contact = 232123132;

        $firstName1 = "Kirby";
        $lastName1 = "Rivera";
        $age1 = 23;
        $address1 = "dyan lang";
        $contact1 = 2321238132;

        $firstName2 = "Ken";
        $lastName2 = "Buenavides";
        $age2 = 23;
        $address2 = "dyan lang";
        $contact2 = 213232123132;

        $firstName3 = "Chris";
        $lastName3 = "Solayao";
        $age3 = 23;
        $address3 = "dyan lang";
        $contact3 = 232123132223;
    ?>

    <div id="container">
       <div id="card">
        <h2>Time done: 4:40pm</h2>

        <h1>
            Firstname: <?=  $firstName . ' ' . $lastName  ?>
        </h1>
        <p>Age: <span><?=  $age; ?></span></p>
        <p>Address: <span><?=  $address; ?></span></p>
        <p>Contact: <span><?= $contact; ?></span></p>
       </div> 

       <h1>
            Firstname: <?= $firstName2 . ' ' . $lastName2  ?>
        </h1>
        <p>Age: <span><?= $age2; ?></span></p>
        <p>Address: <span><?= $address2; ?></span></p>
        <p>Contact: <span><?= $contact2; ?></span></p>
       </div> 

       <h1>
            Firstname: <?= $firstName1 . ' ' . $lastName1  ?>
        </h1>
        <p>Age: <span><?= $age1; ?></span></p>
        <p>Address: <span><?= $address1; ?></span></p>
        <p>Contact: <span><?= $contact1; ?></span></p>

        <h1>
            Firstname: <?= $firstName3 . ' ' . $lastName3  ?>
        </h1>
        <p>Age: <span><?= $age3; ?></span></p>
        <p>Address: <span><?= $address3; ?></span></p>
        <p>Contact: <span><?= $contact3; ?></span></p>
       </div> 
       </div> 
    </div>
</body>
</html>

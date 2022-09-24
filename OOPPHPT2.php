<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 | OOP PHP</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php

    $Hewan = "Monyet";

    interface Hewan
    {
        public function Punya();
        public function Makan();
        public function Berjalan();
        public function Bersuara();
        public function Latih();
        public function Sepeda();
        public function Manusia();
    }
    class Monyet implements Hewan
    {
        public function Punya()
        {
            return "Monyet merupakan salah satu</br>";
        }
        public function Berjalan()
        {
            return "Kemampuan Untuk Berjalan</br>";
        }

        public function Makan()
        {
            return "Kemampuan Untuk Makan</br>";
        }

        public function Bersuara()
        {
            return "Kemampuan Untuk Bersuara</br>";
        }
        public function Latih()
        {
            return "Apabila dilatih Monyet Juga dapat :</br>";
        }
        public function Sepeda()
        {
            return "Monyet juga dapat menaiki sebuah sepeda </br>";
        }
        public function Manusia()
        {
            return "Seperti halnya Manusia.";
        }
    }

    ?>
    <div class="container mt-5 d-flex justify-content-center align-items-center bg-gray-300">
        <div class="card p-3 shadow" style="width: 400px">
            <div class="card-header text-center text-bg-secondary">
                <h3> || OOP PHP TUGAS 2 ||</h3>
            </div>
            <div class="card-body">
                <p>
                    <?php
                    $Monyet = new Monyet;
                    echo $Hewan . " " .
                        $Monyet->Punya() . " Hewan yang mempunyai kemampuan untuk: " .
                        $Monyet->Berjalan() . " " .
                        $Monyet->Makan() . " dan " .
                        $Monyet->Bersuara();
                    echo "<br>";

                    echo "<b>Jika dilatih: </b><br/>";
                    echo $Monyet->Latih();
                    echo $Monyet->Sepeda();
                    echo $Monyet->Manusia();
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
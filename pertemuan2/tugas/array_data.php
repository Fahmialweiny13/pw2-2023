<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

  echo '<br>';
  $m_fruits = [
      ["id" => "1", "name" => "Apel", "color" => "Merah", "stock" => 25, "price" => 18000, "description" => "memiliki rasa yang manis dan juga biji yang kecil yang tidak bisa dimakan"],
      ["id" => "2", "name" => "Mangga", "color" => "Hijau", "stock" => 7, "price" => 30000, "description" => "Buah agak besar dagingnya berwarna oren dan memiliki rasa yang manis atau asam"],
      ["id" => "3", "name" => "Strawberry", "color" => "Merah", "stock" => 35, "price" => 15000, "description" => "Buah kecil dengan biji yang bisa dimakan dan memiliki rasa asam atau manis"],
      ["id" => "4", "name" => "Semangka", "color" => "hijau-hitam", "stock" => 5, "price" => 13000, "description" => "Buah besar dengan biji yang bisa dimakan dan isian berwarna merah memiliki rasa yang manis"],
      ["id" => "5", "name" => "Alpukat", "color" => "hijau", "stock" => 10, "price" => 16000, "description" => "Buah kecil dengan satu biji yang besar dan rasa yang enak"]
    ];
        foreach ($m_fruits as $fruit) {
        echo '<li>' . $fruit["name"] . '</li>';
        echo '<li>' . $fruit["color"] . '</li>';
        echo '<li>' . $fruit["stock"] . '</li>';
        echo '<li>' . $fruit["price"] . '</li>';
        echo '<li>' . $fruit["description"] . '</li>';
        echo '<br>';
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */

                foreach ($m_fruits as $fruit) {
                echo '<tr>';
                echo '<td>' . $fruit["id"] . '</td>'; 
                echo '<td>' . $fruit["name"] . '</td>'; 
                echo '<td>' . $fruit["color"] . '</td>';
                echo '<td>' . $fruit["stock"] . '</td>';
                echo '<td>' . $fruit["price"] . '</td>';
                echo '<td>' . $fruit["description"] . '</td>';
                echo '</tr>';
                echo '<br>';
                }
                
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
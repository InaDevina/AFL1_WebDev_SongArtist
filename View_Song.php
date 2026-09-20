<?php require("Controller_Song.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>SongTitle </title>
</head>

<body>
  <div class="container p-3">
    <div class="container p-3">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="true" href="View_Song.php">Song List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="View_addSong.php">Add Song</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <h1>Song and The Artist</h1>
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Song Title</th>
                <th scope="col">Artist</th>
                <th scope="col">Year Published</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $counter = 0;
              $allSong = getAllSong();
              foreach ($allSong as $index => $song) {
                $counter++;
              ?>

              <tr>
                <th scope="row"><?=$counter?></th>
                <td><?=$song->title?></td>
                <td><?=$song->artist?></td>
                <td><?=$song->year?></td>
                <td>
                  <button class="btn btn-warning">Update</button>
                  <a href="Controller_Song.php?deleteID=<?=$index?>">
                    <button class="btn btn-danger">Delete</button>
                  </a>
                </td>
              </tr>

              <?php  
              }
              ?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
</html>
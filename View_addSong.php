<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>SongTitle</title>
</head>

<body>
  <div class="container p-3">
    <div class="card text-center">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link" aria-current="true" href="View_Song.php">View Song</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="View_addSong.php">Add Song</a>
          </li>
        </ul>
      </div>
      <div class="card-body">

        <h1 class="mb-5">Add Song</h1>
        <form class="row g-3">

          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="inputTitle" class="form-label mb-2">Song Title</label>
              <input type="email" class="form-control" id="inputTitle">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="inputArtist" class="form-label mb-2">Artist Name</label>
              <input type="text" class="form-control" id="inputArtist" placeholder="">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="inputYear" class="form-label mb-2">Year Published</label>
              <input type="text" class="form-control" id="inputYear" placeholder="">
            </div>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>


      </div>
    </div>

  </div>
</body>

</html>
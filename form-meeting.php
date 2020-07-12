<html lang="en">
  <head>
    <link rel="stylesheet" href="style-newsletter.css" />
    <title>PNC CREATIVE</title>
  </head>
  <body>
    <div class="banner-area">
    <header>
            <a href="index.php" class="logo">PNC CREATIVE</a>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="schedule.php">Meeting list</a></li>
                <li><a href="author.html">Author</a></li>
                <li><a href="service.html">Service</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </header>

      <div class="banner-text">
        <h2>Meeting</h2>
        <p>Plan a meeting to build a project with our team.</p>

        <form action="proses-meeting.php" method="POST">

<fieldset>

    <p>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" placeholder="nama lengkap" />
    </p>
    <p>
        <label for="alamat">Email: </label>
        <textarea name="email"></textarea>
    </p>
    <p>
        <label for="tanggal">Tanggal meeting: </label>
        <textarea name="tgl_meeting"></textarea>
    </p>
    <p>
    <label for="tempat">Tempat meeting: </label>
        <textarea name="tempat"></textarea>
    </p>
    <p>
        <input type="submit" value="Daftar" name="daftar" />
    </p>

</fieldset>
      </div>
    </div>
  </body>
</html>

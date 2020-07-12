<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-about.css">
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

        <header>
            <h3>Our Meeting List</h3>
        </header>

        <br>
    
        <table border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Place</th>
                </tr>
            </thead>
            <tbody>
    
                <?php
                $sql = "SELECT * FROM jadwal_meeting";
                $query = mysqli_query($db, $sql);
    
                while ($meeting = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $meeting['nama'] . "</td>";
                    echo "<td>" . $meeting['email'] . "</td>";
                    echo "<td>" . $meeting['tgl_meeting'] . "</td>";
                    echo "<td>" . $meeting['tempat'] . "</td>";
                    echo "</tr>";
                }
                ?>
    
            </tbody>
        </table>
    
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>
</html>
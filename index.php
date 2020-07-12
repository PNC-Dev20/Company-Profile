<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <h2>Creative Design</h2>
            <p>Hello! We create design and photography</p>
            <a href="schedule.php">Our Meeting</a>
            <a href="form-meeting.php">Let's Meet Us</a>
        </div>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Pengajuan meeting anda akan kami proses!";
                } else {
                    echo "Pengajuan gagal!";
                }
                ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>
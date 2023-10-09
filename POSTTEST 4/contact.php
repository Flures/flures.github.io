<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <?php include('includes/navbar.php'); ?>
    </header>

    <section class="contact-section">
        <div class="container-form">
            <h2>Contact Us</h2>
            <form action="contact.php" method="POST" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*">

                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="form-data">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $message = $_POST["message"];
    
             // Mengecek apakah field input terisi
                if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
                    $targetDir = "uploads/"; // Directory penyimpanan file yang diupload
                    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
                    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                // Validasi apakah file yang diupload adalah image
                    $validExtensions = array("jpg", "jpeg", "png", "gif");
                    if (in_array($imageFileType, $validExtensions)) {
                     // Pindahkan file yang diupload ke folder "uploads
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                            $imageMessage = "File berhasil di upload";
                        } 
                        else {
                            $imageMessage = "Maaf terdapat error saat mengupload file";
                        }
                    }   
                    else {
                        $imageMessage = "Hanya dapat mengupload file jpg, jpeg, png, dan gif.";
                    }
                } 
            else {
                $imageMessage = "Harap memilih file untuk di upload.";
            }
            }
            
        ?>
        
        <?php if (!empty($name) || !empty($email) || !empty($message) || (!empty($imageMessage) && $imageMessage === "File berhasil di upload")) : ?>
            <h2>Form Data Details</h2>
            <?php if (!empty($name)) : ?>
                <p><strong>Name:</strong> <?php echo $name; ?></p>
            <?php endif; ?>
            <?php if (!empty($email)) : ?>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
            <?php endif; ?>
            <?php if (!empty($message)) : ?>
                <p><strong>Message:</strong> <?php echo $message; ?></p>
            <?php endif; ?>
            <?php if (!empty($imageMessage)) : ?>
                <p><strong>Status:</strong> <?php echo $imageMessage; ?></p>
                <?php if ($imageMessage === "File berhasil di upload" ) : ?>
                <img src="<?php echo $targetFile; ?>" alt="Uploaded Image">
                <?php endif;?>
            <?php endif; ?>
        <?php endif; ?>
        
        </div>
    </section>
    <?php include('includes/footer.php'); ?>
    <script src="script.js" ;></script>
</body>
</html>
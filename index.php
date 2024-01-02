<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BDXOUL FILE SHARING  </title>
    <style>
   
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2c3e50; /* Dark background color */
            color: #ecf0f1; /* Light text color */
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        form {
            padding: 20px;
            width: 50%;
            background-color: #34495e; /* Dark form background color */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #3498db;
            display: block;
            font-weight: bold;
            width: 100%;
            margin: 10px 0;
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #217dbb;
        }

        input[type="file"] {
            padding: 10px;
            font-weight: bold;
            width: 100%;
            margin: 10px 0;
        }

        h1 {
            color: #bdc3c7; /* Light heading color */
        }

        span {
            display: block;
            margin-top: 20px;
            color: #95a5a6; /* Light span color */
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['upload']) && $_FILES['image']['error'] == 0) {
        $upload = move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name']);

        if ($upload) {
                    echo '<p>File Uploaded: <a href="' . $_FILES['image']['name'] . '"> VIEW FILE</a></p>';
                }
         else {
                echo 'Error: Only image is allowed!';
            }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Secure Image Upload System</h1>
        <h4>Right Click to Copy file links excpet Images</h4>
        <h5> Use this for self-hosting or upload, No encryption is added </h5>
        <label for="image">Choose File</label>
        <input type="file" name="image" id="image">
        <input type="submit" name="upload" value="Upload">
    </form>
    <br>
</body>

</html>

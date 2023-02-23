<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600&family=Open+Sans&display=swap" rel="stylesheet">
    <title>CAT201 Assignment 1</title>
</head>
<body class="body">
<header class="div center">
    <h1>EXCEL to CSV Converter</h1>
</header>

<br>

<div class="content">
    <div class="row">
        <div class="col-6 div">
            <h1>Instruction</h1>
            <p>1. Click the "Choose File" button and select the EXCEL file that you would like to convert to CSV file. </p>
            <p>2. Make sure the chosen file is an EXCEL file. </p>
            <p>3. Click the "Convert" button to start to convert your selected file. </p>
            <p>4. Click the "Download" button to download your CSV file.</p>

        </div>
        <div class="col-6">
            <form action = "download.php" method = "POST" enctype="multipart/form-data">
                <div class="div">
                    <p>Insert your file excel file</p>
                    <input type="file" name="excelFile"  class="btn btn-secondary"   />

                    <br><br>

                    <p>Click here to convert</p>
                    <input type = "submit" class="btn btn-primary" value ="Convert">
                </div>
            </form>
        </div>
    </div>
</div>

<br>

<div class="div center">
    <h1>Meet Our Team</h1>
    <div class="row ">
        <div class="col-3">
            <img src="assets/chinfeng.jpeg" class="Piccircle" alt="Chin Feng">
            <h6>Lim Chin Feng</h6>
            <p>157968</p>
        </div>
        <div class="col-3">
            <img src="assets/jiaxin.jpg" class="Piccircle" alt="Jia Xin">
            <h6>Khoo Jia Xin</h6>
            <p>158764</p>
        </div>
        <div class="col-3">
            <img src="assets/jiaqian.jpg" class="Piccircle" alt="Jia Qian">
            <h6>Lee Jia Qian</h6>
            <p>159349</p>
        </div>
        <div class="col-3">
            <img src="assets/weixiang.jpg" class="Piccircle" alt="Wei Xiang">
            <h6>Tan Wei Xiang</h6>
            <p>157962</p>
        </div>
    </div>
</div>

<br>

<footer>
    <div class="div">
        <p class="center">&copy; Copyright 2022</p>
        <div class="center">
            <h6>CAT201 Assignment 1</h6>
        </div>
</footer>

</body>
</html>
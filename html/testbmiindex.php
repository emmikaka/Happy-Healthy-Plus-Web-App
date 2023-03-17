<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ตัวอย่าง โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</title>
</head>
<!-- //style bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
        </div>
    </div>
    </nav>
    <!-- form ให้ user กรอก -->

    <form action="calBMI.php" method="post">
    
        <label for="uname"><b>name</b></label>
        <input type="text" name="name" placeholder="username" required>
        <br>

        <label for="weight"><b>weight</b></label>
        <input type="int" name="weight" placeholder="กิโลกรัม" required>
        <br>

        <label for="height"><b>height</b></label>
        <input type="int" name="height" placeholder="เซนติเมตร" required>
        <br>

        <label for="Age"><b>Age</b></label>
        <input type="int" name="Age" placeholder="ปี" required>
        <br>

        <label for="BloodType"><b>BloodType</b></label>
        <input type="text" name="BloodType" placeholder="A,B,O,AB,a,b,o,ab" required>
        <br>

        <button type="submit">ประมวลผล</button>




    <!-- //style bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
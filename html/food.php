<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
<style>
  .column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<body>
  <!-- header -->
    <center>
        <div id="logo">
            <img src="img/2-n.png">   
        </div>
    </center>
       
    <header class="p-3 mb-3 border-bottom">
        
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.php" class="nav-link px-2 link-secondary">Home </a></li>
              <li><a href="services.php" class="nav-link px-2 link-dark">Service</a></li>
              <li><a href="food.php" class="nav-link px-2 link-dark">Food</a></li>
              <li><a href="sleep.php" class="nav-link px-2 link-dark">Sleep</a></li>
            </ul>
            


            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="setting.html">Settings</a></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>



    <!-- bmr -->
    <div align = "center">
      <label>รูปแบบของการทำกิจกรรม</label>
      <select id="bmr-list" onchange="getSelectValue();">
          <option value="1">เคลื่อนไหวน้อยมาก นั่งเป็นส่วนใหญ่</option>
          <option value="2">ทำกิจกรรมที่ใช้กำลังเพียงเล็กน้อย  1–3 วันต่อสัปดาห์</option>
          <option value="3">ทำกิจกรรมที่ใช้กำลังปานกลาง 3–5 วันต่อสัปดาห์ </option>
          <option value="4">ทำกิจกรรมที่ใช้กำลังมาก 6–7 วันต่อสัปดาห์</option>
          <option value="5">ทำกิจกรรมที่ใช้กำลังอย่างหนักใช้แรงอย่างหนักทุกวัน</option>
          
      </select>
        <div class="bmr-value">
              <br>
              <h4>คำนวณ BMR</h4>
              <!-- ยังไม่เขียนคำนวณ อันนี้สมมติเฉยๆ -->
              <p>1,117 Calories/day</p>
        </div>
        
        <div class="row">
          <div class="column" style="background-color:#aaa;">
            <h2>อาหารเช้า</h2>
            <label>ประเภท</label>
                <select id="type-b" onchange="getSelectValue();">
                    <option value="1">เส้น</option>
                    <option value="2">ข้าว</option>
                </select>
            <label>เครื่องดื่ม</label>
                <select id="type-drink" onchange="getSelectValue();">
                    <option value="1">น้ำเปล่า</option>
                    <option value="2">น้ำหวาน</option>
                </select>
          
          
                <div class="overflow-hidden ">
                  <img src="img/1-f.jpg" width="150px" height="150px" /><img src="img/random.png" width="20px" height="20px"/><p>คำนวณcal</p>
                  <img src="img/1-d.png" width="150px" height="150px"/><img src="img/random.png" width="20px" height="20px"/><p>คำนวณcal</p>
                </div>
                <p>406 กิโลแคลอ</p>
          </div>
                
          
          
              <div class="column" style="background-color:#bbb;">
                <h2>อาหารเที่ยง</h2>
            <label>ประเภท</label>
                <select id="type-b" onchange="getSelectValue();">
                    <option value="1">เส้น</option>
                    <option value="2">ข้าว</option>
                </select>
            <label>เครื่องดื่ม</label>
                <select id="type-drink" onchange="getSelectValue();">
                    <option value="1">น้ำเปล่า</option>
                    <option value="2">น้ำหวาน</option>
                </select>
          
          
                <div class="overflow-hidden ">
                  <img src="img/4-f.png" width="150px" height="150px" /><img src="img/random.png" width="20px" height="20px"/><p>คำนวณcal</p>
                  <img src="img/3-d.png" width="120px" height="150px"/><img src="img/random.png" width="20px" height="20px"/><p>คำนวณcal</p>
                </div>
                <p>346 กิโลแคลอ</p>
                <h2>1120 กิโลแคลอรี่</h2>
              </div>


              <div class="column" style="background-color:#ccc;">
                <h2>อาหารเเย็น</h2>
            <label>ประเภท</label>
                <select id="type-b" onchange="getSelectValue();">
                    <option value="1">เส้น</option>
                    <option value="2">ข้าว</option>
                </select>
            <label>เครื่องดื่ม</label>
                <select id="type-drink" onchange="getSelectValue();">
                    <option value="1">น้ำเปล่า</option>
                    <option value="2">น้ำหวาน</option>
                </select>
          
          
                <div class="overflow-hidden ">
                  <img src="img/2-f.png" width="150px" height="150px" /><img src="img/random.png" width="20px" height="20px"/><p>คำนวณcal</p>
                  <img src="img/2-d.png" width="150px" height="150px"/><img src="img/random.png" width="20px" height="20px"/><p>คำนวณcal</p>
                <p>368 กิโลแคลอรี่</p>
                </div>
                

              </div>
              
            </div>
      

    </div>


    <!-- end bmr -->




      <!-- footer -->
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="blog.html" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img src="img/1-n.png">               </a>
            <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </footer>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
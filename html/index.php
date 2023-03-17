<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <!-- style css -->
  <link rel="stylesheet" href="style.css">
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


      <div class="container posts-content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="media mb-3">
                      <div class="media-body ml-3">
                        Kenneth Frazier
                        <div class="text-muted small">3 days ago</div>
                      </div>
                    </div>
                
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus finibus commodo bibendum. Vivamus laoreet blandit odio, vel finibus quam dictum ut.
                    </p>
                    <a href="javascript:void(0)" class="ui-rect ui-bg-cover" style="background-image: url(img/post1.jpg);"></a>
                  </div>
                  <div class="card-footer">
                    <a href="javascript:void(0)" class="d-inline-block text-muted">
                        <strong>123</strong> <small class="align-middle">Likes</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                        <strong>12</strong> <small class="align-middle">Comments</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <small class="align-middle">Repost</small>
                    </a>
                  </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="media mb-3">
                      <div class="media-body ml-3">
                        Kenneth Frazier
                        <div class="text-muted small">3 days ago</div>
                      </div>
                    </div>
                
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus finibus commodo bibendum. Vivamus laoreet blandit odio, vel finibus quam dictum ut.
                    </p>
                    <a href="javascript:void(0)" class="ui-rect ui-bg-cover" style="background-image: url(img/post2.jpg);"></a>
                  </div>
                  <div class="card-footer">
                    <a href="javascript:void(0)" class="d-inline-block text-muted">
                      <small class="align-middle">
                        <strong>123</strong> Likes</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <small class="align-middle">
                        <strong>12</strong> Comments</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <i class="ion ion-md-share align-middle"></i>&nbsp;
                      <small class="align-middle">Repost</small>
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </div>


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
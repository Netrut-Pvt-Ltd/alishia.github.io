<?php  
session_start();
require('db.php');
if($_SESSION['loggedin'] == true && $_GET['id']){

}else{
	header("location:login.php");
}


if($_SERVER["REQUEST_METHOD"] == "GET"){
  $id= $_GET['id'];
  $select_query= "SELECT * from requirements WHERE id='$id'";
$select_result=mysqli_query($db, $select_query);
$data=mysqli_fetch_assoc($select_result);

}


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $id= $_POST['id'];
  $position = $_POST['position'];
  $product  = $_POST['product'];
  $location = $_POST['location'];
  $indusrty  = $_POST['industry'];
  $des =  $_POST['des'];


  $update_query = "UPDATE requirements SET position='$position',product='$product', location='$location', industry='$indusrty', des='$des' where id='$id'";
  // echo $update_query; die;
  $result = mysqli_query($db, $update_query);
  if($result){
    echo 1;
  }else{
    echo 0;
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Alishia</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/styles/style.min.css" />

    <!-- mCustomScrollbar -->
    <link
      rel="stylesheet"
      href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css"
    />

    <!-- Waves Effect -->
    <link rel="stylesheet" href="assets/plugin/waves/waves.min.css" />

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css" />

    <!-- Color Picker -->
    <link
      rel="stylesheet"
      href="assets/color-switcher/color-switcher.min.css"
    />
  </head>

  <body>
    <div class="main-menu">
      <?php include('header.php');   ?>
      <!-- /.header -->
     <?php include('sidebar.php');   ?>
      <!-- /.content -->
    </div>
    <!-- /.main-menu -->

    <?php include('navbar.php');   ?>
    <!-- /.fixed-navbar -->

    <div
      id="notification-popup"
      class="notice-popup js__toggle"
      data-space="75"
    >
      <h2 class="popup-title">Your Notifications</h2>
      <!-- /.popup-title -->
      <div class="content">
        <ul class="notice-list">
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">John Doe</span>
              <span class="desc"
                >Like your post: “Contact Form 7 Multi-Step”</span
              >
              <span class="time">10 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">Anna William</span>
              <span class="desc">Like your post: “Facebook Messenger”</span>
              <span class="time">15 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar bg-warning"
                ><i class="fa fa-warning"></i
              ></span>
              <span class="name">Update Status</span>
              <span class="desc"
                >Failed to get available update data. To ensure the please
                contact us.</span
              >
              <span class="time">30 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/128x128" alt=""
              /></span>
              <span class="name">Jennifer</span>
              <span class="desc"
                >Like your post: “Contact Form 7 Multi-Step”</span
              >
              <span class="time">45 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">Michael Zenaty</span>
              <span class="desc"
                >Like your post: “Contact Form 7 Multi-Step”</span
              >
              <span class="time">50 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">Simon</span>
              <span class="desc">Like your post: “Facebook Messenger”</span>
              <span class="time">1 hour</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
              <span class="name">Account Contact Change</span>
              <span class="desc"
                >A contact detail associated with your account has been
                changed.</span
              >
              <span class="time">2 hours</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">Helen 987</span>
              <span class="desc">Like your post: “Facebook Messenger”</span>
              <span class="time">Yesterday</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/128x128" alt=""
              /></span>
              <span class="name">Denise Jenny</span>
              <span class="desc"
                >Like your post: “Contact Form 7 Multi-Step”</span
              >
              <span class="time">Oct, 28</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">Thomas William</span>
              <span class="desc">Like your post: “Facebook Messenger”</span>
              <span class="time">Oct, 27</span>
            </a>
          </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more"
          >See more messages <i class="fa fa-angle-down"></i
        ></a>
      </div>
      <!-- /.content -->
    </div>
    <!-- /#notification-popup -->

    <div id="message-popup" class="notice-popup js__toggle" data-space="75">
      <h2 class="popup-title">
        Recent Messages<a href="#" class="pull-right text-danger"
          >New message</a
        >
      </h2>
      <!-- /.popup-title -->
      <div class="content">
        <ul class="notice-list">
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">John Doe</span>
              <span class="desc"
                >Amet odio neque nobis consequuntur consequatur a quae, impedit
                facere repellat voluptates.</span
              >
              <span class="time">10 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">Harry Halen</span>
              <span class="desc"
                >Amet odio neque nobis consequuntur consequatur a quae, impedit
                facere repellat voluptates.</span
              >
              <span class="time">15 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">Thomas Taylor</span>
              <span class="desc"
                >Amet odio neque nobis consequuntur consequatur a quae, impedit
                facere repellat voluptates.</span
              >
              <span class="time">30 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/128x128" alt=""
              /></span>
              <span class="name">Jennifer</span>
              <span class="desc"
                >Amet odio neque nobis consequuntur consequatur a quae, impedit
                facere repellat voluptates.</span
              >
              <span class="time">45 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/80x80" alt=""
              /></span>
              <span class="name">Helen Candy</span>
              <span class="desc"
                >Amet odio neque nobis consequuntur consequatur a quae, impedit
                facere repellat voluptates.</span
              >
              <span class="time">45 min</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/128x128" alt=""
              /></span>
              <span class="name">Anna Cavan</span>
              <span class="desc"
                >Amet odio neque nobis consequuntur consequatur a quae, impedit
                facere repellat voluptates.</span
              >
              <span class="time">1 hour ago</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar bg-success"><i class="fa fa-user"></i></span>
              <span class="name">Jenny Betty</span>
              <span class="desc"
                >Amet odio neque nobis consequuntur consequatur a quae, impedit
                facere repellat voluptates.</span
              >
              <span class="time">1 day ago</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="avatar"
                ><img src="http://placehold.it/128x128" alt=""
              /></span>
              <span class="name">Denise Peterson</span>
              <span class="desc"
                >Amet odio neque nobis consequuntur consequatur a quae, impedit
                facere repellat voluptates.</span
              >
              <span class="time">1 year ago</span>
            </a>
          </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more"
          >See more messages <i class="fa fa-angle-down"></i
        ></a>
      </div>
      <!-- /.content -->
    </div>
    <!-- /#message-popup -->
    <div id="color-switcher">
      <div id="color-switcher-button" class="btn-switcher">
        <div class="inside waves-effect waves-circle waves-light">
          <i class="ico fa fa-gear"></i>
        </div>
        <!-- .inside waves-effect waves-circle -->
      </div>
      <!-- .btn-switcher -->
      <div id="color-switcher-content" class="content">
        <a href="#" data-color="red" class="item js__change_color"
          ><span class="color" style="background-color: #f44336"></span
          ><span class="text">Red</span></a
        >
        <a href="#" data-color="violet" class="item js__change_color"
          ><span class="color" style="background-color: #673ab7"></span
          ><span class="text">Violet</span></a
        >
        <a href="#" data-color="dark-blue" class="item js__change_color"
          ><span class="color" style="background-color: #3f51b5"></span
          ><span class="text">Dark Blue</span></a
        >
        <a href="#" data-color="blue" class="item js__change_color active"
          ><span class="color" style="background-color: #304ffe"></span
          ><span class="text">Blue</span></a
        >
        <a href="#" data-color="light-blue" class="item js__change_color"
          ><span class="color" style="background-color: #2196f3"></span
          ><span class="text">Light Blue</span></a
        >
        <a href="#" data-color="green" class="item js__change_color"
          ><span class="color" style="background-color: #4caf50"></span
          ><span class="text">Green</span></a
        >
        <a href="#" data-color="yellow" class="item js__change_color"
          ><span class="color" style="background-color: #ffc107"></span
          ><span class="text">Yellow</span></a
        >
        <a href="#" data-color="orange" class="item js__change_color"
          ><span class="color" style="background-color: #ff5722"></span
          ><span class="text">Orange</span></a
        >
        <a href="#" data-color="chocolate" class="item js__change_color"
          ><span class="color" style="background-color: #795548"></span
          ><span class="text">Chocolate</span></a
        >
        <a href="#" data-color="dark-green" class="item js__change_color"
          ><span class="color" style="background-color: #263238"></span
          ><span class="text">Dark Green</span></a
        >
        <span id="color-reset" class="btn-restore-default js__restore_default"
          >Reset</span
        >
      </div>
      <!-- /.content -->
    </div>
    <!-- #color-switcher -->

    <div id="wrapper">
      
      <div class="main-content">
        <div class="row small-spacing">
          <div class="col-xs-12">
            <h1 class="text-center">Edit Details</h1>
            <div class="box-content">
              <form id="forms" onsubmit="return editvalidation()" data-toggle="validator">
                <div class="form-group">
                  <label for="inputName" class="control-label">Position</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputPosition"
                    placeholder="National Sales Head"
                    required
                    name="position"
                    value="<?= $data['position']; ?>"
                  />
                  
                </div>
                <div class="form-group has-feedback">
                  <label for="inputTwitter" class="control-label"
                    >Product</label
                  >
                  
                    
                    <input
                      type="text"
                     name="product"
                      class="form-control"
                      id="inputProduct"
                      placeholder="Education Loan (Domestic & International)"
                      required
                      value="<?= $data['product']; ?>"
                    />
                  
                  <span
                    class="glyphicon form-control-feedback"
                    aria-hidden="true"
                  ></span>
                  <!-- <div class="help-block with-errors">
                    Hey look, this one has feedback icons!
                  </div> -->
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="control-label">Location</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputLocation"
                    placeholder="Location"
                    name="location"
                    value="<?= $data['location']; ?>"
                    
                    required
                  />
                  <input
                    type="hidden"
                    class="form-control"
                    id="inputLocation"
                    placeholder="Location"
                    name="id"
                    value="<?= $data['id']; ?>"
                    
                    required
                  />
                  <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                  <label for="inputEmail" class="control-label">Industry</label>
                  <input
                    type="text"
                    name="industry"
                    class="form-control"
                    id="inputIndustry"
                    placeholder="Banking/ NBFC"
                    value="<?= $data['industry']; ?>"
                    
                    required
                  />
                  <div class="help-block with-errors"></div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail" class="control-label">Description</label>
                  <textarea id="desc" class="form-control" name="des" id="" cols="30" rows="10" required value="hello"></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                
                
                
                
                <div class="form-group">
                  <button
                    type="submit"
                    class="btn btn-primary waves-effect waves-light"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
            <!-- /.box-content -->
          </div>
          <!-- /.col-xs-12 -->
        </div>
        <!-- /.row small-spacing -->
        <?php include('footer.php');   ?>
      </div>
      <!-- /.main-content -->
    </div>
    <!--/#wrapper -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/script/html5shiv.min.js"></script>
      <script src="assets/script/respond.min.js"></script>
    <![endif]-->
    <!-- 
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
      document.getElementById("desc").value = "<?= $data['des'];?>";
    </script>
    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/modernizr.min.js"></script>
    <script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/plugin/nprogress/nprogress.js"></script>
    <script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
    <script src="assets/plugin/waves/waves.min.js"></script>
    <!-- Full Screen Plugin -->
    <script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

    <!-- Validator -->
    <script src="assets/plugin/validator/validator.min.js"></script>

    <script src="assets/scripts/main.min.js"></script>
    <script src="assets/color-switcher/color-switcher.min.js"></script>
  </body>
</html>
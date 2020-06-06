
<?php
session_start();
include("../db.php");
require_once("../model/user.php");
require_once("../model/category.php");
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="panel-body">
	  	      <a>
            <?php  //success message
            if(isset($_POST['success'])) {
            $success = $_POST["success"];
            echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
            }
            ?></a>
                </div>
                <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Danh sách người dùng</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>Họ</th><th>Tên</th><th>Email</th><th>Mật khẩu</th><th>Liên lạc</th><th>Địa chỉ</th><th>Thành phố</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $listUser = GetListUser();
                        for($i = 0;$i < count($listUser); $i++)
                        {
                          $user = $listUser[$i];
                          echo "<tr><td>$user->userId</td><td>$user->firstName</td><td>$user->lastName</td><td>$user->email</td><td>$user->password</td><td>$user->phone</td><td>$user->address1</td><td>$user->address2</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Danh sách các loại</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>Loại</th><th>Số lượng</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result = GetListCategory();
                        for($i = 0 ; $i <count($result); $i++)
                        { 
                            $cat = $result[$i];
                            echo "<tr><td>$cat->categoryID</td><td>$cat->categoryName</td><td>$cat->categoryCount</td></tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Danh sách nhãn hiệu</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>Tên nhãn hiệu</th><th>Số lượng</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result = GetListBrand();
                        for($i = 0 ; $i <count($result); $i++)
                        { 
                            $brand = $result[$i];
                            echo "<tr><td>$brand->brandID</td><td>$brand->brandName</td><td>$brand->brandCount</td></tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
           </div>
           <div class="col-md-5">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Danh sách đăng ký</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>email</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result = GetListSubscriber();
                        for($i = 0 ; $i <count($result); $i++)
                        { 
                            $sUser = $result[$i];
                            echo "<tr><td>$sUser->userId</td><td>$sUser->email</td></tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
           
            
          
        </div>
      </div>
      <?php
      include "footer.php";
?>
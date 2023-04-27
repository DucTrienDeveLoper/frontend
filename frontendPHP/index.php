<?php
require "../inc/header.php";
?>
        <div id="layoutSidenav_content"> 
            
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <!-- Start Thống kê tổng số lượng-->
                    <div class="row"> 
                          <!-- Start Hóa đơn trong ngày  -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body" style="display: flex;margin-bottom: -25px;">
                                    <p style="font-size: 15px;"> Hóa đơn trong ngày 15 tháng 9</p>

                                </div>
                                <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                                    <p>200000</p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="billday.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Hóa đơn trong ngày -->
                        <!-- Start Hóa đơn thành công trong ngày -->
                        <div class="col-xl-3 col-md-6">

                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body" style="display: flex;margin-bottom: -25px;">
                                    <p style="font-size: 15px;"> Số hóa đơn thành công ngày 15</p>

                                </div>
                                <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                                    <p>40</p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="billdetail.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Hóa đơn thành công trong ngày -->
                        <!-- Start Tổng doanh thu trong ngày -->
                        <div class="col-xl-3 col-md-6">

                            <div class="card bg-success text-white mb-4">
                                <div class="card-body" style="display: flex;margin-bottom: -25px;">
                                    <p style="font-size: 15px;"> Tổng doanh thu trong ngày</p>

                                </div>
                                <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                                    <p>5.000.000 VND</p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="billthanhcong.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tổng doanh thu trong ngày -->
                        <!-- Start Đơn hàng cần phê duyệt -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body" style="display: flex;margin-bottom: -25px;">
                                    <p style="font-size: 15px;"> đơn hàng cần phê duyệt</p>

                                </div>
                                <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                                    <p>50</p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="billcanpheduyet.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- End Đơn hàng cần phê duyệt -->
                    </div>
                    <div class="row"> 
                        <!-- Start Hóa đơn trong ngày  -->
                      <div class="col-xl-3 col-md-6">
                          <div class="card bg-primary text-white mb-4">
                              <div class="card-body" style="display: flex;margin-bottom: -25px;">
                                  <p style="font-size: 15px;"> Doanh thu tháng</p>

                              </div>
                              <div style="text-align:right; margin-right: 30px;margin-bottom: -10px">
                                  <p>5.000.000 VND</p>
                              </div>
                              <div class="card-footer d-flex align-items-center justify-content-between">
                                  <a class="small text-white stretched-link" href="doanhthuthang.php">View Details</a>
                                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                          </div>
                      </div>
                      <!-- End Hóa đơn trong ngày -->
                      <!-- Start Hóa đơn thành công trong ngày -->
                     
                      <!-- End Hóa đơn thành công trong ngày -->
                      
                      <!-- End Đơn hàng cần phê duyệt -->
                  
                    <!-- End Thống kê tổng số lượng-->
                    <div class="row">
                        <!-- Start top 3 sản phẩm bán nhiều nhất -->
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Top 3 sản phẩm bán nhiều nhất
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Giá sản phẩm</th>
                                            <th scope="col">Số lượng</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Oppo Realme</td>
                                            <td>600</td>
                                            <td>50</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Oppo 3</td>
                                            <td>300</td>
                                            <td>40</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Samsung</td>
                                            <td>300</td>
                                            <td>40</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Top 3 sản phẩm bán nhiều nhất  -->
                        <!-- Start Top 3 sản phẩm bán ít nhất -->
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Top 3 sản phẩm bán ít nhất
                                </div>
                                <div class="card-body"><table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giá sản phẩm</th>
                                        <th scope="col">Số lượng</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                      </tr>
                                    </tbody>
                                  </table></div>
                            </div>
                        </div>
                    </div>
                    <!-- End top 3 sản phẩm bán ít nhất -->
                    <!-- Start Danh sách hóa đơn cần phê duyệt -->
                    <!-- <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Danh sách hóa đơn cần phê duyệt 
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr style="background: aquamarine;">
                                    <th scope="col">#</th>
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Số hóa đơn</th>
                                    <th scope="col">Tổng tiền</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Oppo Realme</td>
                                    <td>600</td>
                                    <td>50</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Oppo 3</td>
                                    <td>300</td>
                                    <td>40</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Samsung</td>
                                    <td>300</td>
                                    <td>40</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div> -->
                    <!-- End danh sách hóa đơn cần phê duyệt -->
                </div>
                
            </main> 
            <!--Start Footer -->
            <?php
            require "../inc/footer.php";
            ?>
            <!-- End footer -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
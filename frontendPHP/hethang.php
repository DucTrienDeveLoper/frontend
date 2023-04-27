<?php
require "../inc/header.php";
?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"> doanh thu </h1>
                    <div  class="row" style=" margin-right: -20px;">
                        <div style="margin: 20px 0px; display: flex; justify-content: right; margin-right: -20px;">
                            <!-- <button style="width:80px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#them">
                                them
                              </button> -->
                              
                        </div>

                    </div>
                   
                    <div class="row">
                        <table class="table">
                            <thead style="background-color: aqua;">
                              <tr >
                                <th scope="col">#</th>
                                <th scope="col">Id</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <!-- <th scope="col"></th>
                                <th scope="col"></th> -->
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
                          </table>
                    </div>
                
               
                </div>
            </main>
            
            <?php
            require "../inc/footer.php";
            ?>
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
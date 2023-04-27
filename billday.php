<?php
require "../inc/header.php";
?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"> hóa đơn trong ngày</h1>
                    <div  class="row" style=" margin-right: -20px;">
                        <!-- <div style="margin: 20px 0px; display: flex; justify-content: right; margin-right: -20px;">
                            <button style="width:80px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#them">
                                them
                              </button>
                              
                        </div> -->

                    </div>
                   
                    <div class="row">
                        <table class="table">
                            <thead style="background-color: aqua;">
                              <tr >
                                <th scope="col">#</th>
                                <th scope="col">Id</th>
                                <th scope="col">Tổng số tiền</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>thành công</td>
                                <td>
                                    <button style="width:80px;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#sua">
                                        sua
                                      </button>
                                </td>
                                <td>
                                    <button style="width:80px" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#xoa">
                                        xoa
                                      </button>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>thất bại</td>
                                <td>
                                    <button style="width:80px;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#sua">
                                        sua
                                      </button>
                                </td>
                                <td>
                                    <button style="width:80px" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#xoa">
                                        xoa
                                      </button>
                                </td>
                                
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td>thành công</td>
                                <td>
                                    <button style="width:80px;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#sua">
                                        sua
                                      </button>
                                </td>
                                <td>
                                    <button style="width:80px" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#xoa">
                                        xoa
                                      </button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                
               
                </div>
            </main>
            <div class="modal fade" id="them" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Them</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                              </div>
                             
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                              </div> 
                        </div>

                       </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="sua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">sua</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                              </div>
                             
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                              </div> 
                        </div>

                       </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="xoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">xoa</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- <div class="modal-body">
                       <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                              </div>
                             
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                              </div> 
                        </div>

                       </div>
                    </div> -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
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
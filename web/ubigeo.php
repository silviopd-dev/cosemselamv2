<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php require_once 'libraries-css.php' ?>
</head>

<body>
  <nav class="m-mobile" role="navigation">
    <div id="menuToggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
      <ul class="scrollbar" id="menu">
        <?php require 'menu.php' ?>
      </ul>
    </div>
  </nav>
  <div class="row m-row-derecha">
    <div class="m-background1 m-desktop scrollbar">
      <?php require 'menu.php' ?>
    </div>
    <div class="m-derecha">
      <?php require_once 'header.php' ?>
      <div style="padding: 10px 15px">
        <h3 class="text-center">REGISTRO UBIGEO</h3>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-globe-americas"></i>&nbsp;DEPARTAMENTO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true"><i class="fas fa-globe-americas"></i>&nbsp;PROVINCIA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="home3-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home3" aria-selected="true"><i class="fas fa-globe-americas"></i>&nbsp;DISTRITO</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <!-- departamento -->
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!-- modal -->
            <button type="button" class="btn btn-primary  m-btn-large" data-toggle="modal" data-target=".bd-example-modal-lg">REGISTRAR</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-globe-americas"></i>&nbsp;DEPARTAMENTO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;ID</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;NOMBRE</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="far fa-window-close"></i>&nbsp;Close</button>
                    <button type="button" class="btn btn-primary"><i class="far fa-save"></i>&nbsp;Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal -->

            <!-- datatable -->
            <div class="mt-4">
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- datatable -->

          </div>
          <!-- departamento -->

           <!-- provincia -->
           <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
            <!-- modal -->
            <button type="button" class="btn btn-primary  m-btn-large" data-toggle="modal" data-target=".bd-example-modal-lg1">REGISTRAR</button>

            <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-globe-americas"></i>&nbsp;PROVINCIA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;ID</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;NOMBRE</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="far fa-window-close"></i>&nbsp;Close</button>
                    <button type="button" class="btn btn-primary"><i class="far fa-save"></i>&nbsp;Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal -->

            <!-- datatable -->
            <div class="mt-4">
              <table id="example1" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- datatable -->

          </div>
          <!-- provincia -->

           <!-- distrito -->
           <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
            <!-- modal -->
            <button type="button" class="btn btn-primary  m-btn-large" data-toggle="modal" data-target=".bd-example-modal-lg2">REGISTRAR</button>

            <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-globe-americas"></i>&nbsp;DISTRITO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;ID</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;NOMBRE</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="far fa-window-close"></i>&nbsp;Close</button>
                    <button type="button" class="btn btn-primary"><i class="far fa-save"></i>&nbsp;Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal -->

            <!-- datatable -->
            <div class="mt-4">
              <table id="example2" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- datatable -->

          </div>
          <!-- distrito -->
        </div>
      </div>
      <?php require_once 'footer.php' ?>
    </div>
  </div>
  <?php require_once 'libraries-js.php' ?>
</body>

</html>
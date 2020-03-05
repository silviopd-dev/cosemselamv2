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
      <ul id="menu">
        <?php require 'menuoption.php' ?>
      </ul>
    </div>
  </nav>
  <div class="row" style="margin: 0; height: 100vh; width: 100%">
    <div class="m-background1 m-desktop" style="padding: 0;width: 300px">
      <?php require_once 'menu.php' ?>
    </div>
    <div class="m-derecha" style="padding: 0;width: calc(100% - 300px)">
      <?php require_once 'header.php' ?>
      <div style="padding: 10px 15px">
        <h3 class="text-center">REGISTRO FAMILIAR</h3>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user-lock"></i>&nbsp;DATOS PERSONALES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-map-signs"></i>&nbsp;DIRECCIÓN</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <!-- datos-personales -->
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!-- modal -->
            <button type="button" class="btn btn-primary  m-btn-large" data-toggle="modal" data-target=".bd-example-modal-lg">REGISTRAR</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-lock"></i>&nbsp;DATOS PERSONALES</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-4">
                        <div class="center-v-h-c">
                          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/63/IMG_%28business%29.svg/1200px-IMG_%28business%29.svg.png" alt="" width="100%">
                          <label for="files" class="btn btn-info" style="margin-top: 15px">Seleccionar Imagen</label>
                          <!-- <button type="button" class="btn btn-info" for="files">Info</button> -->
                          <input id="files" style="visibility:hidden;" type="file">
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;TIPO DNI</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;PATERNO</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;DNI</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;MATERNO</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="exampleInputEmail1"><i class="fas fa-id-card"></i>&nbsp;NOMBRES</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-venus-mars"></i>&nbsp;SEXO</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-user-friends"></i>&nbsp;ESTADO CIVIL</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-universal-access"></i>&nbsp;DISCAPACIDAD</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-calendar-alt"></i>&nbsp;FECHA NACIMIENTO</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-globe-americas"></i>&nbsp;LUGAR NACIMIENTO</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-at"></i>&nbsp;EMAIL</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-mobile-alt"></i>&nbsp;CELULAR</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><i class="fas fa-phone"></i>&nbsp;TELEFONO</label>
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

            <div class="" style="width: 50%; margin-left: 25%">
              <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" placeholder="BUSCAR SOCIO POR DNI" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i>&nbsp;BUSCAR</button>
                </div>
              </div>
            </div>

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
          <!-- datos-personales -->

          <!-- direccion -->
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <!-- modal -->
            <button type="button" class="btn btn-primary  m-btn-large" data-toggle="modal" data-target=".bd-example-modal-lg2">REGISTRAR</button>

            <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-map-signs"></i>&nbsp;DIRECCIÓN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <section>
                      <div class="row" style="justify-content: center">
                        <div class="col-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1"><i class="fas fa-building"></i>&nbsp;TIPO DE VIVIENDA</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1"><i class="far fa-address-book"></i>&nbsp;DIRECCIÓN FISCAL</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1"><i class="fas fa-map-signs"></i>&nbsp;DIRECCIÓN</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1"><i class="fas fa-directions"></i>&nbsp;REFERENCIA</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                        </div>

                      </div>
                    </section>
                    <section>
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="exampleInputEmail1"><i class="fas fa-globe-americas"></i>&nbsp;UBICACIÓN</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="far fa-window-close"></i>&nbsp;Close</button>
                    <button type="button" class="btn btn-primary"><i class="far fa-save"></i>&nbsp;Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal -->

            <div class="" style="width: 50%; margin-left: 25%">
              <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" placeholder="BUSCAR SOCIO POR DNI" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i>&nbsp;BUSCAR</button>
                </div>
              </div>
            </div>

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
          <!-- direccion -->
        </div>
      </div>
      <?php require_once 'footer.php' ?>
    </div>
  </div>
  <?php require_once 'libraries-js.php' ?>
</body>

</html>
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
        <h3 class="text-center">REGISTRO DATOS LABORALES</h3>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user-lock"></i>&nbsp;DATOS LABORALES</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <!-- datos-laborales -->
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!-- modal -->
            <button type="button" class="btn btn-primary  m-btn-large" data-toggle="modal" data-target=".bd-example-modal-lg">REGISTRAR</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-lock"></i>&nbsp;DATOS LABORALES</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- tabs -->
                    <section>
                      <div class="row center-v-h">
                        <div class="col-8">
                          <div class="form-group">
                            <label for="exampleInputEmail1">NOMBRE SOCIO</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                        </div>
                      </div>
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true"><i class="fas fa-user-lock"></i>&nbsp;DATOS GENERALES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="home3-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home3" aria-selected="true"><i class="fas fa-school"></i>&nbsp;INSTITUCIÓN</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-hourglass-half"></i>&nbsp;TIEMPO SERVICIO</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false"><i class="fas fa-money-check-alt"></i>&nbsp;MONTOS</a>
                        </li>
                      </ul>

                      <div class="tab-content mt-3 p-3" id="myTabContent">
                                <!-- datos-personales -->
                                <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                                  <div class="row center-v-h">
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-address-card"></i>&nbsp;CODIGO MODULAR</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-money-check-alt"></i>&nbsp;CTA AHORRO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row center-v-h">
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="far fa-id-card"></i>&nbsp;RÉGIMEN LABORAL</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="far fa-id-card"></i>&nbsp;RÉGIMEN PENSIONARIO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- datos-personales -->
                        
                                <!-- institucion -->
                                <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                                  <div class="row center-v-h">
                                    <div class="col-8">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-map-marker-alt"></i>&nbsp;UBICACIÓN</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row center-v-h">
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-university"></i>&nbsp;UGEL</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-school"></i>&nbsp;INSTITUCIÓN EDUCATIVA</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="far fa-id-card"></i>&nbsp;NRO. RESOLUCIÓN</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="far fa-id-card"></i>&nbsp;TIPO CONTRATO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-chalkboard-teacher"></i>&nbsp;CARGO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- institucion -->

                                <!-- tiempo servicio -->
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                  <div class="row center-v-h">
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="far fa-clock"></i>&nbsp;H. LABORALES</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-stopwatch"></i>&nbsp;H. EXTRAS</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-calendar-alt"></i>&nbsp;FECHA INGRESO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-calendar-alt"></i>&nbsp;FECHA EGRESO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-4">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-calendar-check"></i>&nbsp;TIEMPO SERVICIO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- tiempo servicio -->
                        
                                <!-- montos -->
                                <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                                  <div class="row">
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-funnel-dollar"></i>&nbsp;T. REMUNERADO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-hand-holding-usd"></i>&nbsp;T. DESCUENTO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-money-check"></i>&nbsp;T. LIQUIDADO</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-hand-holding-usd"></i>&nbsp;T. IMPONIBLE</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-funnel-dollar"></i>&nbsp;T. GRAT./BONI.</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-funnel-dollar"></i>&nbsp;T. ESC.</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-funnel-dollar"></i>&nbsp;T. O.I.</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">AAA</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- montos -->
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
          <!-- datos-laborales -->
        </div>
      </div>
      <?php require_once 'footer.php' ?>
    </div>
  </div>
  <?php require_once 'libraries-js.php' ?>
</body>

</html>
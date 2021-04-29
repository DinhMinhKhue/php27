<?php require_once('header.php') ?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h4 class="font-weight-bold mb-0">RoyalUI Dashboard</h4>
        </div>
        <div>
          <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
            <i class="ti-clipboard btn-icon-prepend"></i>Report
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Category</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">3404</h3>
            <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Users</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">4703</h3>
            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Post</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">4001</h3>
            <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Category</p>
          <p class="text-muted font-weight-light">figures from January to December</p>
          <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
          <canvas id="sales-chart"></canvas>
        </div>
        <div class="card border-right-0 border-left-0 border-bottom-0">
          <div class="d-flex justify-content-center justify-content-md-end">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Today
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">January - March</a>
                <a class="dropdown-item" href="#">March - June</a>
                <a class="dropdown-item" href="#">June - August</a>
                <a class="dropdown-item" href="#">August - November</a>
              </div>
            </div>
            <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card border-bottom-0">
        <div class="card-body pb-0">
          <p class="card-title">User</p>
          <p class="text-muted font-weight-light">user metrics</p>
          <div class="d-flex flex-wrap mb-5">
            <div class="mr-5 mt-3">
              <p class="text-muted">Status</p>
              <h3>362</h3>
            </div>
            <div class="mr-5 mt-3">
              <p class="text-muted">New users</p>
              <h3>187</h3>
            </div>
            <div class="mr-5 mt-3">
              <p class="text-muted">Chats</p>
              <h3>524</h3>
            </div>
            <div class="mt-3">
              <p class="text-muted">Feedbacks</p>
              <h3>509</h3>
            </div> 
          </div>
        </div>
        <canvas id="order-chart" class="w-100"></canvas>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title mb-0">Post</p>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>User</th>
                  <th>Product</th>
                  <th>Sale</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jacob</td>
                  <td>Photoshop</td>
                  <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                  <td><label class="badge badge-danger">Pending</label></td>
                </tr>
                <tr>
                  <td>Messsy</td>
                  <td>Flash</td>
                  <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                  <td><label class="badge badge-warning">In progress</label></td>
                </tr>
                <tr>
                  <td>John</td>
                  <td>Premier</td>
                  <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                  <td><label class="badge badge-info">Fixed</label></td>
                </tr>
                <tr>
                  <td>Peter</td>
                  <td>After effects</td>
                  <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                  <td><label class="badge badge-success">Completed</label></td>
                </tr>
                <tr>
                  <td>Dave</td>
                  <td>53275535</td>
                  <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                  <td><label class="badge badge-warning">In progress</label></td>
                </tr>
                <tr>
                  <td>Messsy</td>
                  <td>Flash</td>
                  <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                  <td><label class="badge badge-info">Fixed</label></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

    <?php require_once('footer.php') ?>
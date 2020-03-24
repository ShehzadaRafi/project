@extends('layouts.master')
@section('content')
<div class="employee_banner mt-4 mb-4">
    <div class="center mb-4">
        <h2 class="text-orange">EMPL<span class="text-primary">OYEES</span></h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 search">
            <form class="">
            <div class="row">
              <div class="col-md">
                <div class="form-group">
                  <label>Sort by:</label>
                  <select name="sort" class="form-control">
                    <option value="Latest">Latest</option>
                    <option value="New">New</option>
                  </select>
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label>Show:</label>
                  <select name="sort" class="form-control">
                    <option value="10">10</option>
                    <option value="15">15</option>
                  </select>
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                <label>Category:</label>
                <select name="sort" class="form-control">
                  <option value="One">One</option>
                  <option value="Two">Two</option>
                  <option value="One">One</option>
                  <option value="Two">Two</option>
                </select>
              </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                <label>Keywords</label>
                <div class="btn-group">
                  <button class="btn btn-info">Engineering</button>
                  <button class="btn btn-danger">IT</button>
                  <button class="btn btn-orange">Marketing</button>
                  <button class="btn btn-primary">Banking</button>
                </div>
              </div>
              </div>
            </div>
            </form>
        </div>
        <div class="col-md-8">
          <div class="container">
            <div class="row">
              <div class="col-md-4 employee_data">
                <div class="style">
                <img src="img/s1.jpg" width="100%">
                <hr>
                <div class="list-inline">
                  <p class="text-justify float-left">jobs:<span>120</span></p>
                  <i class="fa fa-search float-right"></i>
                </div>
                </div>
              </div>
              <div class="col-md-4 employee_data">
                <div class="style">
                <img src="img/s2.jpg" width="100%">
                <hr>
                <div class="list-inline">
                  <p class="text-justify float-left">jobs:<span>120</span></p>
                  <i class="fa fa-search float-right"></i>
                </div>
                </div>
              </div>
              <div class="col-md-4 employee_data">
                <div class="style">
                <img src="img/s3.jpg" width="100%">
                <hr>
                <div class="list-inline">
                  <p class="text-justify float-left">jobs:<span>120</span></p>
                  <i class="fa fa-search float-right"></i>
                </div>
                </div>
              </div>
              <div class="col-md-4 employee_data">
                <div class="style">
                <img src="img/s4.jpg" width="100%">
                <hr>
                <div class="list-inline">
                  <p class="text-justify float-left">jobs:<span>120</span></p>
                  <i class="fa fa-search float-right"></i>
                </div>
                </div>
              </div>
              <div class="col-md-4 employee_data">
                <div class="style">
                <img src="img/s5.jpg" width="100%">
                <hr>
                <div class="list-inline">
                  <p class="text-justify float-left">jobs:<span>120</span></p>
                  <i class="fa fa-search float-right"></i>
                </div>
                </div>
              </div>
              <div class="col-md-4 employee_data">
                <div class="style">
                <img src="img/s6.jpg" width="100%">
                <hr>
                <div class="list-inline">
                  <p class="text-justify float-left">jobs:<span>120</span></p>
                  <i class="fa fa-search float-right"></i>
                </div>
                </div>
              </div>
              <div class="col-md-4 employee_data">
                <div class="style">
                <img src="img/s7.jpg" width="100%">
                <hr>
                <div class="list-inline">
                  <p class="text-justify float-left">jobs:<span>120</span></p>
                  <i class="fa fa-search float-right"></i>
                </div>
                </div>
              </div>
              <div class="col-md-4 employee_data">
                <div class="style">
                <img src="img/s8.jpg" width="100%">
                <hr>
                <div class="list-inline">
                  <p class="text-justify float-left">jobs:<span>120</span></p>
                  <i class="fa fa-search float-right"></i>
                </div>
                </div>
              </div>
              <div class="col-md-4 employee_data">
                <div class="style">
                <img src="img/s1.jpg" width="100%">
                <hr>
                <div class="list-inline">
                  <p class="text-justify float-left">jobs:<span>120</span></p>
                  <i class="fa fa-search float-right"></i>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sidebar">
          <div class="style">
            <h3 class="text-center pb-1">LASTEST BLOG</h3>
            <div class="col-md-12">
              <div class="row">
                <img src="img/s1.jpg" width="80px">
                <div class="data">
                  <p class="text-justify mb-2">IT Department Manager</p>
                  <div class="list-inline">
                    <i class="fa fa-certificate float-left"> Full Time</i><i class="fa fa-map-marker float-right"> Pakistan</i>
                  </div>
                  <a href="#" class="btn btn-dark mt-2">Apply Now</a>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-md-12">
              <div class="row">
                <img src="img/s1.jpg" width="80px">
                <div class="data">
                  <p class="text-justify mb-2">IT Department Manager</p>
                  <div class="list-inline">
                    <i class="fa fa-certificate float-left"> Full Time</i><i class="fa fa-map-marker float-right"> Pakistan</i>
                  </div>
                  <a href="#" class="btn btn-dark mt-2">Apply Now</a>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-md-12">
              <div class="row">
                <img src="img/s1.jpg" width="80px">
                <div class="data">
                  <p class="text-justify mb-2">IT Department Manager</p>
                  <div class="list-inline">
                    <i class="fa fa-certificate float-left"> Full Time</i><i class="fa fa-map-marker float-right"> Pakistan</i>
                  </div>
                  <a href="#" class="btn btn-dark mt-2">Apply Now</a>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-md-12">
              <div class="row">
                <img src="img/s1.jpg" width="80px">
                <div class="data">
                  <p class="text-justify mb-2">IT Department Manager</p>
                  <div class="list-inline">
                    <i class="fa fa-certificate float-left"> Full Time</i><i class="fa fa-map-marker float-right"> Pakistan</i>
                  </div>
                  <a href="#" class="btn btn-dark mt-2">Apply Now</a>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-md-12">
              <div class="row">
                <img src="img/s1.jpg" width="80px">
                <div class="data">
                  <p class="text-justify mb-2">IT Department Manager</p>
                  <div class="list-inline">
                    <i class="fa fa-certificate float-left"> Full Time</i><i class="fa fa-map-marker float-right"> Pakistan</i>
                  </div>
                  <a href="#" class="btn btn-dark mt-2">Apply Now</a>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-md-12">
              <div class="row">
                <img src="img/s1.jpg" width="80px">
                <div class="data">
                  <p class="text-justify mb-2">IT Department Manager</p>
                  <div class="list-inline">
                    <i class="fa fa-certificate float-left"> Full Time</i><i class="fa fa-map-marker float-right"> Pakistan</i>
                  </div>
                  <a href="#" class="btn btn-dark mt-2">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- banner5 ends -->
@endsection
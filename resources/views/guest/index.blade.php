@extends('templates.auth')
@section('content')

<div class="bg-primary-dark">
          <div class="row g-0 bg-primary-dark-op">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
              <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <a class="link-fx fw-semibold fs-2 text-white" href="index.html">
                    One<span class="fw-normal">UI</span>
                  </a>
                  <p class="text-white-75 me-xl-8 mt-2">
                    Creating a new account is completely free. Get started with 5 projects to manage and feel free to upgrade as your business grow.
                  </p>
                </div>
              </div>
              <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                <p class="fw-medium text-white-50 mb-0">
                  <strong>OneUI 5.0</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline mb-0 py-2">
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="javascript:void(0)">Legal</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="javascript:void(0)">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="javascript:void(0)">Terms</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END Meta Info Section -->

            <!-- Main Section -->
            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-light">
              <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx fw-semibold fs-3 text-dark" href="index.html">
                  One<span class="fw-normal">UI</span>
                </a>
              </div>
              <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <!-- Header -->
                  <div class="text-center mb-5">
                    <p class="mb-3">
                      <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                    </p>
                    <h1 class="fw-bold mb-2">
                      Create Account
                    </h1>
                    <p class="fw-medium text-muted">
                      Get your access today in one easy step
                    </p>
                  </div>
                  <!-- END Header -->

                  <!-- Sign Up Form -->
                  <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                  <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                  <form style="padding-left: 5rem;padding-right:5rem">
                    <div class="row">
                      <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                         <div class="input-group">
                                        <span class="input-group-text">
                                        <i class="fa fa-calendar-alt"></i>
                                        </span>
                                        <input type="text" class="form-control @error('date_birth') is-invalid @enderror" name="date_birth"
                                        type="text" data-large-mode="true" id="dropper" data-translate-mode="true" data-theme="thema-date"
                                        value="{{ old('date_birth') }}" style="background: white">
                                        @error('date_birth')
                                        <small class="text-danger"></small>
                                        @enderror
                                    </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">

                      </div>
                      <div class="col">
                         <select
                                        class="js-example-basic-single-kelas form-control @error('class') is-invalid @enderror"
                                        style="width: 89.1%" name="class">
                                        
                                        <option value="VIP" >VIP
                                        </option>
                                        <option value="Bisnis">Bisnis</option>
                                        <option value="Bisnis">Ekonomi</option>
                                    
                                    </select><br>
                                    @error('religion')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                      </div>
                    </div>
                    <div class="mb-3">
           
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  <!-- END Sign Up Form -->
                </div>
              </div>
              <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                <p class="fw-medium text-black-50 py-2 mb-0">
                  <strong>OneUI 5.0</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline py-2 mb-0">
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END Main Section -->
          </div>

          <!-- Terms Modal -->
          <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
              <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                  </div>
                  <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">I Agree</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Terms Modal -->
        </div>

        @endsection
@extends('layout.bone')

@section('title','ចុះឈ្មោះ')


@section('style')

@endsection

@section('post')
<style>
      .bg-register-image {
    background: url(https://www.insidehighered.com/sites/default/server_files/media/Nugent%20learning_0.jpg);
    background-position: center;
    background-size: cover;
    }
    .login-margin{
      margin-top: 120px;
    }
    .login-background-color{
      background-color: #224abe;
    }
</style>
    <div class="container login-margin">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" method="post" action="{{route('register')}}">
                @csrf
                  <div class="form-group">
                    <div >
                      <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name">
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    
                    <!-- <div class="col-sm-6">
                      <input type="text" name="lname" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                    </div> -->
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    
                    </div>
                    <div class="col-sm-6">
                      <input type="password" name="cpassword" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <!-- <a class="btn btn-primary btn-user btn-block" type="submit">
                    Register Account
                  </a> -->
                  <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
                  <hr>
                  <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                  </a> -->
                </form>

                <!-- <hr>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="login.html">Already have an account? Login!</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
@endsection
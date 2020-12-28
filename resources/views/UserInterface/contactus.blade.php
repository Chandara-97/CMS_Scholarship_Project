@extends('layout.bone')

@section('title','ទាក់ទងជាមួយយើង')


@section('style')

@endsection

@section('post')
<div class="container">

          <div class="row">
              <div class="col-2"></div>
              <div data-aos="fade-left" class="btn btn-warning rounded-circle col">
                  <h1 class="header " data-aos="animate text on scroll">ទាក់ទងជាមួយយើង</h1>
              </div>
              <div class="col-2"></div>
          </div>
          
          <div class="row">
             <div class="col"></div>
             <div class="col-2">
                <img class="rounded-circle" style="width: 18rem;" src="https://z-p3-scontent.fpnh18-3.fna.fbcdn.net/v/t1.0-9/118175273_2422841798016454_7512749369154338776_n.jpg?_nc_cat=103&amp;ccb=2&amp;_nc_sid=174925&amp;_nc_eui2=AeF6rF02hJorJu9lQNiPlRaF_M92PINQepb8z3Y8g1B6loS-vViW37WbEedOTrr7N9T_HehpjAYTBV4-6XF7rAnL&amp;_nc_ohc=fA1nR_ZTXPQAX98RSf1&amp;_nc_ht=z-p3-scontent.fpnh18-3.fna&amp;oh=c961fa0d514c99860d15e698f1294f90&amp;oe=5FFB405E" alt="Leav Chan Dara">
                <div class="text-center">
                  <h2>Leav Chan Dara</h2>
                </div>
                <div class="text-center">
                   <a href="https://web.facebook.com/leav.chandara"><i class="fab fa-facebook fa-lg" aria-hidden="true"></i></a>&nbsp;
                   <a href="mailto:leav.chandara7997@gmail.com"><i class="far fa-envelope fa-lg" aria-hidden="true"></i></a>
                </div>
             </div>
             <div class="col"></div>
             <div class="col-2">
                <img class="rounded-circle" style="width: 18rem;" src="https://z-p3-scontent.fpnh18-1.fna.fbcdn.net/v/t1.0-9/127278990_1271592736537593_965136852605287300_n.jpg?_nc_cat=108&amp;ccb=2&amp;_nc_sid=09cbfe&amp;_nc_eui2=AeFRHUrAQHgVMUj0_FwQikD_b-7L_MUlAyVv7sv8xSUDJa0fgxogJJkj3foFPhH0a-oHzhOoYsrpWqCBXO6ZXkpS&amp;_nc_ohc=j2hiuXgAXjYAX_nzADE&amp;_nc_ht=z-p3-scontent.fpnh18-1.fna&amp;oh=6c983a3d7b43d690bb531ca51d448a01&amp;oe=5FFAD06B" alt="ly nary">
                <div class="text-center">
                  <h2>Ly Nary</h2>
                </div>
                <div class="text-center">
                   <a href="https://web.facebook.com/profile.php?id=100010606367727"><i class="fab fa-facebook fa-lg" aria-hidden="true"></i></a>&nbsp;
                   <a href="mailto:naryaimeting@gmail.com"><i class="far fa-envelope fa-lg" aria-hidden="true"></i></a>
                </div>
             </div>
             <div class="col"></div>
          </div>
       </div> <br>
       <div class="row">
          <div class="col-4"></div>
          <div class="col-4"><span class="btn btn-primary text-white text-center"><h2>OR</h2></span></div>
          <div class="col-4"></div>
       </div><br><br><br>
         <div class="container">
              <form action="">
                  <div class="form-group">
                          <div>
                              <label class="move-up" for="name"> Full Name </label>
                              <input type="text" class="form-control">
                          </div>
              
                          <div>
                                  <label for="name"> Email  </label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
              
                          <div>
                              <label for="name"> Your Message </label>
                              <textarea name="Message" id="Message" class="form-control"></textarea>
                          </div>
                              <input type="submit" value="submit" class="btn btn-primary">
                  </div>
          </form> 
      </div><br><br><br>

@endsection
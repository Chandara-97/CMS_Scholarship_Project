@extends('layout.bone')

@section('title','ព័ត៌មានអំពីយើង')


@section('style')

@endsection

@section('post')
  <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3"></div>
      <div class="col-lg-3 col-md-3 col-sm-3">
          <img src="image/logo.png"style="width:15rem">
      </div>
      <div class="col-lg-1 col-md-2 col-sm-2"></div>
          <div class="col-lg-3 col-md-3 col-sm-3 font-weight-bold rounded" style="background:#00ffd4de;">
              <h2 class="font-weight-bold" style="color:yellow;">Scholarship for Cambodia</h2>
              <p> ដោយមើលឃើញពីបញ្ហាលំបាករបស់សិស្សជាច្រើនក្នុងការស្វែងរកអាហាររូបករណ៍ទៅសិក្សានៅបរទេសក៏ដូចជាអាហាររូបករណ៍ក្នុងស្រុក ដូច្នេះពូកយើងក៏សម្រេចចិត្តបង្កើតវេបសាយនេះឡើង។ វេបសាយនេះបង្កើតឡើងក្នុងគោលបំណងជួយផ្សព្វផ្សាយព័ត៌មានទាក់ទងនឹងអាហាររូបករណ៍ផ្សេងៗអោយកាន់​តែទូលំទូលាយ។</p>
        </div>
                  
  </div>

<!--meet our team-->
<div class="container">

<div class="row heading">
  <div class="col-md-6 col-md-offset-3">
    <h2 class="text-center bottom-line">ជួបជាមួយក្រុមរបស់យើង</h2>
    <p class="subheading text-center"></p>
  </div>
</div>

<div class="row team-row" style="margin: 0 auto;">

  <div class="col-md-6 col-sm-6 col-lg-6 team-wrap" data-aos="animate text on scroll">
    <div class="team-member text-center">
      <div class="team-img" data-aos="fade-right">
        <img src="image/Dara.jpg" alt="" style="width: 16rem;" class="rounded-circle border-warning">
        <div class="overlay">
          <div class="team-details text-center">
            <p>
              និស្សិតជំនាញវិទ្យាសាស្រ្តកុំព្យូទ័រ <br>
              វិទ្យាស្ថានជាតិនិបទិច<br>
             
             </p>
          </div>
        </div>
      </div>
      <h6 class="team-title">លាវ ចាន់តារា</h6>

    </div>
  </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 2, // values from 0 to 3000, with step 50ms
        duration: 2000 // values from 0 to 3000, with step 50ms
      });
  </script>
  <!-- end team member -->


  <div class="col-md-6 col-sm-6 col-lg-6 team-wrap" data-aos="animate text on scroll">
    <div class="team-member last text-center">
      <div class="team-img" data-aos="fade-left">
        <img src="image/Nary.jpg" alt="" style="width: 16rem;" class="rounded-circle border-warning">
        <div class="overlay">
          <div class="team-details text-center">
            <p>
              និស្សិតជំនាញវិទ្យាសាស្រ្តកុំព្យូទ័រ <br>
              វិទ្យាស្ថានជាតិនិបទិច<br>
             
             </p>
          </div>
        </div>
      </div>
      <h6 class="team-title">លី ណារី</h6>
  
    </div>
  </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 2, // values from 0 to 3000, with step 50ms
        duration: 1500 // values from 0 to 3000, with step 50ms
      });
  </script>
  <!-- end team member -->
  
</div>
@endsection
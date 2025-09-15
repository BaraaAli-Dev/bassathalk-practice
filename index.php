<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["subscribe"])) {
  header("location: login.php");
  exit();
}
?>

<?php include "header.php" ?>
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg p-2 m-2 rounded fixed-top">
  <div class="container">
    <a class="navbar-brand text-white fw-bold fs-3" href="index.php">
      <i class="fa-solid fa-book fs-1 text-sky"></i>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item d-flex me-3">
          <a class="btn btn-primary text-warning ps-5 pe-5 pt-2 pb-2 fw-bold fs-5" href="login.php" role="button">
            <i class="fa-solid fa-child-reaching"></i><span class="text-black"> Log</span> In
          </a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary ps-5 pe-5 pt-2 pb-2 fw-bold fs-5" href="signup.php" role="button">
            <i class="fa-solid fa-user-plus me-3 text-warning"></i> Sign Up
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<section style="margin: 200px;"></section>
<!-- Start Logo And Logo Info -->
<div class="container my-5">
  <div class="row align-items-center text-center text-md-start">
    <!-- الصورة -->
    <div class="col-12 col-md-4">
      <img src="images/icon.svg" class="img-fluid w-75 mx-auto d-block" alt="Logo">
    </div>
    <!-- الكلام -->
    <div class="col-12 col-md-8">
      <h2 class="fw-bold display-3">
        منصة <span style="color: #38bdf8">بسطتهالك</span>
      </h2>
      <p class="fs-4 text-muted fw-bold text-black">
        منصة متكاملة بها كل ما يحتاجه الطالب ليتفوق
      </p>
    </div>
  </div>
</div>
<!-- End Logo And Logo Info -->
<section style="margin: 200px;"></section>
<!-- Start Teachers -->
<div class="container text-center my-5">
  <h2 class="mb-5 fw-bold display-4">
    اختر <span style="color: #38bdf8">المدرسين</span>
  </h2>
  <div class="row g-4">
    <div class="col-12 col-md-6 col-lg-3">
      <div class="bg-info p-4 rounded-top h-100">
        <img src="images/salah.jpg" class="img-fluid rounded mb-3" alt="محمد صلاح">
        <h5 class="fw-bold fs-3 text-white">محمد صلاح</h5>
        <p class="fw-bold m-0">أستاذ اللغة العربية</p>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3">
      <div class="bg-info p-4 rounded-top h-100">
        <img src="images/mo_aymam.png" class="img-fluid rounded mb-3" alt="محمد أيمن">
        <h5 class="fw-bold fs-3 text-white">محمد أيمن</h5>
        <p class="fw-bold m-0">أستاذ الأحياء والعلوم المتكاملة</p>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3">
      <div class="bg-info p-4 rounded-top h-100">
        <img src="images/Abdelhamidjpg.jpg" class="img-fluid rounded mb-3" alt="Abdelhamid">
        <h5 class="fw-bold fs-3 text-white">Abdelhamid</h5>
        <p class="fw-bold m-0">English Teacher</p>
      </div>
    </div>
  </div>
</div>
<!-- End Teachers -->
<section style="margin: 200px;"></section>
<!-- Start Courses -->
<div class="container text-center">
  <h2 class=" mb-5 fw-bold display-4">
    كورساتنا <span style="color: #38bdf8">المقترحه</span>
  </h2>
  <p class="fw-bold fs-6">ريحنا دماغك وجمعنا لك كورسات على مزاجك، مختارة بحب وعناية كأننا بنعمل شوبينج لأحسن شوية كورسات تساعدك وتنميك! 🌟
  </p>
  <div class="row g-4">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="group bg-info p-3 rounded text-center">
        <div>
          <img src="images/ahmedCours.jpg" class="img-fluid rounded">
        </div>
        <div>
          <h4 class="text-white my-3">باقة ال3 شهور</h4>
          <hr>
          <p class="text-white my-2">هذا الكورس شامل الفصل الأول + الفصل الثاني</p>
          <form action="" method="post">
            <button type="submit" name="subscribe" class="btn btn-outline-success mt-4">!أشترك الآن</button>
          </form>
        </div>
      </div>

    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="group bg-info p-3 rounded text-center">
        <div>
          <img src="images/ahmedCours.jpg" class="img-fluid rounded">
        </div>
        <div>
          <h4 class="text-white my-3">باقة الترم الأول</h4>
          <hr>
          <p class="text-white my-2">هذا الكورس شامل أول 4 فصول (5 شهور)</p>
          <form action="" method="post">
            <button type="submit" name="subscribe" class="btn btn-outline-success mt-4">!أشترك الآن</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="group bg-info p-3 rounded text-center">
        <div>
          <img src="images/mosalahCoursjpg.jpg" class="img-fluid rounded">
        </div>
        <div>
          <h4 class="text-white my-3">كتالوج بسطتهالك ( محمد صلاح - لغة عربية)</h4>
          <hr>
          <p class="text-white my-2">"الكورس ده هيساعدك تستخدم المنصة بسهولة ويوضحلك ازاي تشغل الفديوهات و تسلم الواجب و تدخل على منتدى الطلبة ."</p>
          <form action="" method="post">
            <button type="submit" name="subscribe" class="btn btn-outline-success mt-4">!أشترك الآن</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- End Courses -->


<?php include "footer.php" ?>
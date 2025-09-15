<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["phoneSignup"]) && isset($_POST["emailSignup"]) && isset($_POST["passSignup"])) {
  $firstName = $_POST["firstNameSignup"];
  $secondName = $_POST["secondNameSignup"];
  $phone = $_POST["phoneSignup"];
  $email = $_POST["emailSignup"];
  $password = $_POST["passSignup"];

  $name = $firstName . " " . $secondName;

  $usersData = file_get_contents("users.json");
  $users = json_decode($usersData, true);
  if (!$users) $users = [];

  $exists = false;
  foreach ($users as $user) {
    if ($user["phone"] == $phone) {
      $exists = true;
      break;
    }
  }

  if ($exists) {
    $message = "<p style='color: red;'>لديك حساب بالفعل، <a href='login.php'>سجل دخول من هنا</a></p>";
  } else {
    $users[] = [
      "name" => $name,
      "phone" => $phone,
      "email" => $email,
      "password" => $password,
    ];

    file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    $message = "<p style='color: green;'>تم إنشاء الحساب بنجاح 🎉 <a href='login.php'>سجل دخول</a></p>";
  }
}
?>


<?php include "header.php" ?>
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg p-2 m-2 rounded">
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
<!-- Start Body -->
<div class="container my-5">
  <div class="row align-items-center">
    <!-- First Column -->
    <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
      <i class="fa-solid fa-user-plus text-warning" style="font-size: 250px;"></i>
    </div>

    <!-- Second Column -->
    <div class="col-12 col-md-6">
      <h2 class="text-warning mb-3 fw-bold">طلب إنشاء حساب</h2>
      <p class="text-secondary">
        ادخل بياناتك بشكل صحيح وسيتم التواصل معاك خلال ساعات قليلة لتفعيل الحساب !
      </p>
      <p>
        يوجد لديك حساب بالفعل ؟
        <a class="text-decoration-none fw-bold text-primary" href="login.php">ادخل إلى حسابك الآن</a>
      </p>

      <form action="" method="post" class="mt-4">
        <div class="row">
          <div class="col-md-6 mb-3">
            <input name="firstNameSignup" type="text" class="form-control" placeholder="الإسم الأول">
          </div>
          <div class="col-md-6 mb-3">
            <input name="secondNameSignup" type="text" class="form-control" placeholder="الإسم الثاني">
          </div>
        </div>

        <div class="mb-3">
          <input name="phoneSignup" type="number" class="form-control" placeholder="رقم الموبايل">
        </div>

        <div class="mb-3">
          <input name="emailSignup" type="email" class="form-control" placeholder="البريد الإلكتروني">
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <input name="passSignup" type="password" class="form-control" placeholder="كلمة السر">
          </div>
          <div class="col-md-6 mb-3">
            <input name="confirmPassSignup" type="password" class="form-control" placeholder="تأكيد كلمة السر">
          </div>
        </div>

        <button name="createSignup" type="submit" class="btn btn-primary w-100 fw-bold">
          <i class="fa-solid fa-user-plus me-2"></i> إنشاء حساب جديد
        </button>
      </form>
    </div>
  </div>
</div>
<!-- End Body -->

<?php include "footer.php" ?>
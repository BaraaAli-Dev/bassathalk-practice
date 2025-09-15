<?php
$phone = "";
$password = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginPhone"]) && isset($_POST["loginPassword"])) {
  $phone = $_POST["loginPhone"];
  $password = $_POST["loginPassword"];

  $usersData = file_get_contents("users.json");
  $users = json_decode($usersData, true);

  $found = false;
  foreach ($users as $user) {
    if ($user["phone"] === $phone && $user["password"] === $password) {
      $found = true;
      break;
    }
  }

  if ($found) {
    $message = "<p style='color: green;'>تم تسجيل الدخول بنجاح ✅</p>";
  } else {
    $message = "<p style='color: red;'>انت مش عندك حساب، <a href='signup.php'>انشئ حساب جديد</a></p>";
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
    <div class="col-12 col-md-6 text-center">
      <i class="fa-solid fa-fingerprint my-5 text-warning" style="font-size: 300px;"></i>
    </div>

    <!-- Second Column -->
    <div class="col-12 col-md-6">
      <h2 class="fw-bold mb-4 text-warning">:تسجيل الدخول </h2>
      <p class="text-secondary my-5">ادخل علي حسابك بإدخال رقم الهاتف و كلمة المرور المسجل بهم من قبل</p>
      <p>لا يوجد لديك حساب ؟ <a class="link-offset-2 link-underline link-underline-opacity-0" href="signup.php">أنشئ حسابك الآن!</a></p>
      <form action="" method="post">
        <div class="mb-3">
          <label class="form-label">رقم الهاتف</label>
          <input type="text" name="loginPhone" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">كلمة السر</label>
          <input type="password" name="loginPassword" class="form-control">
        </div>
        <button type="submit" class="btn btn-warning text-white px-4 my-5">تسجيل الدخول</button>
        <?php if (!empty($message)) echo $message; ?>
      </form>
    </div>
  </div>
</div>
<!-- End Body -->

<?php include "footer.php" ?>
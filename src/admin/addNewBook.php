<?php
include("../auth/auth_admin.php");
include("../database/database.php");
// require_once("../utils/utils.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $ProductName = $_POST["ProductName"];
  $Price = $_POST["Price"];
  $Description = $_POST["Description"];
  $PublishingCompany = $_POST["PublishingCompany"];

  $IssuingCompanyName = $_POST['IssuingCompanyName'];

  $PageCounts = $_POST["PageCounts"];
  $CoverType = $_POST["CoverType"];
  $OldPrice = $_POST["OldPrice"];

  $BookTypeName  = $_POST["BookTypeName"];
  $NameShop = $_POST["NameShop"];

  insertProductData($mysqli, $ProductName, $Price, $Description, $PublishingCompany, $IssuingCompanyName, $PageCounts, $CoverType, $OldPrice, $BookTypeName, $NameShop);
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Nhom_14_Logo.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/tippyCustom.css" />

  <title>Admin Page</title>
</head>

<body>
  <div id="wapper" class="flex max-w-[100vw]">
    <!-- LEFT -->
    <div class="sidebar min-h-screen basis-[250px] w-[234px] px-[8px] bg-[#343a40]">
      <div class="user-panel flex pb-4 my-4 gap-[10px]">
        <div class="image w-[40px] rounded-full flex items-center justify-center overflow-hidden">
          <a href="admin.php"><img class="block w-full" src="../assets/img/Nhom_14_Logo.png" alt="Nhóm 14" /></a>

        </div>
        <div class="p-[5px] pb-0 pt-[8px]">
          <span class="text-[#c2c7d0] hover:text-[#fff]">
            <a href="admin.php">ADMIN PAGE</a>
          </span>
        </div>
      </div>
      <!-- Input Search -->
      <div class="search max-w-full flex flex-nowrap">
        <input class="block max-w-[182px] text-white outline-none border border-gray-400 border-solid border-r-0 caret-white rounded-l-lg px-[12px] py-[5px] bg-[#3f474e]" type="text" placeholder="Search" />
        <div class="basis-[40px] border border-gray-400 border-solid rounded-r-lg flex items-center justify-center overflow-hidden">
          <button class="flex px-[10px] py-[9px] items-center justify-center overflow-hidden cursor-pointer" type="button">
            <i class="block w-[16px] h-[16px] text-white fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
      </div>
      <!-- Bottom slidebar -->
      <nav class="mt-2 flex flex-col justify-between">
        <!-- List -->
        <!-- Dashboard -->
        <ul class="feature flex flex-col">
          <li class="nav-item flex w-full">
            <a href="./admin.php" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-house" aria-hidden="true"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>

          <!-- Quản lý người dùng -->
          <li class="nav-item flex w-full">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <!-- <i class="nav-icon fas fa-th" aria-hidden="true"></i> -->
              <i class="fa-solid fa-users-gear"></i>
              <p>
                Quản lý người dùng
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>
          <!-- Quản lý danh mục -->
          <li class="nav-item flex w-full">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-th" aria-hidden="true"></i>
              <p>
                Quản lý danh mục
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>
          <!-- 3. Quản lý sản phẩm -->
          <li class="nav-item flex w-full  flex-col">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-copy" aria-hidden="true"></i>
              <p>
                Quản lý sản phẩm
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>

            <!-- UL CHỨC NĂNG QUẢN LÝ -->
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                <a href="./bookList.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tất cả sản phẩm</p>
                  <!-- GET ALL PRODUCTS -->
                </a>
              </li>
              <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                <a href="./addNewBook.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sản phẩm</p>
                  <!-- POST NEW PRODUCT -->
                </a>
              </li>
              <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                <a href="#" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                <a href="#" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Quản lý đơn hàng -->
          <li class="nav-item flex w-full">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-edit" aria-hidden="true"></i>
              <p>
                Quản lý đơn hàng
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>
        </ul>
        <ul class="logout">
          <li class="nav-item flex w-full mb-[5px]">
            <a href="../pages/logout.php" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
                Đăng xuất
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- RIGHT -->
    <div class="basis-auto w-[100%] bg-[#f4f6f9]">
      <nav class="p-4 flex items-center justify-between bg-white">
        <ul>
          <li>
            <i class="fa-solid fa-bars"></i>
          </li>
        </ul>
        <ul class="flex gap-3">
          <li>
            <span>Xin chào, <?php echo $_SESSION["UserName"] ?></span>
          </li>
          <li><i class="fa-regular fa-bell"></i></li>
        </ul>
      </nav>

      <section class="p-8 content-hd h-[34px] flex gap-2 my-[5px]">
        <h1 class="font-bold text-2xl basis-1/2 flex justify-start items-center">
          Thêm sản phẩm
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#"> Thêm sản phẩm</a></span>
      </section>

      <!-- SECTION CONTENT 1 -->
      <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
        <div class=" w-full p-5 bg-white flex justify-between gap-[20px] items-start">
          <!-- FORM ADD NEW PRODUCTS -->
          <form method="POST" class="w-full flex flex-col justify-between" autocomplete="off">
            <label for="ProductName">Tên sản phẩm:</label>
            <input class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" placeholder="Nhập tên sản phẩm" type="text" id="ProductName" name="ProductName" required><br><br>

            <label for="Price">Giá:</label>
            <input placeholder="Nhập giá bán" class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" type="text" id="Price" name="Price" required><br><br>

            <label for="Description">Mô tả:</label>
            <textarea class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" id="Description" name="Description" rows="4" cols="50" placeholder="Nhập mô tả sản phẩm" required></textarea><br><br>

            <label for="PublishingCompany">Tên Nhà xuất bản:</label>
            <input class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" type="text" id="PublishingCompany" name="PublishingCompany" placeholder="Nhập tên nhà xuất bản" required><br><br>

            <label for="IssuingCompanyName">Tên Công ty phát hành:</label>
            <input class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" type="text" id="IssuingCompanyName" name="IssuingCompanyName" placeholder="Nhập tên Công ty phát hành" required><br><br>

            <label for="PageCounts">Số trang:</label>
            <input class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" type="text" id="PageCounts" name="PageCounts" placeholder="Nhập số trang" required><br><br>

            <label for="CoverType">Loại bìa:</label>
            <select class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" id="CoverType" name="CoverType" required>
              <option value="Bìa mềm">Bìa mềm</option>
              <option value="Bìa cứng">Bìa cứng</option>
            </select><br><br>

            <label for="OldPrice">Giá cũ:</label>
            <input placeholder="Nhập giá gốc" class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" type="text" id="OldPrice" name="OldPrice" required><br><br>

            <label for="BookTypeName">Loại sách:</label>
            <input class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" type="text" id="BookTypeName" name="BookTypeName" placeholder="Nhập loại sách" required><br><br>

            <label for="NameShop">Tên Shop:</label>
            <input class="outline-[#bcbcbc] px-2 py-1 border border-slate-600" type="text" id="NameShop" name="NameShop" placeholder="Nhập loại sách" required><br><br>

            <button class="border px-3 py-[6px] hover:bg-[#343a40] hover:text-[#fff]" type="submit">Thêm sản phẩm</button>
          </form>
          <!-- FORM ADD NEW PRODUCTS -->

        </div>
    </div>
    </section>
    <!-- END S1 -->
  </div>
  </div>

  <?php
  include '../includes/footer.php';
  ?>
</body>

</html>
<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: student-management.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidatra</title>
    <!-- <link rel="stylesheet" href="/dist/output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative flex">
    <!-- Sidebar -->
    <nav class="fixed pt-[89px] ml-10 pr-[56px] border-r-4 border-[#EAEDF6] w-auto h-full regular">
        <h1 class="text-5xl mb-24">Vidatra.</h1>
        <h2 class="text-2xl pb-16">Admin</h2>
        <div class="ml-5 flex flex-col gap-y-16 text-[#8E9BB1] text-xl">
            <a class="hover:text-black" href="index.php">Dashboard</a>
            <a class="hover:text-black" href="student-management.php">Student <br> Management</a>
            <a class="hover:text-black" href="parent-creational.php">Parent <br> Creation</a>
            <a class="hover:text-black" href="">Epayslip <br> Generation</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="pt-[94px] ml-[18rem]">

        <!-- search bar -->
        <div class="flex">
            <div class="gap-x-8 flex items-center">
                <div>
                    <button>
                        <img class="w-3" src="images/arrow-left.png" alt="">
                    </button>
                </div>
                <div>
                    <button>
                        <img class="w-3" src="images/arrow-right.png" alt="">
                    </button>
                </div>
            </div>
            <div class="pl-11 flex items-center">
                <input class="pl-16 border-2 border-[#8E9BB1] bg-white h-14 w-[30rem] rounded-2xl text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search..">
                <button type="submit" class="absolute pl-4">
                    <img class="w-5" src="images/search.png" alt="">
                </button>
            </div>
            <div class="flex items-center pl-96">
                <div>
                    <img class="w-12" src="images/profile.png" alt="">
                </div>
                <div class="pl-4 flex flex-col">
                    <p class="text-base">Aji Rindra F.</p>
                    <p class="text-xs text-[#8E9BB1]">Admin</p>
                </div>
            </div>
        </div>


        <!-- Student Management -->
        <div class="pt-12">
            <div>
                <h1 class="text-5xl title-card tracking-wide">Edit Student</h1>
            </div>
        </div>

        <!-- Add Student Form Card -->
        <div>
            <div class="border-4 border-[#8E9BB1] rounded-xl mt-12 w-[64rem]"> 
                <form class="text-xl mt-8 ml-11" action="edit-student-process.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                    <div class="w-auto flex flex-row items-center">
                        <label for="name">Name :</label><br>
                        <input class="ml-2 border-b-2 border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none w-[51.75rem]" type="text" id="name" name="name" value="<?php echo $siswa['name'] ?>"><br>
                    </div>
                    <div class="mt-5 flex space-x-52">
                        <div>
                            <label for="gender">Gender :</label>
                            <?php $gender = $siswa['gender']; ?>
                            <select class="border-b-2 border-[#C4C4C4] focus:outline-none text-sm text-[#8E9BB1]" name="gender" id="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div>
                            <label for="address">Address :</label>
                            <input class="ml-2 border-b-2 w-[28.5rem] border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none" type="text"  name="address" value="<?php echo $siswa['address'] ?>"><br>
                        </div>
                    </div>
                    <div class="mt-5 flex">
                        <div>
                            <label for="date">Date of Birth :</label>
                            <input class="ml-2 border-b-2 border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none" type="date" name="date_birth" value="<?php echo $siswa['date_birth'] ?>"><br>
                        </div>
                        <div class="ml-16">
                            <label class="pl-2" for="nis">NIS :</label>
                            <input class="ml-2 w-64 border-b-2 border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none" type="text" name="nis" value="<?php echo $siswa['nis'] ?>"><br>
                        </div>
                        <div class="pt-4 ml-32">
                            <div class="bg-[#8E9BB1] rounded-2xl">
                                <input class=" text-lg w-28 text-white" type="submit"  name="save" value="Save">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        

    </div>
</body>

</html>
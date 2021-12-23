<?php include("config.php"); ?>

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


        <!-- Parent Creation -->
        <div class="pt-12">
            <div>
                <h1 class="text-5xl title-card tracking-wide">Parent Creation</h1>
            </div>
        </div>

        <!-- Parent Creation Form Card -->
        <div>
            <div class="border-4 border-[#8E9BB1] rounded-xl mt-12 w-[64rem]"> 
                <form class="text-xl mt-8 ml-11" action="">
                    <div class="w-auto flex flex-row items-center">
                        <label for="name">Name :</label><br>
                        <input class="ml-2 border-b-2 border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none w-[51.75rem]" type="text" id="name" name="name"><br>
                    </div>
                    <div class="mt-5 w-auto flex flex-row items-center">
                        <label for="name">Parent of :</label><br>
                        <input class="ml-2 border-b-2 border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none w-[50.2rem]" type="text" id="name" name="name"><br>
                    </div>
                    <div class="mt-5 flex space-x-52">
                        <div>
                            <label for="gender">Gender :</label>
                            <select class="border-b-2 border-[#C4C4C4] focus:outline-none text-sm text-[#8E9BB1]" name="gender" id="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div>
                            <label for="address">Address :</label>
                            <input class="ml-2 border-b-2 w-[28.3rem] border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none" type="text" id="address" name="address"><br>
                        </div>
                    </div>
                    <div class="mt-5 flex gap-x-[32rem]">
                        <div>
                            <label for="date">Date of Birth :</label>
                            <input class="ml-2 border-b-2 border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none" type="date" id="date" name="date"><br>
                        </div>
                        <div class="pt-4">
                            <div class="bg-[#8E9BB1] rounded-2xl">
                                <input class=" text-lg w-28 text-white" type="submit" value="Add">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Parent Table -->
        <div class="pb-24">
            <div class="border-4 border-[#8E9BB1] rounded-xl mt-12 w-[64rem]">
                <table class="w-full text-sm table-fixed">
                    <thead class="border-b-2 border-[#8E9BB1]">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Parent of</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Date of Birth</th>
                            <th class="text-left">Address</th>
                        </tr>
                    </thead>
                   <div class="gap-y-10">
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-left">Bambang</td>
                            <td class="text-left">Aji Rindra Fakhrezi Putra Faisal</td>
                            <td class="text-center">M</td>
                            <td class="text-center">10/01/2001</td>
                            <td class="text-left">Bontang, Kalimantan Timur</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-left">Joko</td>
                            <td class="text-left">Bayu Adjie Sidharta</td>
                            <td class="text-center">M</td>
                            <td class="text-center">10/01/2001</td>
                            <td class="text-left">Jakarta Timur, Jl. Soeharto</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="text-left">Budi</td>
                            <td class="text-left">Melanchton B</td>
                            <td class="text-center">M</td>
                            <td class="text-center">10/01/2001</td>
                            <td class="text-left">Medan, Sumatera Utara</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="text-left">Asep</td>
                            <td class="text-left">Drigo A. Sihombing</td>
                            <td class="text-center">M</td>
                            <td class="text-center">10/01/2001</td>
                            <td class="text-left">Bekasi, Jawa Barat</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td class="text-left">Andre</td>
                            <td class="text-left">Christian Bennett R.</td>
                            <td class="text-center">M</td>
                            <td class="text-center">10/01/2001</td>
                            <td class="text-left">Jakarta Selatan</td>
                        </tr>
                    </tbody>
                   </div>
                </table>
            </div>
        </div>

    </div>
</body>

</html>
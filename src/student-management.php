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

        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Registration Successful!";
                    } else {
                        echo "Registration Failed!";
                    }
                ?>
            </p>
        <?php endif; ?>

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
                <h1 class="text-5xl title-card tracking-wide">Student Management</h1>
            </div>
        </div>

        <!-- Add Student Form Card -->
        <div>
            <div class="border-4 border-[#8E9BB1] rounded-xl mt-12 w-[64rem]"> 
                <form class="text-xl mt-8 ml-11" action="add-student.php" method="POST">
                    
                    

                    <div class="w-auto flex flex-row items-center">
                        <label for="name">Name :</label><br>
                        <input class="ml-2 border-b-2 border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none w-[51.75rem]" type="text" name="name"><br>
                    </div>
                    <div class="mt-5 flex space-x-52">
                        <div>
                            <label for="gender">Gender :</label>
                            <select class="border-b-2 border-[#C4C4C4] focus:outline-none text-sm text-[#8E9BB1]" name="gender" >
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div>
                            <label for="address">Address :</label>
                            <input class="ml-2 border-b-2 w-[28.5rem] border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none" type="text" name="address"><br>
                        </div>
                    </div>
                    <div class="mt-5 flex">
                        <div>
                            <label for="date_birth">Date of Birth :</label>
                            <input class="ml-2 border-b-2 border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none" type="date" name="date_birth"><br>
                        </div>
                        <div class="ml-16">
                            <label class="pl-2" for="nis">NIS :</label>
                            <input class="ml-2 w-64 border-b-2 border-[#C4C4C4] bg-white text-sm text-[#8E9BB1] focus:outline-none" type="text" name="nis"><br>
                        </div>
                        <div class="pt-4 ml-32">
                            <div class="bg-[#8E9BB1] rounded-2xl">
                                <input class=" text-lg w-28 text-white" name="add" type="submit" value="Add">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Student Table -->
        <div class="pb-24">
            <div class="border-4 border-[#8E9BB1] rounded-xl mt-12 w-[64rem]">
                <table class="w-full text-sm table-fixed">
                    <thead class="border-b-2 border-[#8E9BB1]">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-left">NIS</th>
                            <th class="text-left">Name</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Date of Birth</th>
                            <th class="text-left">Address</th>
                            <th>  </th>
                        </tr>
                    </thead>
                   <div class="gap-y-10">
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM siswa";
                    $query = mysqli_query($db, $sql);

                    while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    
                    echo '<td class="text-center">'.$siswa['id'].'</td>';
                    echo '<td class="text-left">'.$siswa['nis'].'</td>';
                    echo '<td class="text-left">'.$siswa['name'].'</td>';
                    echo '<td class="text-center">'.$siswa['gender'].'</td>';
                    echo '<td class="text-center">'.$siswa['date_birth'].'</td>';
                    echo '<td class="text-left">'.$siswa['address'].'</td>';
                     
                    echo "<td>";
                    echo '<div class="text-center space-x-4 flex items-center h-8">';
                    echo '<div class="text-center text-white">';
                    echo '<button class="items-center bg-[#C4C4C4] w-12 h-8 rounded-xl">';
                    echo "<a href='delete.php?id=".$siswa['id']."'>Delete</a>";
                    echo '</button>';
                    echo '</div>';
                    echo '<div class="text-center text-white">';
                    echo '<button class="items-center bg-[#8E9BB1] w-12 h-8 rounded-xl">';
                    echo "<a href='edit-student.php?id=".$siswa['id']."'>Edit</a>";
                    echo '</button>';
                    echo '</div>';
                    echo "</td>";

                    echo "</tr>";
                    }
                    ?>

                    </tbody>
                   </div>
                </table>
            </div>
        </div>

    </div>
</body>

</html>
<?php
$title = "Add Student";
$js = "../Script/addStuValidation.js";
include('header.php');
include('studentMenu.php');
?>

    <main class="w-3/4 flex justify-center items-center min-h-screen bg-zinc-100 p-8">
        <form id="inform" action="../Controller/regCheckStudent.php" onsubmit="return validation()" method="post" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
                <legend class="text-2xl font-bold mb-6">Registration</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label for="name" class="mb-1">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Full Name" class="border border-zinc-300 rounded p-2" required />
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="mb-1">Email</label>
                        <input type="email" id="email" name="email" class="border border-zinc-300 rounded p-2" required />
                    </div>
                    <div class="flex flex-col">
                        <label for="mobile" class="mb-1">Mobile No</label>
                        <input type="text" id="mobile" name="mobile" class="border border-zinc-300 rounded p-2" required />
                    </div>
                    <div class="flex flex-col">
                        <label for="id" class="mb-1">Id</label>
                        <input type="text" id="id" name="id" class="border border-zinc-300 rounded p-2" required />
                    </div>
                    <div class="flex flex-col">
                        <label for="password" class="mb-1">Password</label>
                        <input type="password" id="password" name="password" class="border border-zinc-300 rounded p-2" required />
                    </div>
                    <div class="flex flex-col">
                        <label for="repass" class="mb-1">Confirm Password</label>
                        <input type="password" id="repass" name="repass" class="border border-zinc-300 rounded p-2" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1">Gender</label>
                        <div class="flex items-center space-x-4">
                            <label><input type="radio" id="gender-male" name="gender" value="male" class="mr-1" /> Male</label>
                            <label><input type="radio" id="gender-female" name="gender" value="female" class="mr-1" /> Female</label>
                            <label><input type="radio" id="gender-other" name="gender" value="other" class="mr-1" /> Other</label>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label for="dob" class="mb-1">Date of Birth</label>
                        <input type="date" id="dob" name="dob" class="border border-zinc-300 rounded p-2" required />
                    </div>
                    <div class="flex flex-col md:col-span-2">
                        <label for="p_address" class="mb-1">Present Address</label>
                        <input type="text" id="p_address" name="p_address" class="border border-zinc-300 rounded p-2" />
                    </div>
                    <div class="flex flex-col">
                        <label for="classE" class="mb-1">Class</label>
                        <select id="classE" name="class" class="border border-zinc-300 rounded p-2">
                            <option value="Six">Six</option>
                            <option value="Seven">Seven</option>
                            <option value="Eight">Eight</option>
                            <option value="Nine">Nine</option>
                            <option value="Ten">Ten</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="section" class="mb-1">Section</label>
                        <select id="section" name="section" class="border border-zinc-300 rounded p-2">
                            <option value="A">A</option>
                            <option value="B">B</option>
                        </select>
                    </div>
                    <div class="flex flex-col md:col-span-2">
                        <label for="roll" class="mb-1">Roll No</label>
                        <input type="text" id="roll" name="roll" class="border border-zinc-300 rounded p-2" />
                    </div>
                </div>
                <hr class="my-4" />
                <div class="flex justify-center space-x-4">
                    <input type="submit" name="submit" value="Submit" class="bg-primary text-primary-foreground hover:bg-primary/80 px-4 py-2 rounded" />
                    <input type="reset" name="reset" value="Reset" class="bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2 rounded" />
                </div>
        </form>
    </main>
</body>
</html>


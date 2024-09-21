<?php
	$title = "add Teacher";
	$js = "../Script/addValidationTeacher.js";
	// $style = "../Style/regester.css";
	include('header.php');
  include('teacherMenu.php');
?>
  <div class="w-3/4 p-8 bg-muted">
    <div class="bg-card p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold mb-6">REGISTRATION</h2>
      <form class="space-y-4"id="myform" action="../Controller/regCheckTeacher.php" method="post" onsubmit="return validation()">
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label for="name" class="block text-card-foreground">Name</label>
            <input type="text" id="name" class="w-full p-2 border border-input rounded" placeholder="Enter Full Name">
          </div>
          <div>
            <label for="email" class="block text-card-foreground">Email</label>
            <input type="email" id="email" class="w-full p-2 border border-input rounded" placeholder="Email">
          </div>
          <div>
            <label for="mobile" class="block text-card-foreground">Mobile No</label>
            <input type="text" id="mobile" class="w-full p-2 border border-input rounded" placeholder="Mobile No">
          </div>
          <div>
            <label for="id" class="block text-card-foreground">Id</label>
            <input type="text" id="id" class="w-full p-2 border border-input rounded" placeholder="Id">
          </div>
          <div>
            <label for="password" class="block text-card-foreground">Password</label>
            <input type="password" id="password" class="w-full p-2 border border-input rounded" placeholder="Password">
          </div>
          <div>
            <label for="confirm-password" class="block text-card-foreground">Confirm Password</label>
            <input type="password" id="confirm-password" class="w-full p-2 border border-input rounded" placeholder="Confirm Password">
          </div>
          <div>
            <label class="block text-card-foreground">Gender</label>
            <div class="flex items-center space-x-4">
              <label class="flex items-center">
                <input type="radio" name="gender" value="male" class="mr-2"> Male
              </label>
              <label class="flex items-center">
                <input type="radio" name="gender" value="female" class="mr-2"> Female
              </label>
              <label class="flex items-center">
                <input type="radio" name="gender" value="other" class="mr-2"> Other
              </label>
            </div>
          </div>
          <div>
            <label for="dob" class="block text-card-foreground">Date of Birth</label>
            <input type="date" id="dob" class="w-full p-2 border border-input rounded">
          </div>
          <div>
            <label for="subject" class="block text-card-foreground">Subject</label>
            <select id="subject" class="w-full p-2 border border-input rounded">
              <option>Bangla</option>
              
            </select>
          </div>
        </div>
        <div class="flex space-x-4">
          <button type="submit" class="bg-primary text-primary-foreground hover:bg-primary/80 py-2 px-4 rounded">Submit</button>
          <button type="reset" class="bg-secondary text-secondary-foreground hover:bg-secondary/80 py-2 px-4 rounded">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>
  </body>
</html>

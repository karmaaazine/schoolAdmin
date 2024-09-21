<?php
	$title= "Update teacher";
	$js = "../Script/editValidation.js";
	include('header.php');
  include('teacherMenu.php');
	include_once('../model/teacherModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>

<div class="w-3/4 p-8 bg-muted">
  <div class="bg-card p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Update Information</h2>
    <form class="space-y-4" id="inform" action="../controller/updateCheckTeacher.php" onsubmit="return validation()" method="post">

      <div class="grid grid-cols-2 gap-4">
        <div>
          <label for="id" class="block text-card-foreground">ID:</label>
          <input type="text" id="id" name="id" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['id']; ?>" readonly />
        </div>
        <div>
          <label for="name" class="block text-card-foreground">Name:</label>
          <input type="text" id="name" name="name" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['name']; ?>" />
        </div>
        <div>
          <label for="email" class="block text-card-foreground">Email:</label>
          <input type="email" id="email" name="email" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['email']; ?>" />
        </div>
        <div>
          <label for="mobile" class="block text-card-foreground">Mobile:</label>
          <input type="text" id="mobile" name="mobile" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['mobile']; ?>" />
        </div>
        <div>
          <label for="gender" class="block text-card-foreground">Gender:</label>
          <div class="flex items-center space-x-4">
            <label class="flex items-center"> <input type="radio" name="gender" <?php  if($updatemyinfo['gender']=="male"){?> checked="true" <?php } ?> value="male" class="mr-2" checked /> Male </label>
            <label class="flex items-center"> <input type="radio" name="gender" <?php  if($updatemyinfo['gender']=="female"){?> checked="true" <?php } ?> value="female" class="mr-2" /> Female </label>
          </div>
        </div>
        <div>
          <label for="dob" class="block text-card-foreground">Date Of Birth :</label>
          <input type="text" id="dob" name="dob" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['dob']; ?>" />
        </div>
        <div>
          <label for="classE" class="block text-card-foreground">Subject :</label>
          <select id="subject" name="subject" class="w-full p-2 border border-input rounded">
          <option <?php  if($updatemyinfo['subject']=="Bangla"){?> selected="true" <?php } ?> value="Bangla">Bangla</option>
														<option <?php  if($updatemyinfo['subject']=="English"){?> selected="true" <?php } ?> value="English">English</option>
														<option <?php  if($updatemyinfo['subject']=="Math"){?> selected="true" <?php } ?> value="Math">Math</option>
														<option <?php  if($updatemyinfo['subject']=="Bangladesh and global studies"){?> selected="true" <?php } ?> value="Bangladesh and global studies">Bangladesh and global studies</option>
														<option <?php  if($updatemyinfo['subject']=="Religion"){?> selected="true" <?php } ?> value="Religion">Religion</option>
														<option <?php  if($updatemyinfo['subject']=="Physical education and health"){?> selected="true" <?php } ?> value="Physical education and health">Physical education and health</option>
          </select>
        </div>
      <div class="flex space-x-4">
        <input type="submit" name="update" class="bg-primary text-primary-foreground hover:bg-primary/80 py-2 px-4 rounded" value="Submit" />
      </div>
    </form>
  </div>
</div>


 <?php include('footer.php'); ?>

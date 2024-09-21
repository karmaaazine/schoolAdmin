<?php
	$title= "Update Student";
	$js = "../Script/editStudValidation.js";
	include('header.php');
  include('studentMenu.php');
	include_once('../model/studentModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>

<div class="w-3/4 p-8 bg-muted">
  <div class="bg-card p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Update Information</h2>
    <form class="space-y-4" id="inform" action="../controller/updateCheckStudent.php" onsubmit="return validation()" method="post">
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
          <label for="p_address" class="block text-card-foreground">Present Address :</label>
          <input type="text" id="p_address" name="p_address" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['p_address']; ?>" />
        </div>
        <div>
          <label for="classE" class="block text-card-foreground">Class :</label>
          <select id="classE" name="class" class="w-full p-2 border border-input rounded">
            <option <?php  if($updatemyinfo['class']=="six"){?> selected="true" <?php } ?> value="Six">Six</option>
            <option <?php  if($updatemyinfo['class']=="Seven"){?> selected="true" <?php } ?> value="Seven" selected>Seven</option>
            <option <?php  if($updatemyinfo['class']=="eight"){?> selected="true" <?php } ?> value="Eight">Eight</option>
            <option <?php  if($updatemyinfo['class']=="nine"){?> selected="true" <?php } ?> value="Nine">Nine</option>
            <option <?php  if($updatemyinfo['class']=="ten"){?> selected="true" <?php } ?> value="Ten">Ten</option>
          </select>
        </div>
        <div>
          <label for="section" class="block text-card-foreground">Section :</label>
          <select id="section" name="section" class="w-full p-2 border border-input rounded">
            <option <?php  if($updatemyinfo['section']=="A"){?> selected="true" <?php } ?> value="A">A</option>
            <option <?php  if($updatemyinfo['section']=="B"){?> selected="true" <?php } ?> value="B" selected>B</option>
          </select>
        </div>
        <div>
          <label for="roll" class="block text-card-foreground">Roll :</label>
          <input type="text" id="roll" name="roll" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['roll']; ?>" />
        </div>
      </div>
      <div class="flex space-x-4">
        <input type="submit" name="update" class="bg-primary text-primary-foreground hover:bg-primary/80 py-2 px-4 rounded" value="Submit" />
      </div>
    </form>
  </div>
</div>
<?php include('footer.php'); ?>
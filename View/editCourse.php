<?php
	$title= "Update course";
	$js = "../Script/addCourseVal.js";
	include('header.php');
  include('coursMenu.php');
	include_once('../model/courseModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>
<div class="w-3/4 p-8 bg-muted">
    <div class="bg-card p-8 rounded-lg shadow-md">
        <form class="space-y-4" id="inform" action="../controller/updateCheckCourse.php" onsubmit="return validation()"  method="post">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="id" class="block text-card-foreground">ID:</label>
                    <input type="text" id="id" name="id" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['id']; ?>" readonly>
                </div>
                <div>
                    <label for="name" class="block text-card-foreground">Course Name:</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['course_name']; ?>">
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
                        <label for="name" class="block text-card-foreground">Description :</label>
                        <input type="text" id="description" name="description" class="w-full p-2 border border-input rounded" value="<?php echo $updatemyinfo['description']; ?>">
                    </div>
        
            <div class="flex space-x-4">
                <input type="submit" value="Update" name="update" class="bg-primary text-primary-foreground hover:bg-primary/80 py-2 px-4 rounded" value="Submit">
            </div>
        </form>
    </div>
</div>
              
            <?php include('footer.php'); ?>

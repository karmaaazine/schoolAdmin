<?php
	$title= "Add course";
	$js = "../Script/addCourseVal.js";
	include('header.php');
  include('coursMenu.php');
?>
      <div class="w-3/4 p-8 bg-muted">
      <div class="bg-card p-8 rounded-lg shadow-md">
        <form id="inform" class="" action="../Controller/addCheckCourse.php" onsubmit="return validation()" method="post" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
                <legend class="text-2xl font-bold mb-6">Add Course</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label for="name" class="mb-1">Course Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Full Name" class="border border-zinc-300 rounded p-2" required />
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
                        <label for="name" class="mb-1">Description :</label>
                        <input type="text" id="description" name="description" placeholder="Enter Full Name" class="border border-zinc-300 rounded p-2"  />
                    </div>
                    <br>
                <div class="flex justify-center space-x-4">
                    <input type="submit" name="submit" value="Submit" class="bg-primary text-primary-foreground hover:bg-primary/80 px-4 py-2 rounded" />
                    <input type="reset" name="reset" value="Reset" class="bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-2 rounded" />
                </div>
        </form>
      </div>
</div>
</body>
</html>


<?php include('footer.php'); ?>

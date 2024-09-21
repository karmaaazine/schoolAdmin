<?php
	$title= "notice";
	$js = "../Script/noticeVal.js";
	include('header.php');
  include('noticeMenu.php');
?>

<div class="flex-1 p-6">
    <div class="bg-white p-6 rounded-lg shadow-md w-full">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Post Notice</h2>
      </div>
      <form id="inform" action="../Controller/postCheckNotice.php" onsubmit="return validation()" method="post">
  <textarea name="notice" id="notice" class="w-full p-4 border border-zinc-300 rounded-lg mb-4" rows="4" placeholder="Enter notice here"></textarea>
  <button type="submit" name="submit" value="POST" class="bg-black text-white px-4 py-2 rounded-lg">POST</button>
    </form>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>
<?php
	$title= "view notice";
	include('header.php');
	include('noticeMenu.php');
  include_once('../model/noticeModel.php');
  $UsersList = allUserList();
?>

	  <div class="container mx-auto p-4">
				<h2 class="text-2xl font-bold mb-4 text-center">Notices list</h2>
									<br>
									<?php
										echo '<div class="overflow-x-auto">
										<table class="min-w-full border border-zinc-300">
										<thead>
											<tr class="bg-zinc-100">
											<th class="border border-zinc-300 px-4 py-2">Id</th>
											<th class="border border-zinc-300 px-4 py-2">Notice</th>
											<th class="border border-zinc-300 px-4 py-2">Time</th>
										</thead>
										<tbody>';

										for ($i = 0; $i < count($UsersList); $i++) {
											echo '<tr>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['id'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['notice'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['time'] . '</td>
											</tr>';
										}

										echo '</tbody></table></div>';
										?>
								</div>
<?php include('footer.php'); ?>

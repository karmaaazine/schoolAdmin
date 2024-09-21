<?php
	$title= "View Sturdnt";
	$js = "../script/StudentSearch.js";
	include('header.php');
	include('studentMenu.php');
	include_once('../model/studentModel.php');
	$UsersList = allUserList();
?>



<div class="container mx-auto p-4">
				<h2 class="text-2xl font-bold mb-4 text-center">Student list</h2>
				<div class="flex justify-center mb-4">
					<input type="text" placeholder="Search" class="border border-zinc-300 rounded-l px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"onkeyup="ajax()">
					<button class="bg-primary text-primary-foreground rounded-r px-4 py-2 hover:bg-primary/80">Search</button>
				</div>
									<br>
									<?php
										echo '<div class="overflow-x-auto">
										<table class="min-w-full border border-zinc-300">
										<thead>
											<tr class="bg-zinc-100">
											<th class="border border-zinc-300 px-4 py-2">Id</th>
											<th class="border border-zinc-300 px-4 py-2">Name</th>
											<th class="border border-zinc-300 px-4 py-2">Email</th>
											<th class="border border-zinc-300 px-4 py-2">Mobile</th>
											<th class="border border-zinc-300 px-4 py-2">Gender</th>
											<th class="border border-zinc-300 px-4 py-2">DOB</th>
											<th class="border border-zinc-300 px-4 py-2">Present Address</th>
											<th class="border border-zinc-300 px-4 py-2">Class</th>
											<th class="border border-zinc-300 px-4 py-2">Section</th>
											<th class="border border-zinc-300 px-4 py-2">Roll</th>
											<th class="border border-zinc-300 px-4 py-2">Action</th>

											</tr>
										</thead>
										<tbody>';

										for ($i = 0; $i < count($UsersList); $i++) {
											echo '<tr>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['id'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['name'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['email'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['mobile'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['gender'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['dob'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['p_address'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['class'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['section'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">' . $UsersList[$i]['roll'] . '</td>
											<td class="border border-zinc-300 px-4 py-2">
												<a href="editStudent.php?id=' . $UsersList[$i]['id'] . '" class="text-blue-500 hover:underline">Edit</a> | 
												<a href="deleteStudent.php?id=' . $UsersList[$i]['id'] . '" class="text-blue-500 hover:underline">Delete</a>
											</td>
											</tr>';
										}

										echo '</tbody></table></div>';
										?>
								</div>

<?php include('footer.php'); ?>

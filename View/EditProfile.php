<?php
$title = "Edit Profile";
$js = "../Script/EditProfileVal.js";
include('header.php');
include_once('../model/adminModel.php');
$viemyinfo = getUserbyid($_COOKIE['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
  <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
  <script type="text/javascript">
      window.tailwind.config = {
          darkMode: ['class'],
          theme: {
              extend: {
                  colors: {
                      border: 'hsl(var(--border))',
                      input: 'hsl(var(--input))',
                      ring: 'hsl(var(--ring))',
                      background: 'hsl(var(--background))',
                      foreground: 'hsl(var(--foreground))',
                      primary: {
                          DEFAULT: 'hsl(var(--primary))',
                          foreground: 'hsl(var(--primary-foreground))'
                      },
                      secondary: {
                          DEFAULT: 'hsl(var(--secondary))',
                          foreground: 'hsl(var(--secondary-foreground))'
                      },
                      destructive: {
                          DEFAULT: 'hsl(var(--destructive))',
                          foreground: 'hsl(var(--destructive-foreground))'
                      },
                      muted: {
                          DEFAULT: 'hsl(var(--muted))',
                          foreground: 'hsl(var(--muted-foreground))'
                      },
                      accent: {
                          DEFAULT: 'hsl(var(--accent))',
                          foreground: 'hsl(var(--accent-foreground))'
                      },
                      popover: {
                          DEFAULT: 'hsl(var(--popover))',
                          foreground: 'hsl(var(--popover-foreground))'
                      },
                      card: {
                          DEFAULT: 'hsl(var(--card))',
                          foreground: 'hsl(var(--card-foreground))'
                      },
                  },
              }
          }
      }
  </script>
  <style type="text/tailwindcss">
      @layer base {
          :root {
              --background: 0 0% 100%;
              --foreground: 240 10% 3.9%;
              --card: 0 0% 100%;
              --card-foreground: 240 10% 3.9%;
              --popover: 0 0% 100%;
              --popover-foreground: 240 10% 3.9%;
              --primary: 240 5.9% 10%;
              --primary-foreground: 0 0% 98%;
              --secondary: 240 4.8% 95.9%;
              --secondary-foreground: 240 5.9% 10%;
              --muted: 240 4.8% 95.9%;
              --muted-foreground: 240 3.8% 46.1%;
              --accent: 240 4.8% 95.9%;
              --accent-foreground: 240 5.9% 10%;
              --destructive: 0 84.2% 60.2%;
              --destructive-foreground: 0 0% 98%;
              --border: 240 5.9% 90%;
              --input: 240 5.9% 90%;
              --ring: 240 5.9% 10%;
              --radius: 0.5rem;
          }
          .dark {
              --background: 240 10% 3.9%;
              --foreground: 0 0% 98%;
              --card: 240 10% 3.9%;
              --card-foreground: 0 0% 98%;
              --popover: 240 10% 3.9%;
              --popover-foreground: 0 0% 98%;
              --primary: 0 0% 98%;
              --primary-foreground: 240 5.9% 10%;
              --secondary: 240 3.7% 15.9%;
              --secondary-foreground: 0 0% 98%;
              --muted: 240 3.7% 15.9%;
              --muted-foreground: 240 5% 64.9%;
              --accent: 240 3.7% 15.9%;
              --accent-foreground: 0 0% 98%;
              --destructive: 0 62.8% 30.6%;
              --destructive-foreground: 0 0% 98%;
              --border: 240 3.7% 15.9%;
              --input: 240 3.7% 15.9%;
              --ring: 240 4.9% 83.9%;
          }
      }
  </style>
</head>
<body>
<aside class="w-64 bg-white shadow-md p-6">
  <div class="mb-8">
      <h2 class="text-lg font-semibold text-zinc-700">Login As</h2>
      <a href="viewProfile.php"><?php echo $_COOKIE['name']; ?></a>
      <p class="text-red-500">(Admin)</p>
  </div>
  <nav class="space-y-2">
      <a href="dashboard.php" class="block text-zinc-700 hover:bg-zinc-200 p-2 rounded">Dashboard</a>
      <a href="viewProfile.php" class="block text-zinc-700 hover:bg-zinc-200 p-2 rounded">View Profile</a>
      <a href="editProfile.php" class="block text-zinc-700 hover:bg-zinc-200 p-2 rounded">Edit Profile</a>
      <a href="changePassword.php" class="block text-zinc-700 hover:bg-zinc-200 p-2 rounded">Change Password</a>
      <a href="../Controller/logout.php" class="block text-zinc-700 hover:bg-zinc-200 p-2 rounded">Logout</a>
  </nav>
</aside>

<div class="w-3/4 p-8 bg-muted">
    <div class="bg-card p-8 rounded-lg shadow-md">
        <form class="space-y-4" id="inform" action="../Controller/editadminCheck.php" onsubmit="return validation()" method="post">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="id" class="block text-card-foreground">ID:</label>
                    <input type="text" id="id" name="id" class="w-full p-2 border border-input rounded" value="<?php echo $viemyinfo['id']; ?>" readonly>
                </div>
                <div>
                    <label for="name" class="block text-card-foreground">Name:</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-input rounded" value="<?php echo $viemyinfo['name']; ?>">
                </div>
                <div>
                    <label for="email" class="block text-card-foreground">Email:</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-input rounded" value="<?php echo $viemyinfo['email']; ?>">
                </div>
            </div>
            <div class="flex space-x-4">
                <input type="submit" name="submit" class="bg-primary text-primary-foreground hover:bg-primary/80 py-2 px-4 rounded" value="Submit">
            </div>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>
</body>
</html>

<?php include 'navbar.php'; ?>

<div class="min-h-screen bg-[hsl(var(--background))] text-[hsl(var(--foreground))] flex flex-col">
  <div class="container mx-auto flex-grow py-10 px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

      <!-- Sidebar -->
      <aside class="md:col-span-1 bg-[hsl(var(--sidebar-background))] p-4 rounded-lg shadow-lg sticky top-4">
        <h3 class="text-xl font-bold text-[hsl(var(--sidebar-primary))] mb-4">My Account</h3>
        <ul class="space-y-2">
          <li><a href="#" class="block p-2 rounded hover:bg-[hsl(var(--sidebar-accent))]">MY ACCOUNT</a></li>
          <li><a href="#" class="block p-2 rounded hover:bg-[hsl(var(--sidebar-accent))]">RENT HOUSE</a></li>
          <li><a href="#" class="block p-2 rounded bg-[hsl(var(--primary))] text-white">SELL HOUSE</a></li>
          <li><a href="#" class="block p-2 rounded hover:bg-[hsl(var(--sidebar-accent))]">REPORT</a></li>
          <li><a href="#" class="block p-2 rounded hover:bg-[hsl(var(--sidebar-accent))]">MAKE COMPLAIN</a></li>
        </ul>
      </aside>

      <!-- Properties -->
      <main class="md:col-span-3">
        <h1 class="text-3xl font-bold mb-6">Properties for Sale</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php
            for ($i = 1; $i <= 6; $i++) {
              $price = rand(200000, 700000);
              $imgUrl = "https://images.unsplash.com/photo-15128917740{$i}0-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80";
              echo "
              <div class='bg-white rounded-lg shadow-lg overflow-hidden flex flex-col'>
                <img src='$imgUrl' alt='Property' class='w-full h-48 object-cover'>
                <div class='p-4 flex flex-col justify-between flex-grow'>
                  <h2 class='text-xl font-bold mb-1'>Family Home #$i</h2>
                  <p class='text-gray-600'>Greenville, Metro City</p>
                  <div class='flex justify-between items-center mt-4'>
                    <span class='text-primary font-semibold'>\$$price</span>
                    <a href='#' class='btn'>Details</a>
                  </div>
                </div>
              </div>
              ";
            }
          ?>
        </div>
      </main>

    </div>
  </div>

 
</div>

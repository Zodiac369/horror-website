<?php require_once 'layout/header-profile.php'; ?>

<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<main class="profile-page">
  <section class="relative block h-350-px">
    <div class="absolute w-full h-full bg-center bg-cover" style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
          ">
      <span id="blackOverlay" class="w-full h- absolute opacity-50 bg-black"></span>
    </div>
  </section>
  <section class="relative py-20 bg-blueGray-200">
      <div class="container mx-auto px-4">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
              <div class="px-6">
                  <div class="flex flex-wrap justify-center">
                      <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                          <div class="relative">
                              <?php
                            $directorCoverCode = $director->directorPicture;
                            $directorCoverURL = "https://image.tmdb.org/t/p/w500/" . $directorCoverCode;
                            ?>
                                <img src="<?= $directorCoverURL ?>" alt="Cover de <?= $director->directorName ?>" class="w-25 h-25">
                            </div>
                              <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
            </div>
          </div>
          <div class="text-center mt-24">
          <p class="text-3xl font-bold"><?= $director->directorName ?></p>
          </div>
      </div>
    </div>
  </section>
</main>
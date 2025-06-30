<?php require "partials/header.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/banner.php"; ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    Welcome, <span class="font-bold text-2xl"><?= $_SESSION["user"]["name"] ?? ""?></span> to the demo page! This is a simple layout using Tailwind CSS. Below are some details about the book you are reading.
  </div>
</main>

<?php require "partials/footer.php"; ?>
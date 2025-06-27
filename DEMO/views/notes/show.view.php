<?php view("partials/header.php"); ?>
<?php view("partials/nav.php"); ?>
<?php view("partials/banner.php", ['heading' => $heading]); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<a href="/notes" class="inline-block px-2 py-2 mb-4 bg-green-600 text-white rounded hover:bg-green-700 transition text-xs">Go back</a>

    <div class="mb-4 p-4 bg-white rounded-lg shadow hover:bg-gray-100">
            <p class="text-sm text-gray-500 mb-2">Created at: <?= $note["created_at"] ?></p>
           <?= htmlspecialchars($note["body"]) ?>
        </div>
  </div>
</main>

<?php  view("partials/footer.php"); ?>
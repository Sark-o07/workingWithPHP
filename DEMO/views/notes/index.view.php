
<?php view("partials/header.php"); ?>
<?php view("partials/nav.php"); ?>
<?php view("partials/banner.php", ['heading' => $heading]); ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php foreach ($notes as $note): ?>
        <div class="mb-4 p-4 bg-white rounded-lg shadow hover:bg-gray-100">
            <p class="text-sm text-gray-500 mb-2">Created at: <?= $note["created_at"] ?></p>
           <a href="/note" class="underline text-gray-600 hover:text-black"><?= htmlspecialchars($note["body"]) ?></a>
        </div>
        <?php endforeach; ?>

    <div class="mt-6">
      <a href="/notes/create" class="inline-block px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
        Create New Note
      </a>
  </div>
</main>

<?php  view("partials/footer.php"); ?>

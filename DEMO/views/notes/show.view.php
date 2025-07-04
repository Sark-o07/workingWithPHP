<?php view("partials/header.php"); ?>
<?php view("partials/nav.php"); ?>
<?php view("partials/banner.php", ['heading' => $heading]); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<a href="/notes" class="inline-block px-2 py-2 mb-4 bg-green-600 text-white rounded hover:bg-green-700 transition text-xs">Go back</a>

    <div class="mb-4 p-4 bg-white rounded-lg shadow hover:bg-gray-100">
            <p class="text-sm text-gray-500 mb-2">Created at: <?= $note["created_at"] ?></p>
           <?= htmlspecialchars($note["body"]) ?>
           <form class="mt-6" method="POST">
            <div class="flex gap-x-4 justify-end">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="id" value="<?= $note["id"] ?>">
              <a href="/note/edit?id=<?= $note["id"] ?>" class="px-4 py-2 text-black border border-current rounded hover:bg-gray-700 hover:text-white transition text-xs">Edit</a>
              <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition text-xs">Delete</button>
            </div>
           </form>
        </div>
  </div>
</main>

<?php  view("partials/footer.php"); ?>
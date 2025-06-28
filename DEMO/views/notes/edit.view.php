<?php view("partials/header.php"); ?>
<?php view("partials/nav.php"); ?>
<?php view("partials/banner.php", ['heading' => $heading]); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/note" class="bg-white p-6 rounded-lg shadow">
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
      <div class="mb-4">
        <textarea placeholder="Let your Ideas flow..." id="body" name="body" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500"  ><?= $_POST['body'] ?? $note['body'] ?></textarea>
        <?php if (isset($errors['body'])): ?>
            <p class="text-red-500 text-sm mt-2"><?= htmlspecialchars($errors['body']) ?></p>
            <?php endif; ?>
      </div>
      <div class="flex justify-end gap-x-4 mt-6">
         <a href="/note?id=<?= $note['id'] ?>" class="inline-block px-2 py-2 mb-4 border border-current text-black rounded hover:bg-gray-700 hover:text-white transition text-xs">Cancel</a>
         <button type="submit" class="inline-block px-2 py-2 mb-4 bg-green-600 text-white rounded hover:bg-green-700 transition text-xs">Edit Note</button>
      </div>
    
    </form>
  </div>
</main>

<?php  view("partials/footer.php"); ?>

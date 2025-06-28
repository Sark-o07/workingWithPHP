<?php view("partials/header.php"); ?>
<?php view("partials/nav.php"); ?>
<?php view("partials/banner.php", ['heading' => $heading]); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/notes" class="bg-white p-6 rounded-lg shadow">
      <div class="mb-4">
        <textarea placeholder="Let your Ideas flow..." id="body" name="body" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"  ><?= $_POST['body'] ?? "" ?></textarea>
        <?php if (isset($errors['body'])): ?>
            <p class="text-red-500 text-sm mt-2"><?= htmlspecialchars($errors['body']) ?></p>
            <?php endif; ?>
      </div>
      <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Create Note</button>
    </form>
  </div>
</main>

<?php  view("partials/footer.php"); ?>

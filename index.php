<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWDA2</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-12">
    <form action="hitung.php" method="POST" class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="Angka1" class="block mb-2 text-sm font-medium text-gray-900 ">Angka 1</label>
            <input type="number" id="Angka1" name="angka1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <div class="mb-5">
            <label for="Angka2" class="block mb-2 text-sm font-medium text-gray-900 ">Angka 2</label>
            <input type="number" id="Angka2" name="angka2"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <div class="mb-5">
           <select name="operator" id="operator" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            <option value="*">Perkalian (*)</option>
            <option value="/">Pembagian (/)</option>
            <option value="+">Penambahan (+)</option>
            <option value="-">Pengurangan (-)</option>
           </select>
        </div>
        
        <button type="submit" id="hitungButton"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hitung</button>
        <?php if (isset($_GET['hasil'])) { ?>
            <div id="hasil" class="mt-5 text-sm font-medium text-gray-900">Hasil: <?php echo htmlspecialchars($_GET['hasil']); ?></div>
        <?php } ?>
    </form>
</body>

</html>
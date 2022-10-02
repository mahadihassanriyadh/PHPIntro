<!-- There are two ways of including external files into one file. One is "include" other one is "require". -->
<!-- If we use "include" then if the file is not found, then their will be an error displayed and the rest of the page will also be displayed -->
<!-- If we use "require" then if the file is not found, then their will be an error displayed but the rest of the page will not be displayed -->
<!-- depending on our needs we can choose either one -->
<?php include 'header.php'; ?>
<h4 class="text-2xl py-36 px-6 bg-yellow-100 font-bold">Page 1</h4>
<?php include 'footer.php'; ?>
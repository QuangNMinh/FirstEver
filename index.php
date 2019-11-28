git add composer.lock
git commit -m "Add Composer lock file"
git push heroku

<body>
         <h1>Create product</h1>
         <form action="InsertProduct.php" method="post">
         Name <input type="text" name="Name"> <br>
         Price <input type="text" name ="Price"><br>
         <input type="submit" name="Insert">
         </form>
</body>
</html>

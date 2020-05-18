<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Wyszukiwarka2</title>
</head>
<body>
<h1>Wyszukiwarka2</h1>
<form action="miasta.php" method="GET">
<input type="text" id="wyszukiwarka" name="s" placeholder="Wpisz coś..."><br>
<button type="submit">Szukaj</button>
</form>
</body>
<script>
$(function() {
  $("input:text").keyup(function() {
        $(this).val($(this).val().replace(/[*]/g, "%"));
  });
});
</script>
</html>
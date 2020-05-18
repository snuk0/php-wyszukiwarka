<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Wyszukiwarka</title>
</head>
<body>
<h1>Wyszukiwarka</h1>
<form action="szukaj.php" method="GET">
<input type="text" id="wyszukiwarka" name="s" placeholder="Wpisz coś..."><br>
<button type="submit">Szukaj</button>
</form>
Wpisz *
</body>
<script>
$(function() {
  $("input:text").keyup(function() {
        $(this).val($(this).val().replace(/[*]/g, "%"));
        $(this).val($(this).val().replace(/[?]/g, "_"));
  });
});
</script>
</html>
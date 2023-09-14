<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>

<form action="">
    @csrf
    <label for="to">To:</label>
    <input type="text" name="to" id="to">

    <label for="subject">Subject:</label>
    <input type="text" name="subject" id="subject">

    <label for="html">Message:</label>
    <textarea name="html" id="html" cols="30" rows="10"></textarea>

    <button>Send</button>
</form>




</body>
</html>

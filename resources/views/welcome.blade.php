<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Hub</title>
  @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to Students Hub</h1>
    <p>Click the button bellow to view the list of students</p>
    <a href="/students" class="btn mt-4 inline-block">Students</a>
</body>
</html>
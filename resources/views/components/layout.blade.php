<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Hub</title>
  @vite('resources/css/app.css')
</head>
<body class="text-center "> 
  <header>
    <nav class="">
      <h1 class="text-red-500">Student Hub</h1>
      <a href="{{ route('students.index') }}" >All Students</a>
      <a href="{{ route('students.create') }}" >Create New Student</a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>
  
</body>
</html>
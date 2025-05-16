<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Hub</title>
</head>
<body> 

  <header>
    <nav>
      <h1>Student Hub</h1>
      <a href="/students">All Students</a>
      <a href="/students/create">Create New Student</a>
    </nav>
  </header>

  <main>
    {{ $slot }}
  </main>
  
</body>
</html>
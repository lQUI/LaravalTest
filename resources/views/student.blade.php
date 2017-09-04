<html>
  <head>
    <title>Student List</title>
    <meta></meta>
  </head>
  <body>
    <table style="width:100%">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
      </tr>
      @foreach ($students as $student)
      <tr>
        <th>{{$student -> firstName}}</th>
        <th>{{$student -> lastName}}</th>
        <th>{{$student -> age}}</th>
      </tr>
      @endforeach
    </table>
  </body>
</html>
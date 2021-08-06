<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href={{asset('css/helper.css')}}>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <title>Log In</title>
</head>
<body>
<form action="{{url('passwordForget')}}" method="post" class="pt-2">
    @csrf
    <input type="email" name="email" id="email">
    <button type="submit">Submit</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/bootrsrap.js') }}"></script>
    <title>Print Cheque</title>
</head>
<body dir="rtl">
    <div class="container d-flex justify-content-center align-items-center gap-3" style="height: 100vh">
        <a href="{{ route("reprsentative.prev") }}" class="btn btn-secondary btn-lg">سجل المندوبين</a>
        <a href="{{ route("add.reprsentative") }}" class="btn btn-primary btn-lg">اضافة مندوب</a>
    </div>
</body>
</html>
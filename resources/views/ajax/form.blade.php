<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment </title>
    <script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$id}}"></script>
</head>
<body>
<form action="{{route('getStatus')}}" class="paymentWidgets" data-brands="VISA MASTER AMEX MADA "></form>
</body>
</html>

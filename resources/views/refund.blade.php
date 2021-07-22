<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php

$stripe = new \Stripe\StripeClient('sk_test_nR7fNrOKz8OAVLg8nIlLNEeu00CxbYwI5v');

$refunded = $stripe->refunds->create([
    'charge' => 'ch_1Hedw2EecuKiqt1LZc2qCra7',
    'amount' => 3000
  ]);

echo '<pre>';
  print_r($refunded);
echo '</pre>';

    @endphp

</body>

</html>

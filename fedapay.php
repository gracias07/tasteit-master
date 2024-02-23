<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>Intégrer Feda Checkout à mon site</title>
  <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
  <script src="https://cdn.kkiapay.me/k.js"></script>
</head>
<body>
  <button><kkiapay-widget  amount="10007" sandbox="true" key="21b58d30d23511eea0fa9120a10122b3"
            callback="menu.php" /></button>
  <script type="text/javascript">
      FedaPay.init('#pay-btn', { public_key: 'pk_live_QLMSFnSHWFieCzDwpPjAU3fc' });
  </script>
</body>
</html>
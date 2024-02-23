<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>Intégrer Feda Checkout à mon site</title>
  <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
</head>
<body>
  <button id="pay-btn">Payer 1000 FCFA</button>
  <script type="text/javascript">
      FedaPay.init('#pay-btn', {
        public_key: 'VOTRE_CLE_API_PUBLIQUE',
        transaction: {
          amount: 1000,
          description: 'Acheter mon produit'
        },
        customer: {
          email: 'johndoe@gmail.com',
          lastname: 'Doe',
          firstname: 'John',
        }
      });
  </script>
</body>
</html>
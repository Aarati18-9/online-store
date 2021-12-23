
<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> PayPal Checkout Integration</title>
</head>

<body>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AReBflM2smIrnuGtsYidPkB67Kz_oJSZ-DiCMsTOtnTLPOLWa5AisP11uKuH5tWL2Nv0kYTPxi5OCiuF&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {value:<?php 
                            $total_usd=$_SESSION['total']/120;
                            echo ceil($total_usd);?>
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                    
                });
            }


        }).render('#paypal-button-container');
    </script>
</body>

</html>
    
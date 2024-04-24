@extends('frontend.layout.main')
@section('content')

<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>


<button id="payment-button" class="certi-btn">Pay with Khalti</button>

<script>
    var config = {
        // replace the publicKey with yours
        "publicKey": "test_public_key_78f5c6ec772940b7a5c482e0b0c8b0ed",
        "productIdentity": "1234567890",
        "productName": "Dragon",
        "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
        "paymentPreference": [
            "KHALTI",
            "EBANKING",
            "MOBILE_BANKING",
            "CONNECT_IPS",
            "SCT",
        ],
        "eventHandler": {
            onSuccess(payload) {
                console.log(payload);
                var url = '/verify-booking-purchase-status/' + `{{$id}}`
                window.location.replace(url)
            },
            onError(error) {
                console.log(error);
            },
            onClose() {
                console.log('widget is closing');
            }
        }
    };

    var checkout = new KhaltiCheckout(config);
    var btn = document.getElementById("payment-button");
    btn.onclick = function() {
        checkout.show({
            amount: `{{$price}}` * 100
        });
    }
</script>
<script>
    checkout.show({
        amount: `{{$price}}` * 100
    });
</script>
<!-- End Dashboard -->
@endsection
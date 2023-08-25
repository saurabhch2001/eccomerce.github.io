<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>

<style>
    body{
    background:#eee;
}

.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: 1rem;
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.5rem 1.5rem;
}
</style>


</head>
<body>
    
<div class="container">
    <h1 class="h3 mb-5">Payment</h1>
    <div class="row">
      <!-- Left -->
      <div class="col-lg-9">
        <div class="accordion" id="accordionPayment">
          <!-- Credit card -->
          <div class="accordion-item mb-3">
            <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
              <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseCC" aria-expanded="false">
                <input class="form-check-input" type="radio" name="payment" id="payment1">
                <label class="form-check-label pt-1" for="payment1">
                  Credit Card
                </label>
              </div>
              <span>
                
            </h2>
            <div id="collapseCC" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment" style="">
              <div class="accordion-body">
                <div class="mb-3">
                  <label class="form-label">Card Number</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Name on card</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Expiry date</label>
                      <input type="text" class="form-control" placeholder="MM/YY">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">CVV Code</label>
                      <input type="password" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- PayPal -->
          <div class="accordion-item mb-3 border">
            <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
              <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePP" aria-expanded="false">
                <input class="form-check-input" type="radio" name="payment" id="payment2">
                <label class="form-check-label pt-1" for="payment2">
                  PayPal
                </label>
              </div>
              <span>
                
              </span>
            </h2>
            <div id="collapsePP" class="accordion-collapse collapse" data-bs-parent="#accordionPayment" style="">
              <div class="accordion-body">
                <div class="px-2 col-lg-6 mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right -->
      <div class="col-lg-3">
        <div class="card position-sticky top-0">
          <div class="p-3 bg-light bg-opacity-10">
            <h6 class="card-title mb-3">Order Summary</h6>
            <div class="d-flex justify-content-between mb-1 small">
              <span>Subtotal</span> <span>$214.50</span>
            </div>
            <div class="d-flex justify-content-between mb-1 small">
              <span>Shipping</span> <span>$20.00</span>
            </div>
            <div class="d-flex justify-content-between mb-1 small">
              <span>Coupon (Code: NEWYEAR)</span> <span class="text-danger">-$10.00</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-4 small">
              <span>TOTAL</span> <strong class="text-dark">$224.50</strong>
            </div>
            <div class="form-check mb-1 small">
              <input class="form-check-input" type="checkbox" value="" id="tnc">
              <label class="form-check-label" for="tnc">
                I agree to the <a href="#">terms and conditions</a>
              </label>
            </div>
            <div class="form-check mb-3 small">
              <input class="form-check-input" type="checkbox" value="" id="subscribe">
              <label class="form-check-label" for="subscribe">
                Get emails about product updates and events. If you change your mind, you can unsubscribe at any time. <a href="#">Privacy Policy</a>
              </label>
            </div>
            <button class="btn btn-primary w-100 mt-2">Place order</button>
          </div>
        </div>
      </div>
    </div>
  </div>




</body>
</html>
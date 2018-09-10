<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<form>
    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
                <div id="pay-invoice" class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Pay Invoice</h3>
                        </div>
                        <hr>
                        <form action="/echo" method="post" novalidate="novalidate" class="needs-validation">
                            <div class="form-group text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="text-muted fab fa-cc-visa fa-2x"></i></li>
                                    <li class="list-inline-item"><i class="fab fa-cc-mastercard fa-2x"></i></li>
                                    <li class="list-inline-item"><i class="fab fa-cc-amex fa-2x"></i></li>
                                </ul>
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Name on card</label>
                                <input id="cc-name" name="cc-name" type="text" class="form-control cc-name" required
                                       autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                       aria-describedby="cc-name-error">
                                <span class="invalid-feedback">Enter the name as shown on credit card</span>
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Card number</label>
                                <input id="cc-number" name="cc-number" type="tel"
                                       class="form-control cc-number identified visa" required=""
                                       placeholder="XXXX XXXX XXXX XXXX" pattern="[0-9]{16}">
                                <span class="invalid-feedback">Enter a valid 16 digit card number</span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Expiration Date</label>
                                        <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" required
                                               placeholder="MM / YY" autocomplete="cc-exp">
                                        <span class="invalid-feedback">Enter the expiration date</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="x_card_code" class="control-label mb-1">Security code</label>
                                    <div class="input-group">
                                        <input id="x_card_code" name="x_card_code" type="tel"
                                               class="form-control cc-cvc" required autocomplete="off">
                                        <span class="invalid-feedback order-last">Enter the 3-digit code on back</span>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                        <span class="fas fa-question-circle fa-md" data-toggle="popover"
                                              data-container="body" data-html="true" data-title="Security Code"
                                              data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                              data-trigger="hover"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fas fa-lock fa-md"></i>&nbsp;
                                    <span id="payment-button-amount">Complete Payment</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
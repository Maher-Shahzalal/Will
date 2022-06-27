@extends('layouts.Master_main')

@section('title')
show wills
@endsection

@section('style')
<style>
.StripeElement {
  box-sizing: border-box; height: 40px; padding: 10px 12px; border: 1px solid transparent; border-radius: 4px;
  background-color: white; box-shadow: 0 1px 3px 0 #e6ebf1; -webkit-transition: box-shadow 150ms ease; transition: box-shadow 150ms ease;
}
.StripeElement--focus { box-shadow: 0 1px 3px 0 #cfd7df; }
.StripeElement--invalid { border-color: #fa755a; }
.StripeElement--webkit-autofill { background-color: #fefde5 !important; }
h2,.h2 { font-size: 1.8rem; color: #000000; font-weight: bold; }
h4,.h4 { color: #000000;}
</style>
@endsection
@section('content')
<div class="card card-default-md-8">
    <div class="card-header">
         <h5>Payment</h5>
     </div>
      <div class="card-body">
         <form action="/home" method="post" id="payment-form">
           {{csrf_field()}}
              <div class="">
                <input type="hidden" name="amount" value="50$">
                  <label for="card-element">
                      <h4>  Credit or debit card  </h4> <h2>$4.99</h2>
                   </label>
             <div id="card-element"></div>
              <div id="card-errors" role="alert"></div>
              </div>
                 <button class="btn btn-primary mt-3">Submit Payment</button>
                   <p id="loading" style="display:none;"> Payment is in process . please wait...</p>
           </form>
      </div>
</div>
@endsection
@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
window.onload = function()
  {
    var stripe = Stripe('pk_test_51HNQBzG3n7hDmmwFt6jOqkXgllCTtFYo2YNsCInAyDxSXHLPXXAuGqrDrV4Pl0URdoVx50YWCaXmqF1Rr0YHutE000cWzkj1sH');
    var elements = stripe.elements();
    var style = { base: { color: '#32325d', fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                          fontSmoothing: 'antialiased', fontSize: '16px','::placeholder': {color: '#aab7c4'}},
               invalid: { color: '#fa755a', iconColor: '#fa755a'}
                 };
    var card = elements.create('card', {style: style});
      card.mount('#card-element');
     card.on('change', function(event) {
    var displayError = document.getElementById('card-errors');
        if (event.error) { displayError.textContent = event.error.message;}
         else {displayError.textContent = '';}});
     var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
    event.preventDefault();
    stripe.createToken(card).then(function(result) {
    if (result.error) {
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;}
      else {
            stripeTokenHandler(result.token); }
  });
});
      function stripeTokenHandler(token) {
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        var loading = document.getElementById('loading')
             loading.style.display = "block";
         form.submit();}
        }
</script>
@endsection


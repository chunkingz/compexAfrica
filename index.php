
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Compex Africa Interest Calculator</title>

    <link rel="stylesheet" href="styles/css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>Interest calculator</h2>
  </div>

  <div class="row">
  <div class="col-md-4 order-md-2 mb-4 right-tab" style="display:none;">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your Result</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Monthly Subscription</h6>
          </div>
          <span class="text-muted" id="displayMonthlySub"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Interest Rate</h6>
          </div>
          <span class="text-muted" id="displayInterest"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Tenure</h6>
          </div>
          <span class="text-muted" id="displayTenure"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h3 class="my-0">Total</h3>
          </div>
          <span class="text-muted" id="displayTotal"></span>
        </li>
    </div>
    <div class="col-md-8 order-md-1">
        <div class="row">
          <div class="col-md-4 mb-3 form-group">
            <label for="monthlySub">Monthly Subscription</label>
            <input type="text" class="form-control monthlySub" name="monthlySub" id="monthlySub" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid Monthly Subscription is required.
            </div>
          </div>
          <div class="col-md-4 mb-3 form-group">
            <label for="interestRate">Interest Rate</label>
            <input type="text" class="form-control interestRate" name="interestRate" id="interestRate" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid Interest Rate is required.
            </div>
          </div>
          <div class="col-md-4 mb-3 form-group">
            <label for="tenure">Tenure (months)</label>
            <input type="text" class="form-control tenure" name="tenure" id="tenure" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid tenure is required.
            </div>
          </div>
        </div>

        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" id="submit" class="submit" name="submit" type="submit" />
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 Compex Africa/SFS</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
  
</div>


</body>
</html>

<script type="text/javascript" src="styles/js/jquery.min.js"></script>
<script type="text/javascript">
  $( () => {
    $("#submit").click( () => {
      const monthlySub = parseInt($("#monthlySub").val());
      const interestRate = parseInt($("#interestRate").val());
      const tenure = parseInt($("#tenure").val());

      const interestPerMonth = interestRate / 12;
      const monthlyGain = monthlySub / 100;
      const closing = monthlyGain + monthlySub;
      const total = closing * tenure;

      $("#displayMonthlySub").html(monthlySub);
      $("#displayInterest").html(interestRate);
      $("#displayTenure").html(tenure);
      $("#displayTotal").html(total);

      $(".right-tab").slideDown(500);
    });
  })

</script>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <style>
    @media (min-width: 1025px) {
      .h-custom {
        height: 100vh !important;
      }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }

    .bg-grey {
      background-color: #eae8e8;
    }

    @media (min-width: 992px) {
      .card-registration-2 .bg-grey {
        border-top-right-radius: 16px;
        border-bottom-right-radius: 16px;
      }
    }

    @media (max-width: 991px) {
      .card-registration-2 .bg-grey {
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
      }
    }
  </style>
  <title>Hello, world!</title>
</head>

<body>

  <section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                      <h6 class="mb-0 text-muted">3 items</h6>
                    </div>
                    <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="images/Woman_in_a_V-Neck_T-Shirt.jpg" alt="Cotton T-shirt" style="height: 56px;width: 48px;">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Shirt</h6>
                        <h6 class="text-black mb-0">Cotton T-shirt</h6>
                      </div>
                      <div class="col-md-3 d-flex">
                        <div class="plus">
                          <button class="btn btn-link px-2" id="case-plus">+</button>
                        </div>

                        <input id="case-number" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />

                        <div class="minus">
                          <button class="btn btn-link px-2" id="case-minus">-</button>
                        </div>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">$<span id="case-Total">44.00</span></h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>

                    <hr class="my-4">


                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="images/Woman_in_a_V-Neck_T-Shirt.jpg" alt="Cotton T-shirt" style="height: 56px;width: 48px;">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Shirt</h6>
                        <h6 class="text-black mb-0">Cotton T-shirt</h6>
                      </div>
                      <div class="col-md-3 d-flex">
                        <div class="plus">
                          <button class="btn btn-link px-2" id="phone-plus">+</button>
                        </div>

                        <input id="phone-number" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />

                        <div class="minus">
                          <button class="btn btn-link px-2" id="phone-minus">-</button>
                        </div>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">$<span id="phone-Total">44.00</span></h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>
    <!-- Footer -->
    <footer class="container-fluid">
    <div class="row d-flex" style="
    top: 0;
    margin-left: -52px;
    width: 70rem;
    border: 1px solid white;
">
        <div class="col-md-6" style="background-color:yellow;">
          <div class="col-md-2">
            <p>Sub Total</p>
          </div>
          <div class="col-md-2">
            <p>tex</p>

          </div>
          <div class="col-md-2">
            <p>Total</p>

          </div>
        </div>
        <div class="col-md-6" style="background-color:pink;">
        <div class="col-md-2">
            <p>$<span id="sub-total">700</span></p>
          </div>
          <div class="col-md-2">
          <p>$<span id="tax-amount">700</span></p>
          </div>
          <div class="col-md-2">
          <p>$<span id="total-price">700</span></p>
          </div>     
        </div>
      </div>
    </footer>


                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->

  </section>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

<script type="text/javascript">
  function updateProductNumber(product, price, isIncreasing) {
    const caseInput = document.getElementById(product + '-number');
    let caseNumber = caseInput.value;
    if (isIncreasing == true) {
      caseNumber = parseInt(caseNumber) + 1;
    } else {
      if (caseNumber > 0) {
        caseNumber = parseInt(caseNumber) - 1;
      }

    }
    caseInput.value = caseNumber;

    // update case total 
    const caseTotal = document.getElementById(product + '-Total');
    caseTotal.innerText = caseNumber * price;
    calculateSubtotal();

  }


  // function get input value 
  function getInputValue(product){
    const productInput = document.getElementById(product+'-number');
    const productNumber = parseInt(productInput.value);
    return productNumber;

  }

  //calculation subtotal and total and tax

  function calculateSubtotal(){
    const phoneTotal = getInputValue('phone')*3;
    console.log(phoneTotal);

    const caseTotal = getInputValue('case')*4;
    console.log(caseTotal);

    const subTotal = phoneTotal + caseTotal;
    const tax = subTotal/10;
    const totalPrice = subTotal + tax;


    // update on the html
    document.getElementById('sub-total').innerText = subTotal; 
    document.getElementById('tax-amount').innerText = tax; 
    document.getElementById('total-price').innerText = totalPrice; 


  }

  // phone case increase decrease event 
  document.getElementById('phone-plus').addEventListener('click', function() {
    updateProductNumber('phone', 3, true);
  });

  document.getElementById('phone-minus').addEventListener('click', function() {
    updateProductNumber('phone', 3, false);
  });


  // handle case increase decrease event 
  document.getElementById('case-plus').addEventListener('click', function() {
    updateProductNumber('case', 4, true);
  });

  document.getElementById('case-minus').addEventListener('click', function() {
    updateProductNumber('case', 4, false);
  });
</script>
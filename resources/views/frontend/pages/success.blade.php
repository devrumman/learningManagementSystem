@extends ('frontend.layout.template')

<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/invoice/style.css') }}"/>

@section('body')
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0">
      <img id="logo" src="images/logo.png" title="Koice" alt="Koice" />
    </div>
    <div class="col-sm-5 text-center text-sm-end">
      <h4 class="text-7 mb-0">Invoice</h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-6"><strong>Date:</strong> 05/12/2020</div>
    <div class="col-sm-6 text-sm-end"> <strong>Invoice No:</strong> 16835</div>
	  
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 text-sm-end order-sm-1"> <strong>Pay To:</strong>
      <address> 
        Developer Rumman<br />
        Mirpur- 12, Pallabi<br />
        Dhaka- 1216<br />
        Bangladesh
      </address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
      <address>    
      {{Auth::user()->name}}<br />
      {{Auth::user()->address}}<br />
      {{Auth::user()->cite}}, {{Auth::user()->zipcode}}<br />
      {{Auth::user()->email}}
      </address>
    </div>
  </div>
	
  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0">
		<thead class="card-header">
      <tr>
        <td class="col-3"><strong>Course</strong></td>
        <td class="col-6"><strong>Mentor Name</strong></td>
        <td class="col-1 text-center"><strong>Batch</strong></td>
        <td class="col-2 text-end"><strong>Price</strong></td>
      </tr>
        </thead>
          <tbody>
            <tr>
              
            </tr>
          </tbody>
		  <tfoot class="card-footer">
			<tr>
              <td colspan="4" class="text-end"><strong>Sub Total:</strong></td>
              <td class="text-end">$2150.00</td>
            </tr>
            <tr>
              <td colspan="4" class="text-end"><strong>Tax:</strong></td>
              <td class="text-end">$215.00</td>
            </tr>
			<tr>
              <td colspan="4" class="text-end border-bottom-0"><strong>Total:</strong></td>
              <td class="text-end border-bottom-0">$2365.00</td>
            </tr>
		  </tfoot>
        </table>
      </div>
    </div>
  </div>
  </main>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  </footer>
</div>
</body>
</html>



{{-- <section id="home" class="pd-tp-80 hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Your Course Purchase Successfully Done. Here is the invoice</h2>

        <table>
          <thead>
            <tr>
              <th>Full Name</th>
              <th>Transaction ID</th>
              <th>Amount</th>
              <th>Course Name</th>
              <th>Batch Name</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>{{$order_detials->user_id}}</td>
              <td>{{$order_detials->transaction_id}}</td>
              <td>{{$order_detials->amount}}</td>
              <td>{{$order_detials->course_id}}</td>
              <td>{{$order_detials->batch_id}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>     --}}

@endsection
 
@extends('layout.title')

@section('title', 'Dashboard')
@include('layout.title')

@include('layout.header')

<body>
@include('layout.sidebar')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Transactions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Transactions</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Transactions Logs</h5>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Transaction Type</th>
            <th scope="col">Amount</th>
            <th scope="col">Date Processed</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include 'database/connections.php';





            $retrieve_query = mysqli_query($connections, "SELECT * FROM  transactions_report_tbl");

            while($row = mysqli_fetch_assoc($retrieve_query)){

            $db_paymentID = $row["transactionID"];
            $db_paymentPayorName = $row["transactionName"];
            $db_paymentType = $row["transactionType"];
            $db_paymentAmount = $row["transactionAmount"];
            $db_paymentDate = $row["transactionDate"];
            $db_paymentStatus = $row["transactionStatus"];
            $db_cancelled = $row["reasonForCancellation"];


            echo "
            <tr>
            <th scope='row'>$db_paymentID</th>
            <td>$db_paymentPayorName</td>
            <td>$db_paymentType</td>
            <td>$db_paymentAmount</td>
            <td>$db_paymentDate</td>
            <td style='color: "; if ($db_paymentStatus == 'Pending'){
              echo "orange";
            }
            echo ";'>$db_paymentStatus</td>
            <td align='center'>
            <form autocomplete='off' action='checkout-charge.php' method='POST'>

              <button type='button' class='btn btn-info rounded-pill' data-bs-toggle='modal' data-bs-target='#basicModal".$db_paymentID."'><i class='ri-eye-2-line'></i></button>

              <input type='hidden' name='total' value='". $db_paymentAmount . "' >
              <input type='hidden' name='payorName' value='". $db_paymentPayorName . "' >





            </form>

            </td>
          </tr>


<div class='modal fade' id='basicModal".$db_paymentID."' tabindex='-1'>



        <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h6 class='modal-title'>Transaction Queue #: &nbsp; </h6> <h5 class='modal-title' style='color:green;'>".$db_paymentID."</h5>

              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>

            <div class='row mb-3'>
          <label for='inputText' class='col-form-label' style='font-size: 12px;'>Name/Organization of Payor:</label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' disabled value='".$db_paymentPayorName."'>
          </div>
        </div>

        <div class='row mb-3'>
          <label for='inputText' class='col-form-label' style='font-size: 12px;'>Payment Type:</label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' disabled value='".$db_paymentType."'>
          </div>
        </div>

        <div class='row mb-3'>
          <label for='inputText' class='col-form-label' style='font-size: 12px;'>Amount to be paid: ₱</label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' disabled value='". $db_paymentAmount."'>
          </div>
        </div>

        <div class='row mb-3'>
          <label for='inputText' class='col-form-label' style='font-size: 12px;'>Date Processed: </label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' disabled value='". $db_paymentDate."'>
          </div>
        </div>

        <div class='row mb-3'>
          <label for='inputText' class='col-form-label' style='font-size: 12px;'>Reason For Cancellation (for cancelled transactions only):  </label>
          <div class='col-sm-10'>
            <input type='text' class='form-control' disabled value='". $db_cancelled."'>
          </div>
        </div>

        <div class='row mb-3'>
          <label class='col-form-label' style='font-size: 12px;'>Payment Gateway:</label>
          <div class='col-sm-10'>
            <select class='form-select' aria-label='Default select example' disabled>

              <option value='1' selected>Stripe</option>
              <option value='2'>Paymongo</option>
              <option value='3'>Three</option>
            </select>

          </div>

        </div>

            </div>
            <div class='modal-footer'>

              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>





            </div>
          </div>
        </div>




      </div><!-- End Basic Modal-->

           ";







            }


        ?>





        </tbody>
      </table>





    </div>
  </div>
</body>
@include('layout.footer')

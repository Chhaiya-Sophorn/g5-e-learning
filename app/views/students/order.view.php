<?php 
    require 'models/payment.model.php';
    require 'database/database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['email']) && isset($_POST['selectioned']) && isset($_POST['expiration-date']) && isset($_POST['totals'])){
        if($_POST['email']!='' && $_POST['selectioned']!='' && $_POST['expiration-date']!='' && $_POST['totals']!=''){
          $text = $_POST['selectioned'];
          $numbers = array_map('intval', explode(',', $text));
          foreach ($numbers as $number){
            if(count(getPaymentExist(students($_POST['email'])['user_id'],$number))<1){
              addPayments($number,students($_POST['email'])['user_id'], $_POST['expiration-date'], courses($number)['price']);
            }
          }
        }
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Card</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Custom CSS */
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: orange;
      color: #fff;
      border-radius: 15px 15px 0 0;
      font-size: 24px;
      font-weight: bold;
      text-align: center;
    }
    .card-body {
      background-color: #fff;
      border-radius: 0 0 15px 15px;
      overflow-y: auto; /* Enable scrolling */
      max-height: 400px; /* Set a maximum height */
    }
    .card-title {
      color: #333;
      font-size: 20px;
      font-weight: bold;
    }
    .card-text {
      color: #555;
      font-size: 16px;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .btn-danger {
      background-color: #dc3545;
      border: none;
    }
    .btn-danger:hover {
      background-color: #c82333;
    }
    .card-footer {
      background-color: #f8f9fa;
      border-top: none;
      border-radius: 0 0 15px 15px;
      font-weight: bold;
      color: orange;
    }
    .hidden {
      display: none;
    }
    .text-orange, .btn-orange {
      color: orange;
    }
    .btn-orange {
      color: orange;
      font-size: 20px;
    }

    .list-group-item {
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body style="background-color: rgba(0, 0, 0,0.05);">
<section id='testing_blog' style='height: 200px;background-image: url("assets/images/bg/abstract-1264071_1280.jpg");'>
<div class="container p-3" <?php 
      if(isset($_POST['email']) && isset($_POST['selectioned']) && isset($_POST['expiration-date']) && isset($_POST['totals'])){
        if($_POST['email']!='' && $_POST['selectioned']!='' && $_POST['expiration-date']!='' && $_POST['totals']!=''){
              echo '';
        }else{
              echo 'hidden';
        }
      }else{
        echo 'hidden';
  }

?>>
  <div class="alert alert-success">
    <strong>Your paid successfully!  <img src="studentprofile/check.png" alt="Profile Image" class="rounded-circle mb-3" style="width: 30px; height: 30px; object-fit: cover;"></strong>  
    <span id="icon-cross" class="icon-cross">X</span>
  </div>
</div>

<style>
  .icon-cross {
    float: right;
    cursor: pointer;
  }
</style>

<script>
  const iconCross = document.getElementById('icon-cross');
  const alertBox = document.querySelector('.alert');

  iconCross.addEventListener('click', function() {
    alertBox.style.display = 'none';
  });
</script>
 
    <div class="row  mt-0">
    <div class="container">
      <form class="container-fluid justify-content-start" action='/student' method='post'>
          <input type="text" name='email' value='<?= $_POST['email']?>' hidden>  
        <button type="submit" class="btn btn-orange btn-sm">Back</button>
      </form>
    </div>
        <div class="col-lg-8 text-center mx-auto m-5">
            <h2 class="text-orange">Ordering</h2>
            <p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
        </div>
    </div>
</section>
  <div class="container mt-5">
    <div class="row">
      <!-- Product Card -->
      <div class="col-md-4" style="height: 300px; overflow-y: auto;">
        <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
          <?php 
          $orders = getTheorder(students($_POST['email'])['user_id']);
          foreach ($orders as $order):
          ?>
          <div class="card card-body shadow rounded-3 m-2" data-course-id="<?= $order['course_id'] ?>">
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img class="me-lg-2" src="uploading/<?= courses($order['course_id'])['image_courses']?>" alt="" style="width: 70px; height: 70px;">
                <div class="ms-3">
                  <input type="text" name='email' value='' hidden>
                  <input type="text" name='id' value='' hidden>
                  <h5 class="mb-0"><?= courses($order['course_id'])['title']?></h5>
                  <span><?= courses($order['course_id'])['price']?></span>
                </div>
              </div>
              <button class="btn btn-primary add-to-cart-btn" data-price="<?= courses($order['course_id'])['price'] ?>"><i class="bi bi-cart-plus"></i>Add</button>
            </div>
          </div>
          <?php endforeach ?>
          <!-- Add more product cards here -->
        </div>
      </div>
      <!-- End Product Card -->

      <!-- Shopping Cart -->
      <div class="col-md-8">
        <div class="card" style="height: 300px;">
          <div class="card-header">
            Cards
          </div>
          <div class="card-body">
            <ul class="list-group gap-2" id="cart-list">
              <!-- Cart Items will be displayed here -->
            </ul>
          </div>
          <div class=" d-flex justify-content-between align-items-center p-3" id="pay-btn-container">
            <h7>Total: <span class='card-footer'>$0.00</span></h7>
            <button class="btn btn-success pay-btn show-pay" disabled><i class="bi bi-cash "></i> Pay</button>
          </div>
        </div>
      </div>
      <!-- End Shopping Cart -->
    </div>
  </div>
  <div class="container mt-5">
     <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg"> <!-- Increased size -->
               <div class="modal-content">
                    <div class="modal-body border p-4 m-4"> <!-- Changed border color to orange -->
                    <div class="text-center"> 
                        <img src="studentprofile/download.png" alt="Profile Image" class="rounded-circle mb-3" style="width: 130px; height: 130px; object-fit: cover;">
                    </div>
                    <h5 class="text-center">Here is Bill</h5>
                    <div class="">
                      <h5 class="text-orange">Selected Courses:</h5>
                      <ul class="list-group" id="selected-courses-list">
                        <!-- Selected courses will be displayed here -->
                      </ul>
                    </div>
                    <div class="d-flex justify-content-end mt-2">Total:<h5 class="text-warning" id="modalPrice"></h5></div> <!-- Changed text color to orange -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <input type="text" id="modalUser" value='<?=$_POST['email']?>' name='email' hidden>
                            <button type='button' class="btn btn-warning pays">Pay</button> <!-- Changed button color to orange -->
                    </div>
                    </div>
               </div>
          </div>
     </div>
</div>

<div class="container mt-5 p-2">
  <div class="modal fade" id="payModal" tabindex="-1" aria-labelledby="payModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-dark">
          <h5 class="modal-title" id="payModalLabel">Payment Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-end align-items-center mb-2" style='background-image: url("studentprofile/abstract-1264071_1280.jpg");'>
            <img src="studentprofile/image-removebg-preview (3).png" alt="Visa" style="width: 400px;height: 70px;">
          </div>
          <form id="payment-form" action="/orders" method="post">
            <div class="mb-3">
              <label for="card-holder-name" class="form-label">Cardholder Name</label>
              <input type="text" class="form-control form-control-lg focus-orange" id="card-holder-name" name="card-holder-name" required>
            </div>
            <div class="mb-3">
              <label for="card-number" class="form-label">Card Number</label>
              <input type="text" class="form-control form-control-lg focus-orange" id="card-number" name="card-number" required>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="expiration-date" class="form-label">Expiration Date</label>
                <input type="date" class="form-control form-control-lg focus-orange" id="expiration-date" name="expiration-date" placeholder="MM/YY" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control form-control-lg focus-orange" id="cvv" name="cvv" required>
              </div>
            </div>
            <input type="text" name='email' value='<?= $_POST['email']?>' hidden>  
            <input type="text" id="modalCourse" name="selectioned" hidden>
            <input type="text" id="totals" name="totals" hidden>
            <button type="submit" class="btn btn-warning btn-lg paid">Pay Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional if you need JavaScript features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    const cartList = document.getElementById('cart-list');
    const payBtnContainer = document.getElementById('pay-btn-container');
    const totalsInput = document.getElementById('totals'); // Get the totals input field

    addToCartButtons.forEach(button => {
      button.addEventListener('click', addToCart);
    });

    function addToCart(event) {
      const productCard = event.target.closest('.card');
      const courseId = productCard.dataset.courseId;
      const productName = productCard.querySelector('h5').innerText;
      const productPrice = parseFloat(productCard.querySelector('span').innerText.replace('$', '')); // Parse the price as a float

      const cartItems = cartList.querySelectorAll('.list-group-item');
      const isItemInCart = Array.from(cartItems).some(item => item.querySelector('.fw-bold').innerText === productName);

      if (!isItemInCart) {
        const cartItem = createCartItem(productName, productPrice);
        cartList.appendChild(cartItem);
        updateTotal();
        event.target.disabled = true; // Disable the button after adding
        if (cartItems.length === 0) {
          payBtnContainer.classList.remove('hidden'); // Show the Pay button if no items are already in the cart
        }
      } else {
        alert('Item is already in the cart!');
      }
    }

    function createCartItem(name, price) {
      const cartItem = document.createElement('li');
      cartItem.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
      cartItem.innerHTML = `
        <span class="fw-bold">${name}</span>
        <span>$${price.toFixed(2)}</span>
        <div>
          <button class="btn btn-danger btn-sm delete-btn"><i class="bi bi-trash"></i> Delete</button>
        </div>
      `;

      const deleteButton = cartItem.querySelector('.delete-btn');
      deleteButton.addEventListener('click', deleteItem);

      return cartItem;
    }

    function deleteItem(event) {
      const itemToDelete = event.target.closest('.list-group-item');
      itemToDelete.remove();
      updateTotal();
      const productName = itemToDelete.querySelector('.fw-bold').innerText;
      const correspondingAddToCartButton = Array.from(addToCartButtons).find(button => button.closest('.card').querySelector('h5').innerText === productName);
      correspondingAddToCartButton.disabled = false; // Enable the button after deletion

      // Check if there are any items left in the cart
      const cartItems = cartList.querySelectorAll('.list-group-item');
      if (cartItems.length === 0) {
        payBtnContainer.classList.add('hidden'); // Hide the Pay button if no items are left
      }
    }

    function updateTotal() {
      const cartItems = document.querySelectorAll('.list-group-item');
      let totalPrice = 0;

      cartItems.forEach(item => {
        const priceString = item.querySelector('span:nth-child(2)').innerText.replace('$', ''); // Remove $ sign before parsing
        const price = parseFloat(priceString);
        totalPrice += price;
      });

      document.querySelector('.card-footer').innerText = `$${totalPrice.toFixed(2)}`;
      totalsInput.value = totalPrice.toFixed(2); // Set the total value to the input field
    }
  });

  $(document).ready(function() {
    $('.show-pay').click(function() {
      const selectedCourseIds = Array.from(document.querySelectorAll('.add-to-cart-btn:disabled')).map(btn => btn.closest('.card').dataset.courseId);
      if (selectedCourseIds.length > 0) {
        $('#paymentModal').modal('show');
        document.getElementById('modalCourse').value = selectedCourseIds.join(',');
        document.getElementById('selected-courses-list').innerHTML = '';
        selectedCourseIds.forEach(courseId => {
          const courseTitle = document.createElement('li');
          courseTitle.classList.add('list-group-item');
          const courseName = document.querySelector(`.card[data-course-id="${courseId}"] h5`).innerText;
          const coursePrice = document.querySelector(`.card[data-course-id="${courseId}"] span`).innerText;
          courseTitle.innerHTML = `<span class="fw-bold">${courseName}</span><span>${coursePrice}</span>`;
          document.getElementById('selected-courses-list').appendChild(courseTitle);
        });
        updateModalTotal();
      } else {
        alert('Please add items to the cart before proceeding to payment.');
      }
    });

    function updateModalTotal() {
      const total = document.querySelector('.card-footer').innerText;
      document.getElementById('modalPrice').innerText = total;
    }

    // Enable/disable Pay button based on cart items
    function togglePayButton() {
      const cartItems = document.querySelectorAll('.list-group-item');
      const payButton = document.querySelector('.pay-btn');
      if (cartItems.length > 0) {
        payButton.disabled = false;
      } else {
        payButton.disabled = true;
      }
    }

    // Call togglePayButton initially and after any cart item is added or removed
    togglePayButton();
    document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
      btn.addEventListener('click', togglePayButton);
    });
    document.querySelectorAll('.delete-btn').forEach(btn => {
      btn.addEventListener('click', togglePayButton);
    });
  });

  $(document).ready(function() {
    $('.pays').click(function() {
      $('#payModal').modal('hide');
      $('#payModal').modal('show');
    });
  });
</script>

</body>
</html>

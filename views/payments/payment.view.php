
<!-- Payment Modal -->
<div class="container mt-5">
     <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border-success p-4 m-4">
					<div class="text-center"> 
						<img src="studentprofile/download.png" alt="Profile Image" class="rounded-circle mb-3" style="width: 130px; height: 130px; object-fit: cover;">
					</div>
					<h5 class="text-center">Course payment</h5>
					<div class="text-center">Course:<h5 class="text-info" id="modalTitle"></h5></div>
					<div class="text-center">Price:<h5 class="text-success" id="modalPrice"></h5></div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						<button id='pay' class="btn btn-primary succeses-popup">Pay</button>
						<form action="controllers/payments/payment.controller.php" method='post'>
							<input type="text" id="modalUser" value='' name='user_id' hidden>
							<input type="text" id="modalCourse" value='' name='course_id' hidden>					
							
						</form>   
					</div>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- Confirmation Modal -->
<div class="container mt-5">
     <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body">
						<div class="text-center"> 
						<img src="studentprofile/check.png" alt="Profile Image" class="rounded-circle mb-3" style="width: 130px; height: 130px; object-fit: cover;">
							<box-icon name='check-circle' animation='tada' color='rgba(18,154,232,0.55)'></box-icon>	
						</div>
						<h5 class="text-center">Your payment success!</h5>
						<p class="text-center">Injoy your learning </p>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal">Join course</button>	
						</div>
						<form action="">
							<input type="text" id="modaluser" value='' hidden>
							<input type="text" id="modalcourse" value='' hidden>
						</form>
                    </div>
               </div>
          </div>
     </div>
</div>
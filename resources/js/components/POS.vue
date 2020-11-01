<template>
  <div class="row">
    <div class="col-xl-5 order-xl-2 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-body pt-0 pt-md-4">
          <div class="text-center">
            <h1>Receipt</h1>
            <hr class="my-4" />
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">QTY</th>
                    <th scope="col">Amount</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Chicken Inasal</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">₱2,500</td>
                    <td>2</td>
                    <td>₱5,000</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-primary">Remove</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="justify-content-end mb-0">
            <span class="mb-0 text-sm">Total Amount: </span>
            <span class="mb-0 text-sm"><strong>₱5,000</strong></span>

            <a href="#" class="btn btn-sm btn-danger float-right">Checkout</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-7 order-xl-1">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h1 class="mb-0">Product List</h1>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="row">
            <div class="product col-sm-3">
              <div class="product_img">
                <img src="assets/img/products/razor.jpg" />
              </div>
              <div class="product_details">
                <p class="product_name mb-0"><strong>Chicken Inasal</strong></p>
                <p class="product_price mb-0">₱2,500</p>
              </div>
            </div>

            <div class="product col-sm-3">
              <div class="product_img">
                <img src="assets/img/products/xiaomi_laptop.jpg" />
              </div>
              <div class="product_details">
                <p class="product_name mb-0"><strong>Chicken Inasal</strong></p>
                <p class="product_price mb-0">₱2,500</p>
              </div>
            </div>

            <div class="product col-sm-3">
              <div class="product_img">
                <img src="assets/img/products/razor.jpg" />
              </div>
              <div class="product_details">
                <p class="product_name mb-0"><strong>Chicken Inasal</strong></p>
                <p class="product_price mb-0">₱2,500</p>
              </div>
            </div>

            <div class="product col-sm-3">
              <div class="product_img">
                <img src="assets/img/products/xiaomi_laptop.jpg" />
              </div>
              <div class="product_details">
                <p class="product_name mb-0"><strong>Chicken Inasal</strong></p>
                <p class="product_price mb-0">₱2,500</p>
              </div>
            </div>

            <div class="product col-sm-3">
              <div class="product_img">
                <img src="assets/img/products/razor.jpg" />
              </div>
              <div class="product_details">
                <p class="product_name mb-0"><strong>Chicken Inasal</strong></p>
                <p class="product_price mb-0">₱2,500</p>
              </div>
            </div>

            <div class="product col-sm-3">
              <div class="product_img">
                <img src="assets/img/products/xiaomi_laptop.jpg" />
              </div>
              <div class="product_details">
                <p class="product_name mb-0"><strong>Chicken Inasal</strong></p>
                <p class="product_price mb-0">₱2,500</p>
              </div>
            </div>

            <div class="product col-sm-3">
              <div class="product_img">
                <img src="assets/img/products/razor.jpg" />
              </div>
              <div class="product_details">
                <p class="product_name mb-0"><strong>Chicken Inasal</strong></p>
                <p class="product_price mb-0">₱2,500</p>
              </div>
            </div>

            <div class="product col-sm-3">
              <div class="product_img">
                <img src="assets/img/products/xiaomi_laptop.jpg" />
              </div>
              <div class="product_details">
                <p class="product_name mb-0"><strong>Chicken Inasal</strong></p>
                <p class="product_price mb-0">₱2,500</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#"
                  >2 <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
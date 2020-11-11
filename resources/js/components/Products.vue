<template>
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Products</h3>
              </div>
              <div class="col-4 text-right">
                <a
                  href=""
                  class="btn btn-sm btn-primary"
                  data-toggle="modal"
                  data-target="#modal-product"
                  >Add product</a
                >
              </div>
            </div>
          </div>

          <div class="col-12"></div>

          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Category</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">QTY</th>
                  <th scope="col">Price</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Image</td>
                  <td>Shoes</td>
                  <td>Juan</td>
                  <td>Dela Cruz</td>
                  <td>50</td>
                  <td>₱250.00</td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a
                        class="btn btn-sm btn-icon-only text-light"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                      >
                        <a class="dropdown-item" href="">Edit</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer py-4">
            <nav class="d-flex justify-content-end" aria-label="..."></nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="modal-product"
      tabindex="-1"
      role="dialog"
      aria-labelledby="userModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="userModalLabel">Add New Product</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form role="form" @submit.prevent="createProduct">
            <div class="modal-body">
              <div class="text-center text-muted mb-4">
                <small>Enter the product information</small>
              </div>
              <!-- Product Name Input -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <input
                    class="form-control"
                    placeholder="Product Name"
                    name="name"
                    type="text"
                    v-model="form.name"
                  />
                </div>
              </div>
              <!-- Description Input -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <textarea
                    class="form-control"
                    aria-label="Description"
                    name="description"
                    v-model="form.description"
                  ></textarea>
                </div>
              </div>
              <!-- QTY Input -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <input
                    type="number"
                    class="form-control"
                    aria-label="qty"
                    placeholder="Qty"
                    name="qty"
                    v-model="form.qty"
                  />
                </div>
              </div>
              <!-- Price Input -->
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">₱</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    aria-label="price"
                    placeholder="250.00"
                    name="price"
                    v-model="form.price"
                  />
                </div>
              </div>
              <!-- Image -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative custom-file">
                  <input
                    type="file"
                    class="custom-file-input"
                    id="customFileLang"
                    lang="en"
                    name="image"
                    v-on:change="form.image"
                    required
                  />
                  <label class="custom-file-label" for="customFileLang"
                    >Select file</label
                  >
                </div>
              </div>
              <!-- Category -->
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <select
                    class="form-control"
                    data-toggle="select"
                    v-model="form.category"
                  >
                    <option>Category 1</option>
                    <option>Category 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
              <button type="button" class="btn btn-primary">
                Save changes
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: {},
      form: new Form({
        name: "",
        description: "",
        qty: "",
        price: "",
        image: "",
        category: "",
      }),
    };
  },
  methods: {
    loadProducts() {
      axios.get("api/product").then((data) => (this.products = data.data));
    },

    createProduct() {
      // this.form.post("api/product").then(() => {
      //   $("#modal-product").modal("hide");
      //   this.loadProducts();
      // });

      this.form.post("api/product");
    },
  },
  created() {
    this.loadProducts();
  },
};
</script>
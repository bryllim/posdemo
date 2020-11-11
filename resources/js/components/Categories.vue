<template>
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Categories</h3>
              </div>
              <div class="col-4 text-right">
                <a
                  href=""
                  class="btn btn-sm btn-primary"
                  data-toggle="modal"
                  data-target="#modal-category"
                  >Add category</a
                >
              </div>
            </div>
          </div>

          <div class="col-12"></div>

          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="category in categories" :key="category.id">
                  <td>{{ category.name }}</td>
                  <td>{{ category.description }}</td>
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
                        <a
                          class="dropdown-item"
                          href="#"
                          @click="deleteCategories(category.id)"
                          >Delete</a
                        >
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
      id="modal-category"
      tabindex="-1"
      role="dialog"
      aria-labelledby="userModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="userModalLabel">Add New Category</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form role="form" @submit.prevent="createCategories">
            <div class="modal-body">
              <div class="text-center text-muted mb-4">
                <small>Enter the category information</small>
              </div>
              <!-- Cateogry Name Input -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <input
                    class="form-control"
                    placeholder="Category Name"
                    type="text"
                    v-model="form.name"
                    name="name"
                    required
                  />
                </div>
              </div>
              <!-- !Category Name Input -->
              <!-- Description Input -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <textarea
                    class="form-control"
                    aria-label="Description"
                    v-model="form.description"
                    name="description"
                    required
                  ></textarea>
                </div>
              </div>
              <!-- !Description Input -->
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
              <button type="submit" class="btn btn-primary">
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
      categories: {},
      form: new Form({
        name: "",
        description: "",
      }),
    };
  },

  methods: {
    loadCategories() {
      axios.get("api/category").then((data) => (this.categories = data.data));
    },

    openModal() {},

    createCategories() {
      this.form.post("api/category").then(() => {
        $("#modal-category").modal("hide");
        this.loadCategories();
      });
    },

    updateCategories() {},

    deleteCategories(id) {
      this.form.delete("api/category/" + id).then(() => {
        this.loadCategories();
      });
    },
  },

  created() {
    this.loadCategories();
  },
};
</script>
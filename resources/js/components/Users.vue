<template>
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Users</h3>
              </div>
              <div class="col-4 text-right">
                <a
                  href=""
                  class="btn btn-sm btn-primary"
                  data-toggle="modal"
                  data-target="#modal-users"
                  >Add user</a
                >
              </div>
            </div>
          </div>

          <div class="col-12"></div>

          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Branch Assinged</th>
                  <th scope="col">Creation Date</th>
                  <th scope="col">Updated At</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="user in users" :key="user.id">
                  <td>{{ user.firstname }}</td>
                  <td>{{ user.lastname }}</td>
                  <td>{{ user.email }}</td>
                  <td>{{ user.type.type }}</td>
                  <td>
                    {{ user.branch.street }}, {{ user.branch.baranggay }},
                    {{ user.branch.city_munacipality }}
                  </td>
                  <td>{{ user.created_at }}</td>
                  <td>{{ user.updated_at }}</td>
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
                          href=""
                          @click="deleteUser(user.id)"
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
      id="modal-users"
      tabindex="-1"
      role="dialog"
      aria-labelledby="userModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="userModalLabel">Add New Users</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="createUser">
            <div class="modal-body">
              <div class="text-center text-muted mb-4">
                <small>Enter the personal information</small>
              </div>
              <!-- First Name Input -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <input
                    class="form-control"
                    placeholder="First Name"
                    type="text"
                    v-model="form.firstname"
                    name="firstname"
                    required
                  />
                </div>
              </div>
              <!-- Last Name Input -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <input
                    class="form-control"
                    placeholder="Last Name"
                    type="text"
                    v-model="form.lastname"
                    name="lastname"
                    required
                  />
                </div>
              </div>
              <!-- Email -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <input
                    class="form-control"
                    placeholder="Email"
                    type="email"
                    v-model="form.email"
                    name="email"
                    required
                  />
                </div>
              </div>
              <!-- Password -->
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <input
                    class="form-control"
                    placeholder="Password"
                    type="password"
                    v-model="form.password"
                    name="password"
                    minlength="6"
                    required
                  />
                </div>
              </div>
              <!-- Location -->
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <input
                    class="form-control"
                    placeholder="Location"
                    type="text"
                    v-model="form.location"
                    name="location"
                    required
                  />
                </div>
              </div>
              <!-- Number -->
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <input
                    class="form-control"
                    placeholder="Phone Number"
                    type="tel"
                    v-model="form.phone"
                    name="phone"
                    required
                  />
                </div>
              </div>
              <!-- User Type -->
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <select
                    class="form-control"
                    data-toggle="select"
                    v-model="form.type"
                    required
                  >
                    <option
                      v-for="type in types"
                      :value="type.id"
                      :key="type.id"
                    >
                      {{ type.type }}
                    </option>
                  </select>
                </div>
              </div>

              <!-- Branch -->
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <select
                    class="form-control"
                    data-toggle="select"
                    v-model="form.branch"
                    required
                  >
                    <option
                      v-for="branch in branches"
                      :value="branch.id"
                      :key="branch.id"
                    >
                      {{ branch.city_munacipality }}
                    </option>
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
      users: {},
      types: {},
      branches: {},
      form: new Form({
        firstname: "",
        lastname: "",
        email: "",
        password: "",
        location: "",
        phone: "",
        type: "",
        branch: "",
      }),
    };
  },
  methods: {
    loadUsers() {
      axios.get("/api/users").then((data) => (this.users = data.data));
    },

    loadType() {
      axios.get("/api/type").then((data) => (this.types = data.data));
    },

    loadBranch() {
      axios.get("/api/branch").then((data) => (this.branches = data.data));
    },

    createUser() {
      this.form.post("api/users").then(() => {
        $("#modal-users").modal("hide");
        this.loadUsers(); //Look for better ways
      });
    },

    deleteUser(id) {
      this.form.delete("api/users/" + id).then(() => {
        this.loadUsers();
      });
    },
  },
  created() {
    this.loadUsers();
    this.loadType();
    this.loadBranch();
  },
};
</script>

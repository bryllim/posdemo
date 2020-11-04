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
          <div class="modal-body">
            <div class="text-center text-muted mb-4">
              <small>Enter the personal information</small>
            </div>
            <form role="form">
              <!-- First Name Input -->
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <input
                    class="form-control"
                    placeholder="First Name"
                    type="text"
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
                  />
                </div>
              </div>
              <!-- User Type -->
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <select
                    class="form-control"
                    data-toggle="select"
                    data-placeholder="Select a role"
                  >
                    <option>Staff</option>
                    <option>Manager</option>
                    <option>Admin</option>
                  </select>
                </div>
              </div>

              <!-- Branch -->
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <select
                    class="form-control"
                    data-toggle="select"
                    data-placeholder="Select designated branch"
                  >
                    <option>Cebu</option>
                    <option>Manila</option>
                    <option>Zamboanga</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      editMode: false,
      users: {},
    };
  },
  methods: {
    loadUsers() {
      axios.get("/api/users").then((data) => (this.users = data.data));
    },

    loadType() {},

    loadBranch() {},
  },
  created() {
    this.loadUsers();
    this.loadType();
    this.loadBranch();
  },
};
</script>

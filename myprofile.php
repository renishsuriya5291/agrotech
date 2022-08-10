<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <style>
      #user_request {
        overflow: scroll;
        height: 100vh;
        max-height: 260px;
      }

      #request_form {
        display: flex;
        gap: 5px;
      }

      .card {
        margin-bottom: 10px;
      }

      #main_userimg {
        width: 40px;
      }

      #sub_userimg {
        width: 100%;
        box-shadow: 1px 1px 6px black;
      }

      #user {
        display: flex;
        align-items: center;
      }

      #user_name {
        margin-left: 10px;
        margin-bottom: 17px;
      }
    </style>
  </head>

  <body>
    <section style="background-color: #eee">
      <div class="container py-5">
        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  User Profile
                </li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                  alt="avatar"
                  class="rounded-circle img-fluid"
                  style="width: 150px"
                />
                <h5 class="my-3">John Smith</h5>
                <!-- <p class="text-muted mb-1">abcd@gmail.com</p> -->
                <div class="d-flex justify-content-center mb-2">
                  <button type="button" class="btn btn-primary">
                    Edit Profile
                  </button>
                  <button type="button" class="btn btn-outline-primary ms-1">
                    Edit Photo
                  </button>
                </div>
              </div>
            </div>
            <div class="card mb-4 mb-lg-0" id="user_request">
              <div class="card-body p-0">
                <div class="card">
                  <!-- <div class="card-header">
                                    Featured
                                </div> -->
                  <div class="card-body">
                    <div id="user">
                      <div class="col-md-6 mb-4" id="main_userimg">
                        <img
                          class="rounded-circle z-depth-2"
                          alt="100x100"
                          src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                          data-holder-rendered="true"
                          id="sub_userimg"
                        />
                      </div>
                      <h5 class="card-title" id="user_name">ABCD</h5>
                    </div>
                    <p class="card-text">ABCD Requested 5 min Ago.</p>

                    <div id="request_form">
                      <form action="profile-detail.html">
                        <input
                          type="submit"
                          value="Accept"
                          class="btn btn-primary"
                        />
                      </form>

                      <form action="profile-detail.html">
                        <input
                          type="submit"
                          value="Decline"
                          class="btn btn-primary"
                        />
                      </form>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <!-- <div class="card-header">
                                    Featured
                                </div> -->
                  <div class="card-body">
                    <div id="user">
                      <div class="col-md-6 mb-4" id="main_userimg">
                        <img
                          class="rounded-circle z-depth-2"
                          alt="100x100"
                          src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                          data-holder-rendered="true"
                          id="sub_userimg"
                        />
                      </div>
                      <h5 class="card-title" id="user_name">ABCD</h5>
                    </div>

                    <div id="request_form">
                      <form action="profile-detail.html">
                        <input
                          type="submit"
                          value="Accept"
                          class="btn btn-primary"
                        />
                      </form>

                      <form action="profile-detail.html">
                        <input
                          type="submit"
                          value="Decline"
                          class="btn btn-primary"
                        />
                      </form>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <!-- <div class="card-header">
                                    Featured
                                </div> -->
                  <div class="card-body">
                    <div id="user">
                      <div class="col-md-6 mb-4" id="main_userimg">
                        <img
                          class="rounded-circle z-depth-2"
                          alt="100x100"
                          src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                          data-holder-rendered="true"
                          id="sub_userimg"
                        />
                      </div>
                      <h5 class="card-title" id="user_name">ABCD</h5>
                    </div>

                    <div id="request_form">
                      <form action="profile-detail.html">
                        <input
                          type="submit"
                          value="Accept"
                          class="btn btn-primary"
                        />
                      </form>

                      <form action="profile-detail.html">
                        <input
                          type="submit"
                          value="Decline"
                          class="btn btn-primary"
                        />
                      </form>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <!-- <div class="card-header">
                                    Featured
                                </div> -->
                  <div class="card-body">
                    <div id="user">
                      <div class="col-md-6 mb-4" id="main_userimg">
                        <img
                          class="rounded-circle z-depth-2"
                          alt="100x100"
                          src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                          data-holder-rendered="true"
                          id="sub_userimg"
                        />
                      </div>
                      <h5 class="card-title" id="user_name">ABCD</h5>
                    </div>

                    <div id="request_form">
                      <form action="profile-detail.html">
                        <input
                          type="submit"
                          value="Accept"
                          class="btn btn-primary"
                        />
                      </form>

                      <form action="profile-detail.html">
                        <input
                          type="submit"
                          value="Decline"
                          class="btn btn-primary"
                        />
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">Johnatan Smith</p>
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">example@example.com</p>
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Contact No.</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">(097) 234-5678</p>
                  </div>
                </div>
                <hr />

                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Address</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                  </div>
                </div>

                <hr />

                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Gender</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">Male</p>
                  </div>
                </div>

                <hr />

                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Age</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">20</p>
                  </div>
                </div>

                <hr />

                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Work Hour</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">10 Hours</p>
                  </div>
                </div>

                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Approx. Salary</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">20,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                  <div class="card-body">
                    <p class="mb-4">
                      <span class="text-primary font-italic me-1"
                        >assigment</span
                      >
                      Project Status
                    </p>
                    <p class="mb-1" style="font-size: 0.77rem">Web Design</p>
                    <div class="progress rounded" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 80%"
                        aria-valuenow="80"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: 0.77rem">
                      Website Markup
                    </p>
                    <div class="progress rounded" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 72%"
                        aria-valuenow="72"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: 0.77rem">One Page</p>
                    <div class="progress rounded" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 89%"
                        aria-valuenow="89"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: 0.77rem">
                      Mobile Template
                    </p>
                    <div class="progress rounded" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 55%"
                        aria-valuenow="55"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <p class="mt-4 mb-1" style="font-size: 0.77rem">
                      Backend API
                    </p>
                    <div class="progress rounded mb-2" style="height: 5px">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 66%"
                        aria-valuenow="66"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

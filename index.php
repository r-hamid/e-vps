<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Applicant Info: E-VPS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="./assets/core.css" rel="stylesheet" />
</head>
<body class="page-bg">

  <div class="p-2">
    <div class="mx-3">
      <?php include "./components/topbar.php"; ?>
      <?php include "./components/buttonBar.php"; ?>
    </div>

    <div class="card rounded-sm mt-2 mx-2">
      <div class="card-header">Provide your application details</div>

      <div class="card-body">
        <div class="alert alert-info text-danger" role="alert">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4m.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
          </svg>
          <span> Fields marked with * are mendatory </span>
        </div>

        <div class="card rounded-sm">
          <div class="card-header bg-info-subtle text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4m.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
            </svg>
            <span class="fw-bold">Application Info</span>
          </div>

          <div class="card-body">
            <form action="result.php" method="post">
              <p class="text-primary mt-3">Choose what type of Visa you want to apply for. If you are not sure, check e-visa website</p>

              <div class="row my-2">
                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="visa-category">Visa Category <span class="text-danger">*</span> </label>
                    </div>
                    <div class="col-8">
                      <select class="form-select" id="visa-category" name="visa-category" aria-label="Default select example" required>
                        <option selected>Select</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="visa-sub-category">Visa Sub-category <span class="text-danger">*</span> </label>
                    </div>
                    <div class="col-8">
                      <select class="form-select" id="visa-sub-category" name="visa-sub-category" aria-label="Default select example">
                        <option selected>Select</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row my-3">
                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="application-type">Application Type <span class="text-danger">*</span> </label>
                    </div>
                    <div class="col-8">
                      <select class="form-select" id="application-type" name="application-type" aria-label="Default select example" required>
                        <option selected>Select</option>
                        <option value="online">Online Application</option>
                        <option value="paper">Paper Application</option>
                        <option value="on_arrival">Visa on Arrival</option>
                        <option value="e-visa">E-Visa</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="visa-type">Visa Type <span class="text-danger">*</span> </label>
                    </div>
                    <div class="col-8">
                      <select class="form-select" id="visa-type" name="visa-type" aria-label="Default select example" required>
                        <option selected>Select</option>
                        <option value="single_entry">Single Entry Visa</option>
                        <option value="multi_entry">Multiple Entry Visa</option>
                        <option value="short_term">Short-term Visa</option>
                        <option value="long_term">Long-term Visa</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row my-3">
                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="visa-no">
                        Ref. Visa No
                        <span class="text-primary">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                          </svg>
                        </span>
                      </label>
                    </div>
                    <div class="col-8">
                      <input type="text" disabled name="visa-no" id="visa-no" class="form-control" />
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="passport-no">
                        Ref. Passport No
                        <span class="text-primary">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                          </svg>
                        </span>
                      </label>
                    </div>
                    <div class="col-8">
                      <input type="text" disabled name="passport-no" id="passport-no" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="row my-3">
                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="visit-purpose">
                        Visit Purpose
                        <span class="text-danger">*</span>
                      </label>
                    </div>
                    <div class="col-8">
                      <input type="text" name="visit-purpose" id="visit-purpose" class="form-control" required />
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="visa-duration">
                        Required Visa Duration
                        <span class="text-danger">*</span>
                      </label>
                    </div>
                    <div class="col-8">

                      <div class="row">
                        <div class="col-3">
                          <select name="visa-duration" id="visa-duration" class="form-select">
                          </select>
                        </div>
                        <div class="col-6">
                          <select name="visa-duration-value" id="visa-duration-value" class="form-select">
                            <option selected>Select</option>
                            <option value="day">Day(s)</option>
                            <option value="month">Month(s)</option>
                            <option value="year">Year(s)</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <p class="text-primary mt-3">Where would you like to be interviewed, if required?</p>

              <div class="row my-3">
                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="country">Country <span class="text-danger">*</span> </label>
                    </div>
                    <div class="col-8">
                      <select class="form-select" id="country" name="country" aria-label="Default select example">
                        <option selected>Select</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="mission">Mission <span class="text-danger">*</span> </label>
                    </div>
                    <div class="col-8">
                      <select class="form-select" id="mission" name="mission" aria-label="Default select example" required>
                        <option selected>Select</option>
                        <option value="embassies_pk">Embassies of Pakistan in different countries</option>
                        <option value="high_commisioner">
                          High Comissions of Pakistan in Commonwealth countries
                        </option>
                        <option value="consulates_general">
                          Consulates General of Pakistan in various cities around the world
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <p class="text-primary mt-3">What will be your port of entry and departure?</p>

              <div class="row my-3">
                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="entry-port text-end">Entry Port</label>
                    </div>
                    <div class="col-8">
                      <input class="form-control" id="entry-port" name="entry-port" type="text" />
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="departure-port">Departure Port</label>
                    </div>
                    <div class="col-8">
                      <input class="form-control" id="departure-port" name="departure-port" type="text" />
                    </div>
                  </div>
                </div>
              </div>

              <p class="text-primary mt-3">Provide your planned dates to travel to Pakistan. This does not mean your visa will only be valid for these dates</p>

              <div class="row my-3">
                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="arrival-date">Arrival Date <span class="text-danger">*</span> </label>
                    </div>
                    <div class="col-8">
                      <input class="form-control" id="arrival-date" name="arrival-date" type="date" required />
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="row align-items-center">
                    <div class="col-4 text-end">
                      <label for="departure-date">Departure Date <span class="text-danger">*</span> </label>
                    </div>
                    <div class="col-8">
                      <input class="form-control" id="departure-date" name="departure-date" type="date" required />
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 text-end">
                  <button type="submit" class="btn btn-primary btn-lg">
                    Submit
                  </button>
                </div>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <script src="./assets/data.js"></script>
  <script src="./assets/core.js"></script>
</body>
</html>

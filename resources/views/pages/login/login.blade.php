
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo Login</title>
    @include('libraries.styles')


</head>
<body>
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="border border-3 border-primary"></div>
          <div class="card bg-white">
            <div class="card-body p-5">
              <form class="mb-3 mt-md-4" action="{{ Route('users.loginCheck') }}" method="post" enctype="multipart/form">
                @csrf
                <h2 class="fw-bold mb-2 text-uppercase ">LOGIN</h2>
                <p class=" mb-5">Please enter your login and password!</p>
                <div class="mb-3">
                  <label for="email" class="form-label ">Email address</label>
                  <input type="email" class="form-control" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label ">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="*******">
                </div>
                <div class="d-grid">
                  <button class="btn btn-outline-dark" type="submit">Login</button>
                </div>
              </form>
              <div>
                <p class="mb-0  text-center">Don't have an account? <a href="{{ Route('register') }}"
                    class="text-primary fw-bold">Sign
                    Up</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('libraries.script')
</body>
</html>



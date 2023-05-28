<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: lightblue;">
    <div class="container mt-2" style="background-color: rgba(0, 0, 0, 0.5); /* Black color with 50% transparency */
  padding: 20px;">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                <center><h1 style="font-family: Arial Black; margin-bottom: 30px;">LOGIN</h1></center>
                    </div>
                    @if (session('success'))
                        <div style="color: red; font-size: 14px; font-family: Arial; margin-bottom: 20px; margin-right: 30%;">
                            {{ session('success') }}
                        </div>
                    @endif
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                                  <input type="text" id="email_address" class="form-control" name="email" style="width: 70%; margin-left: 15%; font-size: 20px; font-family: Arial;" placeholder="Email Address" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                          </div>
                          <div class="form-group row">
                                  <input type="password" id="password" class="form-control" name="password" style="width: 70%; margin-left: 15%; font-size: 20px; font-family: Arial;" placeholder="Password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                          </div>
                              <center><button type="submit" class="btn" style="width: 70%; margin-bottom: 30px; background-color: #3b5998; color: white">
                                  Login
                              </button></center>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
</body>

</html>
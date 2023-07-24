<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Rizal Salsa Collection</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card my-5">

              <form class="card-body cardbody-color p-lg-5" method="POST" action="{{ route('register') }}">
                @csrf

            <div class="text-center">
                    <h1>REGISTER</h1>
                  <img src="img/LGO RSCOLL.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>

                <div class="mb-3">
                    <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class=" col-form-label text-md-end">{{ __('Email Address') }}</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                    <div class="mb-3">
                        <label for="password" class=" col-form-label text-md-end">{{ __('Password') }}</label>


                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                <div class="mb-3">
                    <label for="password-confirm" class=" col-form-label text-md-end">{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button></div>
              </form>
</body>
</html>

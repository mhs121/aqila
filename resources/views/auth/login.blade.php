@extends('master.applogin')

@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
  <h1 class="text-center text-warning"><i> Halaman Login </i></h1>
  @if (session('status'))
			<div class="alert alert-danger text-center mb-4">
				{{ session('status') }}
			</div>
		@endif
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="adsis/img/logoaqila.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="POST" action="{{ route('login') }}">
                        @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            <label class="form-label" for="email">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            <label class="form-label" for="password">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div><h3></h3><a href="{{ route('password.request') }}">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-info btn-lg btn-block">Sign in</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">Penguna Baru</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block"  href="reg"
            role="button">Daftar Sebagai Tutor
          </a>
          <a class="btn btn-primary btn-lg btn-block"  href="{{ route('register') }}"
            role="button">Daftar Sebagai siswa</a>

        </form>
      </div>
    </div>
  </div>
</section>
@endSection
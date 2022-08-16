@extends('master.applogin')
    @section('content')
    <section class="login-content">
    <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"><i class="fa fa-lg fa-fw fa-user"></i>Halaman Pendaftaran</h3>
            <div class="tile-body">
            <form method="POST" action="{{ route('register') }}">
                        @csrf
                         <div class="form-group">
								<input style="visibility: hidden;" type="text" id="sebagai" class="form-control" value="siswa" name="sebagai"></input>
                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">e-mail</label>
                  <div class="col-md-8">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Password</label>
                  <div class="col-md-8">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Confirm Password</label>
                  <div class="col-md-8">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>
                <div class="form-group">
									<input style="visibility: hidden;" type="text" id="status" class="form-control" value="2" name="is_Admin"></input>
								</div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-3">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" />I accept the terms and conditions</label>
                    </div>
                  </div>
                </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
    </section>
    @endSection
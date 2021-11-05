@extends('layouts.app')

@section('content')

    <style>
        body {
            overflow: hidden; /* Hide scrollbars */
        }
    </style>


    <div class="row">
        <div class="col-8 container-fluid vh-100  "
             style="height: 100% ; background-image: url('img/loginbg.jpg') ;  background-size: cover">
        </div>
        <div class="col-4  container-fluid vh-100" >

        </div>

        <div class="col-4   container-fluid  "
             style="position: absolute;  height: 85%; z-index: 999; right: 10%; top: 10% ; background-color: white;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

            <div class=" text-center " style="margin-top: 15%">
                <img src="{{asset('img/logo.png')}}" alt="logo" style="width: 2rem;">

                <div class="mt-4">Explore new courses... Hurry up!!</div>

                <div class="card-body w-75 m-auto" style="overflow: hidden" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                     <div>
                         <div class="form-group row" >
                             <div class="col-lg-12">
                                 <input id="email" placeholder="E-Mail Address" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}"  autocomplete="email" autofocus>
                                 @error('email')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                 @enderror
                             </div>
                         </div>
                         <div class="form-group row">
                             <div class="col-lg-12">
                                 <input id="password" placeholder="Password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                         autocomplete="current-password">
                                 @error('password')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                 @enderror
                             </div>
                         </div>

                     </div>

                      <div class="float-right">
                          @if (Route::has('password.request'))
                              <a class="btn btn-link " href="{{ route('password.request') }}">
                                  <span class="text-danger">Forgot Your Password?</span>
                              </a>
                          @endif
                      </div>
                        <input type="submit" value="Login" class="btn btn-primary   btn-block">

                    </form>
                </div>
                <style>
                    hr {
                        border-top: 2px solid black;
                    }
                </style>
                <table class="w-50 m-auto">
                    <tr>
                        <td><hr /></td>
                        <td style="width:1px; padding: 0 10px; white-space: nowrap;">OR</td>
                        <td><hr /></td>
                    </tr>
                </table>
                <br>


                <a href="{{ url('auth/google') }}" style="margin-top: 20px;" >
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRs2ntwTKVN2rxpv6dhFAb53ddrnbpjVJ7R3g&usqp=CAU"  alt="facebook" style="width: 1.8rem; border-radius: 50px;">


                </a>
                <a class="btn" href="{{ url('auth/facebook') }}">
                    <img src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png"  alt="facebook" style="width: 3rem; border-radius: 50px;">

                </a>

                <p class="mt-1">Don't have an account? <a href="\singup" style="text-decoration: none">Sign Up</a></p>
            </div>

        </div>


    </div>


@endsection

<x-layout>
    <x-slot name='title'>
       login
    </x-slot>
        <!-- <div class="login-form ">
         <div class="text">
            LOGIN
         </div>
         @if (Session::has('success'))
              <div class="alert alert-success">{{ Session::get('success') }}</div>
         @endif     
         <form class="align-middle" method="post" action="{{ route('login.post') }}">

            <div class="field">
               <div class="fas fa-envelope"></div>
               <input type="text" placeholder="Email or Phone">
            </div>
            <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" placeholder="Password">
            </div>
            <button>LOGIN</button>
            <div class="link">
               Not a member?
               <a href="{{ route('registration') }}">Signup now</a>
            </div>
         </form>
</div> -->
<div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2>Login Page</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <form method="post" action="{{ route('login.post') }}">
                    @csrf
                    <div class="form-group row">
                        <lable class="col-md-4">Email</lable>
                        <div class="col-md-8">
                            <input type="text" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <lable class="col-md-4">Password</lable>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control" placeholder="Enter your Name">
                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <input type="submit" name="submit" class="btn btn-success" value="Submit" >
                        </div>
                        <div class="link">
                          Not a member?
                         <a href="{{ route('registration') }}">Signup now</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
  
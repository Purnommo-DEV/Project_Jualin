@extends('layout.header')

@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class = "row">
                <div class = "col-sm"></div>
                <div class = "col-sm">
                    <div class="login-form"><!--login form-->
                        <h2>Login dengan Akun anda</h2>
                        <small>for the purpose of industry registration your detail are required</small>
                        <form action="#">
                            <input type="text" placeholder="Name" />
                            <input type="email" placeholder="Email Address" />
                            <span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
                            <!--<button type="submit" class="btn btn-default">Login</button>-->
                            <a href="{{route('admin')}}" class = "btn btn-primary"> login</a>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class = "col-sm">

                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection


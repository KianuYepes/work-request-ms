@extends('layout.loginLayout')

@section('content')
<div class="container">
        
    <div class="header">
        <section>Work Request System</section>
    </div>  

    <div class="content">
        <section>
            <label>Sign In</label>

            <form action='/user/login/admin' method="POST" class="form-container">
                @csrf
                <input type="text" name="email" placeholder="Enter Username">
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="submit" value="Login">
            </form>
            <p>Don't have an account? <a href="#">Sign Up</a></p>
        </section>
    </div>  

</div>
@endsection
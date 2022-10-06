@extends('layout.main')

@section('content')
<div class="container">
        
    <div class="header">
        <section>Work Request System</section>
    </div>  

    <div class="content">
        <section>
            <label class="title">Sign In</label>
            <!-- container for slider -->
            <div class="wrapper" id="slide">
                
                    <span class="form1">
                        <!-- === Requestor === -->
                        <form action='/user/login/requestor' method="POST" class="form-container">
                            @csrf
                            <label>As Requestor</label>
                            <input type="text" name="email" placeholder="Enter Username">
                            <input type="password" name="password" placeholder="Enter Password">
                            <input type="submit" name="submit" value="Login">
                        </form>
                    </span>

                    <span class="form2">
                        <!-- === Wrok Staff === -->
                        <form action='/user/login/staff' method="POST" class="form-container">
                            @csrf
                            <label>As Work Staff</label>
                            <input type="text" name="email" placeholder="Enter Username">
                            <input type="password" name="password" placeholder="Enter Password">
                            <input type="submit" name="submit" value="Login">
                        </form>
                    </span>

                    <span class="form3">
                        <!-- === Admin === -->
                        <form action='/user/login/admin' method="POST" class="form-container">
                            @csrf
                            <label>As Administrator</label>
                            <input type="text" name="email" placeholder="Enter Username">
                            <input type="password" name="password" placeholder="Enter Password">
                            <input type="submit" name="submit" value="Login">
                        </form>
                    </span>
                
            </div><!-- END container for slider -->
            
            <p>Don't have an account? <a href="/user/signup">Sign Up</a></p>
        </section>
    </div>  

</div>
@endsection
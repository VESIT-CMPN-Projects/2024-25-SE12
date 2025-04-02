@extends('layouts.app')

@section('title', 'Login Page')

@section('styles')
        body {
            background-color: #f8f9fa;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .container {
            max-width: 900px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .left-panel {
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            color: white;
            position: relative;
            object-fit: cover;
            padding: 50px;
            max-height: 550px;
            margin-top: 20px;
        }

        .left-panel h3 {
            position: absolute;
            top: 4%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 25px;
            white-space: nowrap;
            background: rgb(255, 207, 63);
        }

        .right-panel {
            padding: 30px;
        }

        .auth-btn {
            background-color: #ffd700;
            border: none;
            font-weight: bold;
        }

        .auth-btn:hover {
            background-color: #e6c300;
        }

        .form-label {
            font-weight: bold;
        }

        #authTabs .nav-link {
            background-color: blue;
            color: white;
            border-radius: 5px;
        }

        #authTabs .nav-link.active {
            background-color: white;
            color: blue;
            border: 1px solid blue;
            border-radius: 5px;
        }

        .text-center {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .text-center button {
            margin-right: 10px;
        }

        .role-checkbox {
            margin-top: 10px;
            font-weight: bold;
        }
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 left-panel" style="background: url('{{ asset('assets/images/loginImage.jpg') }}') no-repeat center center;">
                <h3>Be The Next Change Maker!</h3>
            </div>
            <div class="col-md-7 right-panel">
                <h3 class="text-center">Be a part of Muskurate Raho!</h3>
                <ul class="nav nav-tabs justify-content-center" id="authTabs">
                    <li class="nav-item mb-3 mx-3">
                        <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login">Login</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" id="signup-tab" data-bs-toggle="tab" href="#signup">Sign up</a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="login">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="hidden" name="action" value="login"> 
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="mb-3 role-checkbox">
                                <label>Are you:</label>
                                <input type="radio" name="role" value="admin" required> Admin
                                <input type="radio" name="role" value="user" required> User
                            </div>
                            <button type="submit" class="btn btn-warning w-100 auth-btn">Login</button>
                        </form>
                    </div>

                    <!-- Signup Form -->
                    <div class="tab-pane fade" id="signup">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="hidden" name="action" value="signup"> 
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Create Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" required>
                                <label class="form-check-label">I agree to terms and conditions</label>
                            </div>
                            <div class="mb-3 role-checkbox">
                                <label>Are you:</label>
                                <input type="radio" name="role" value="admin" required> Admin
                                <input type="radio" name="role" value="user" required> User
                            </div>
                            <button type="submit" class="btn btn-warning w-100 auth-btn">Sign up</button>
                        </form>
                    </div>
                </div>
                <p class="text-center mt-3">Sign in With</p>
                <div class="text-center">
                    <button class="btn btn-light"><img src="https://img.icons8.com/color/24/000000/facebook-new.png" /></button>
                    <button class="btn btn-light"><img src="https://img.icons8.com/color/24/000000/google-logo.png" /></button>
                    <button class="btn btn-light"><img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png" /></button>
                </div>
            </div>
        </div>
    </div>
@endsection

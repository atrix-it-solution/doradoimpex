@extends('frontend.layouts.navbarlayout')

@section('title','SignIn')

@section('main')
<div class="signup-sign-form">
    <div class="container">
        <div class="login-container">
            <!-- Left Section -->
            <div class="login-left">
                <div class="icon">
                   <i class="fa-solid fa-user"></i>
                </div>
                <p>
                    Doradolmpex offers seamless 3D Printer and 3D Printing Material export.
                    We handle everything with expertise. Contact us today!
                </p>
            </div>

            <!-- Right Section -->
            <div class="login-right">
                <h3>SIGN IN</h3>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" id="login-form">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="links">
                        <a href="#">Forgot your password?</a> |
                        <a href="/signup">Create an Account!</a>
                    </div>
                    <button type="submit" class="btn">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('login-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = 'Signing in...';
    submitBtn.disabled = true;
    
    try {
        const response = await fetch('{{ route("login.submit") }}', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        });
        
        const data = await response.json();
        
        if (data.success) {
            // Use the global function to handle success
            if (typeof handleLoginSuccess === 'function') {
                handleLoginSuccess(data);
            } else {
                // Fallback: store directly and redirect
                localStorage.setItem('auth_token', data.token);
                localStorage.setItem('user_data', JSON.stringify(data.user));
                localStorage.setItem('token_expiry', (data.expires_at * 1000).toString());
                
                alert('Login successful! Welcome back, ' + data.user.name);
                window.location.href = data.redirect || '/';
            }
            
        } else {
            alert(data.message || 'Login failed. Please check your credentials.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred during login. Please try again.');
    } finally {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }
});

// Handle non-AJAX login (if user submits form normally)
document.addEventListener('DOMContentLoaded', function() {
    @if(session('auth_data'))
        console.log('🔄 Processing auth data from session');
        const authData = @json(session('auth_data'));
        if (authData && authData.token && authData.user) {
            console.log('✅ Storing session auth data in localStorage');
            localStorage.setItem('auth_token', authData.token);
            localStorage.setItem('user_data', JSON.stringify(authData.user));
            localStorage.setItem('token_expiry', (authData.expires_at * 1000).toString());
            
            if (typeof handleLoginSuccess === 'function') {
                handleLoginSuccess(authData);
            }
        }
    @endif
});
</script>
@endsection
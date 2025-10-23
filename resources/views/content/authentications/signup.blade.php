@extends('frontend.layouts.navbarlayout')

@section('title','Signup')

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
                   DoradoImpex offers seamless 3D Printer and 3D Printing Material export. we handle everything with expertise.Contact us today!
                </p>
            </div>

            <!-- Right Section -->
            <div class="login-right">
                <h3>SIGN UP</h3>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="register-Form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name*" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email*" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    <div class="links">
                        <a href="/signin" class="text-start">Already have an account? Sign In</a> 
                    </div>
                    <button type="submit" class="btn">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('register-Form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = 'Creating Account...';
    submitBtn.disabled = true;
    
    try {
        const response = await fetch('{{ route("register.submit") }}', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        });
        
        const data = await response.json();
        
        console.log('Registration response:', data);
        
        if (data.success) {
            console.log('✅ Registration successful, storing token for 24 hours');
            
            // Use the global function to handle success
            if (typeof handleRegisterSuccess === 'function') {
                handleRegisterSuccess(data);
            } else {
                // Fallback: store directly and redirect
                localStorage.setItem('auth_token', data.token);
                localStorage.setItem('user_data', JSON.stringify(data.user));
                localStorage.setItem('token_expiry', (data.expires_at * 1000).toString());
                
                console.log('✅ Token stored for 24 hours');
                alert('Registration successful! Welcome, ' + data.user.name);
                window.location.href = data.redirect || '/';
            }
            
        } else {
            // Show validation errors
            if (data.errors) {
                let errorMessage = '';
                for (const field in data.errors) {
                    errorMessage += data.errors[field].join('\n') + '\n';
                }
                alert(errorMessage.trim());
            } else {
                alert(data.message || 'Registration failed');
            }
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred during registration. Please try again.');
    } finally {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }
});

// Handle non-AJAX registration (if user submits form normally)
document.addEventListener('DOMContentLoaded', function() {
    @if(session('auth_data'))
        console.log('🔄 Processing registration auth data from session');
        const authData = @json(session('auth_data'));
        if (authData && authData.token && authData.user) {
            console.log('✅ Storing registration session auth data in localStorage');
            localStorage.setItem('auth_token', authData.token);
            localStorage.setItem('user_data', JSON.stringify(authData.user));
            localStorage.setItem('token_expiry', (authData.expires_at * 1000).toString());
            
            if (typeof handleRegisterSuccess === 'function') {
                handleRegisterSuccess(authData);
            }
        }
    @endif
});
</script>
@endsection
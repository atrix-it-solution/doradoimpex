<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Home</h1>

    <div id="auth-section">
        <button id="logout-btn" style="display: none;">
            <a href="javascript:void(0)" class="logout-link" onclick="logout()">Logout</a>
        </button>

        <button id="login-btn">
            <a href="/signin" class="login-link">Login</a>
        </button>

        <button id="register-btn">
            <a href="/signup" class="login-link">Register</a>
        </button>

        <!-- Dashboard button for admin users -->
        <button id="dashboard-btn" style="display: none; margin-left: 10px; background: #28a745; border: none; padding: 10px; border-radius: 5px;">
            <a href="/dashboard" style="color: white; text-decoration: none;">Dashboard</a>
        </button>
    </div>

    <div id="user-info" style="display: none; margin-top: 20px;">
        <h3>Welcome, <span id="user-name"></span>!</h3>
        <p>Role: <span id="user-role"></span></p>
        <p id="token-timer" style="font-size: 12px; color: #666;"></p>
    </div>

    <script>
    // Check authentication status on page load
    document.addEventListener('DOMContentLoaded', function() {
        checkAuthStatus();
        startTokenTimer();
    });

    function checkAuthStatus() {
        const token = localStorage.getItem('auth_token');
        const user = localStorage.getItem('user');
        
        if (token && user) {
            // User is logged in
            const userData = JSON.parse(user);
            
            // Update UI
            document.getElementById('logout-btn').style.display = 'block';
            document.getElementById('login-btn').style.display = 'none';
            document.getElementById('register-btn').style.display = 'none';
            
            // Show user info
            document.getElementById('user-info').style.display = 'block';
            document.getElementById('user-name').textContent = userData.name;
            document.getElementById('user-role').textContent = userData.role;
            
            // Show dashboard button for admin users
            if (userData.role === 'admin') {
                document.getElementById('dashboard-btn').style.display = 'block';
            }
            
            console.log('User is logged in:', userData);
        } else {
            // User is not logged in
            document.getElementById('logout-btn').style.display = 'none';
            document.getElementById('login-btn').style.display = 'block';
            document.getElementById('register-btn').style.display = 'block';
            document.getElementById('dashboard-btn').style.display = 'none';
            document.getElementById('user-info').style.display = 'none';
            
            console.log('User is not logged in');
        }
    }

    // Token expiration timer
    function startTokenTimer() {
        const token = localStorage.getItem('auth_token');
        const user = localStorage.getItem('user');
        
        if (!token || !user) return;

        const userData = JSON.parse(user);
        let expirationTime = localStorage.getItem('token_expires_at');
        
        if (!expirationTime) {
            // Set expiration time if not exists (5 minutes from now)
            expirationTime = Date.now() + (5 * 60 * 1000);
            localStorage.setItem('token_expires_at', expirationTime);
        }

        function updateTimer() {
            const now = Date.now();
            const timeLeft = expirationTime - now;
            
            if (timeLeft <= 0) {
                // Token expired
                localStorage.removeItem('auth_token');
                localStorage.removeItem('user');
                localStorage.removeItem('token_expires_at');
                alert('Your session has expired. Please login again.');
                window.location.href = '/signin';
                return;
            }
            
            const minutes = Math.floor(timeLeft / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
            
            const timerElement = document.getElementById('token-timer');
            if (timerElement) {
                timerElement.textContent = `Session expires in: ${minutes}:${seconds.toString().padStart(2, '0')}`;
                
                // Change color when less than 1 minute
                if (minutes < 1) {
                    timerElement.style.color = 'red';
                    timerElement.style.fontWeight = 'bold';
                }
            }
        }

        // Update timer every second
        updateTimer();
        setInterval(updateTimer, 1000);
    }

    // Auto-check token status every 30 seconds
    setInterval(async () => {
        const token = localStorage.getItem('auth_token');
        if (!token) return;

        try {
            const response = await fetch('/check-token', {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Accept': 'application/json',
                }
            });

            if (response.ok) {
                const data = await response.json();
                if (!data.valid) {
                    // Token expired
                    localStorage.removeItem('auth_token');
                    localStorage.removeItem('user');
                    localStorage.removeItem('token_expires_at');
                    alert('Your session has expired. Please login again.');
                    window.location.href = '/signin';
                }
            }
        } catch (error) {
            console.error('Token check failed:', error);
        }
    }, 30000);

    // Simple logout function
    async function logout() {
        const token = localStorage.getItem('auth_token');
        
        try {
            if (token) {
                await fetch('/logout', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${token}`
                    }
                });
            }
        } catch (error) {
            console.error('Logout error:', error);
        } finally {
            // Always clear everything
            localStorage.removeItem('auth_token');
            localStorage.removeItem('user');
            localStorage.removeItem('token_expires_at');
            
            // Redirect to login
            window.location.href = '/signin';
        }
    }
    </script>
</body>
</html>
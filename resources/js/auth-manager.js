// Enhanced auth functions with 5-minute expiration for testing
class AuthManager {

    static getToken() {
        return localStorage.getItem('auth_token');
    }

    static getUser() {
        const user = localStorage.getItem('user');
        return user ? JSON.parse(user) : null;
    }

    static isLoggedIn() {
        return this.getToken() !== null;
    }

    static isAdmin() {
        const user = this.getUser();
        return user && user.role === 'admin';
    }

    static setAuthData(token, user, expiresAt, expiresIn) {
        const authData = {
            token: token,
            user: user,
            expires_at: expiresAt,
            expires_in: expiresIn
        };
        localStorage.setItem('auth_data', JSON.stringify(authData));
        
        console.log('Token stored. Expires in:', expiresIn, 'seconds');
    }

    static getAuthData() {
        const authData = localStorage.getItem('auth_data');
        if (!authData) return null;
        
        return JSON.parse(authData);
    }

    static getToken() {
        const authData = this.getAuthData();
        if (!authData) return null;
        
        // Check if token is expired
        if (this.isTokenExpired(authData.expires_at)) {
            console.log('Token expired. Clearing auth data.');
            this.clearAuthData();
            return null;
        }
        
        return authData.token;
    }

    static getUser() {
        const authData = this.getAuthData();
        if (!authData) return null;
        
        // Check if token is expired
        if (this.isTokenExpired(authData.expires_at)) {
            console.log('Token expired. Clearing auth data.');
            this.clearAuthData();
            return null;
        }
        
        return authData.user;
    }

    static isTokenExpired(expiresAt) {
        const expired = Date.now() >= expiresAt * 1000;
        if (expired) {
            console.log('Token expired at:', new Date(expiresAt * 1000));
        }
        return expired;
    }

    static clearAuthData() {
        localStorage.removeItem('auth_data');
        console.log('Auth data cleared from localStorage');
    }

    static getTimeUntilExpiration(expiresAt) {
        const now = Date.now();
        const expirationTime = expiresAt * 1000;
        const timeRemaining = expirationTime - now;
        
        console.log('Time until expiration:', Math.round(timeRemaining / 1000), 'seconds');
        return timeRemaining;
    }

    static scheduleTokenCleanup(expiresAt) {
        const timeUntilExpiration = this.getTimeUntilExpiration(expiresAt);
        
        if (timeUntilExpiration > 0) {
            console.log('Scheduling token cleanup in', Math.round(timeUntilExpiration / 1000), 'seconds');
            
            // Schedule cleanup when token expires
            setTimeout(() => {
                console.log('Scheduled token cleanup executed');
                this.clearAuthData();
                this.redirectToLogin();
            }, timeUntilExpiration);
        } else {
            // Token already expired
            console.log('Token already expired, clearing immediately');
            this.clearAuthData();
        }
    }

    static redirectToLogin() {
        // Show message and redirect to login
        alert('Your session has expired (5-minute test). Please login again.');
        window.location.href = '/login';
    }

    static init() {
        console.log('AuthManager initialized');
        const authData = this.getAuthData();
        
        if (authData && !this.isTokenExpired(authData.expires_at)) {
            console.log('User is authenticated');
            this.updateUI(authData.user);
            this.scheduleTokenCleanup(authData.expires_at);
            
            // Show countdown timer for testing
            this.startCountdownTimer(authData.expires_at);
        } else {
            console.log('User is not authenticated or token expired');
            this.clearAuthData();
            this.showLoginUI();
        }
    }

    static startCountdownTimer(expiresAt) {
        // Create or update countdown display
        let countdownElement = document.getElementById('token-countdown');
        if (!countdownElement) {
            countdownElement = document.createElement('div');
            countdownElement.id = 'token-countdown';
            countdownElement.style.cssText = `
                position: fixed;
                top: 10px;
                right: 10px;
                background: #ff4444;
                color: white;
                padding: 10px;
                border-radius: 5px;
                z-index: 10000;
                font-family: monospace;
                font-weight: bold;
            `;
            document.body.appendChild(countdownElement);
        }

        function updateCountdown() {
            const now = Date.now();
            const expirationTime = expiresAt * 1000;
            const timeRemaining = Math.max(0, expirationTime - now);
            const minutes = Math.floor(timeRemaining / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
            
            countdownElement.textContent = `Token expires in: ${minutes}:${seconds.toString().padStart(2, '0')}`;
            
            if (timeRemaining <= 0) {
                clearInterval(countdownInterval);
                countdownElement.textContent = 'Token EXPIRED!';
                countdownElement.style.background = '#ff0000';
            }
        }

        // Update every second
        const countdownInterval = setInterval(updateCountdown, 1000);
        updateCountdown(); // Initial call
    }

    static updateUI(userData) {
        console.log('Updating UI for user:', userData.name);
        const loginLinks = document.querySelectorAll('.login-link');
        const logoutLinks = document.querySelectorAll('.logout-link');
        const userInfo = document.querySelectorAll('.user-info');
        const userRole = document.querySelectorAll('.user-role');
        
        loginLinks.forEach(link => link.style.display = 'none');
        logoutLinks.forEach(link => link.style.display = 'block');
        userInfo.forEach(element => {
            element.textContent = userData.name;
        });
        userRole.forEach(element => {
            element.textContent = userData.role.charAt(0).toUpperCase() + userData.role.slice(1);
        });
    }

    static showLoginUI() {
        console.log('Showing login UI');
        const loginLinks = document.querySelectorAll('.login-link');
        const logoutLinks = document.querySelectorAll('.logout-link');
        
        loginLinks.forEach(link => link.style.display = 'block');
        logoutLinks.forEach(link => link.style.display = 'none');
        
        // Remove countdown timer if exists
        const countdownElement = document.getElementById('token-countdown');
        if (countdownElement) {
            countdownElement.remove();
        }
    }

    static async checkTokenStatus() {
        try {
            const response = await fetch('/api/check-token', {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${this.getToken()}`,
                    'Accept': 'application/json',
                }
            });
            
            const data = await response.json();
            console.log('Token status check:', data);
            
            if (!data.valid) {
                this.clearAuthData();
                this.redirectToLogin();
            }
            
            return data;
        } catch (error) {
            console.error('Token status check failed:', error);
            return null;
        }
    }

    static logout() {
        console.log('Logging out...');
        fetch('/logout', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            },
        })
        .then(() => {
            this.clearAuthData();
            window.location.href = '/';
        })
        .catch(error => {
            console.error('Logout error:', error);
            this.clearAuthData();
            window.location.href = '/';
        });
    }
}

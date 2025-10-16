class Auth {
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

    static isCustomer() {
        const user = this.getUser();
        return user && user.role === 'customer';
    }

    static logout() {
        localStorage.removeItem('auth_token');
        localStorage.removeItem('user');
        window.location.href = '/';
    }

    static async makeAuthenticatedRequest(url, options = {}) {
        const token = this.getToken();
        
        const defaultOptions = {
            headers: {
                'Authorization': `Bearer ${token}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            }
        };

        const mergedOptions = {
            ...defaultOptions,
            ...options,
            headers: {
                ...defaultOptions.headers,
                ...options.headers,
            }
        };

        const response = await fetch(url, mergedOptions);
        return response;
    }
}

// Auto-include token in all fetch requests
const originalFetch = window.fetch;
window.fetch = function(url, options = {}) {
    const token = Auth.getToken();
    if (token && !options.headers?.['Authorization']) {
        options.headers = {
            ...options.headers,
            'Authorization': `Bearer ${token}`
        };
    }
    return originalFetch(url, options);
};

export default Auth;
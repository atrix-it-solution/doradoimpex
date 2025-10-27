<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Doradoimpex</title>
    <!-- Bootstrap Cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- fontawesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- slick slider cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/application-page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/products-pages.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/signup-signin-form.css') }}">




</head>

<body>

    <!-- ================ Navbar Start ================ -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-bg px-2">
        <div class="container">
            <div class="col-3">
                <a class="navbar-brand d-flex" href="/">
                    <div style="width: 150px;">
                        <img src="{{ asset('assets/img/images/Dorado-Impex-Logo-TM-Mark.png') }}" alt="Doradoimpex Logo" class="img-fluid">
                    </div>

                </a>
            </div>

            <button class="navbar-toggler align-self-end" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll flex-grow-1 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Applications
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/applications/automotive">Automotive</a></li>
                            <li><a class="dropdown-item" href="/applications/aerospace">Aerospace</a></li>
                            <li><a class="dropdown-item" href="/applications/dental-industry">Dental Industry</a></li>
                            <li><a class="dropdown-item" href="/applications/jewelry-industry">Jewelry Industry</a></li>
                            <li><a class="dropdown-item" href="/applications/industrial-engineering">Industrial Engineering</a>
                            </li>
                            <li><a class="dropdown-item" href="/applications/3d-printing-consumables">3D Printing Consumables</a>
                            </li>
                            <li><a class="dropdown-item" href="/applications/additive-manufacturing">Additive Manufacturing</a>
                            </li>
                            <li><a class="dropdown-item" href="/applications/educational-applications">Educational
                                    Applications</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/products/3d-printer">3D Printer</a></li>
                            <li><a class="dropdown-item" href="/products/3d-printer-software">3D Printer Software</a></li>
                            <li><a class="dropdown-item" href="/products/3d-printing-resin">3D Printing Resin</a></li>
                            <li><a class="dropdown-item" href="/products/3d-printing-service">3D Printing Service</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>

            </div>
             <div class="col-3 d-none d-lg-block">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll d-lg-flex justify-content-end d-none" id="auth-nav">
                <!-- Login/Register Links (shown when user is NOT logged in) -->
                <li class="nav-item" id="register-item">
                    <a class="nav-link" href="/signup"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li class="nav-item" id="login-item">
                    <a class="nav-link" href="/signin"><i class="fa-solid fa-user"></i> Sign In</a>
                </li>
                
                <!-- User Info & Logout Links (shown when user IS logged in) -->
                <li class="nav-item d-none" id="user-info-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-user-circle"></i> <span id="user-name">User</span>
                    </a>
                </li>
                <li class="nav-item d-none" id="logout-item">
                    <a class="nav-link" href="#" id="logout-btn">
                        <i class="fa-solid fa-sign-out-alt"></i> Sign Out
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- ================ Navbar End ================ -->

<meta name="csrf-token" content="{{ csrf_token() }}">
    <main>
        @yield('main')
    </main>



     <!-- ================ Footer Start ================ -->
    <footer class="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 pe-lg-4">
                    <div class="footer-logo" style="width: 205px;">
                        <a href="/"><img src="{{ asset('assets/img/images/Dorado-Impex-Logo-TM-Mark.png') }}" alt="footer logo"
                                class="img-fluid"></a>
                    </div>
                    <p class="mt-4 ">Welcome to DoradoImpex, your trusted partner for premium imports and exports. We
                        specialize in delivering high-quality products worldwide, ensuring excellence in every
                        transaction.</p>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="fw-semibold border-bottom border-3 border-primary d-inline-block pb-3 mb-2">Quick Links
                    </h4>
                    <ul class="ps-lg-0 ps-3">
                        <li> <a href="/about">About Us</a> </li>
                        <li><a href="/blog">Our Blogs</a></li>
                        <li><a href="/contact">Contact us</a></li>
                        <li><a href="/signin">Sign In</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-12">
                    <div class=" d-flex justify-content-center">
                        <h4 class="fw-semibold  border-bottom border-3 border-primary d-inline-block pb-3 mb-2">Our
                            Applications</h4>
                    </div>
                    <ul class="our-app-list">
                        <li> <a href="/applications/automotive">Automotive</a></li>
                        <li><a href="/applications/aerospace">Aerospace</a></li>
                        <li><a href="/applications/dental-industry">Dental Industry</a></li>
                        <li><a href="/applications/jewelry-industry">Jewelry Industry</a></li>
                        <li><a href="/applications/industrial-engineering">Industrial Engineering</a></li>
                        <li><a href="/applications/3d-printing-consumables">3D Printing Consumables</a></li>
                        <li><a href="/applications/additive-manufacturing">Additive Manufacturing</a></li>
                        <li><a href="/applications/educational-applications">Educational Applications</a></li>

                    </ul>
                </div>
                <div class="col-lg-2 col-12 ">
                    <h4 class="fw-semibold border-bottom border-3 border-primary d-inline-block pb-3 mb-2">Legal
                        Info
                    </h4>

                    <ul class=" ps-lg-0 ps-3">
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/cookie-policy">Cookie Policy</a></li>
                        <li><a href="/terms-and-condition">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="fw-semibold border-bottom border-3 border-primary d-inline-block pb-3 mb-2">Contact Info
                    </h4>
                    <ul class="list-unstyled ps-0">
                        <li>
                            <div class="d-flex">
                                <div class="icon pe-2"><i class="fa-solid fa-phone"></i> </div>
                                <div class="content">(659) 208-7410</div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="icon pe-2"><i class="fa-solid fa-envelope"></i> </div>
                                <div class="content">contact@doradoimpex.c om</div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="icon pe-2"><i class="fa-solid fa-location-dot"></i> </div>
                                <div class="content">1207/343 & 1207/1/343/1, 9th Main, 7th Sector, HSR Layout Bangalore
                                    Karnataka 560102</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

    </footer>
    <!-- ================ Footer End ================ -->

    <!-- ================ Footer Policy Start ================ -->
    <div class="term-policy pt-4">
        <div class="container">
            <div class="row justify-content-between py-2 mt-3">
                <div class="col-lg-12 col-12"><span class="copyright-para">© 2025 DoradoImpex. All Rights Reserved. The
                        information in this website/document is for promotional purposes only and not contractual. No
                        part of this website/document may be reproduced or transmitted in any form or by any means
                        without the prior written permission of DoradoImpex .</span></div>
            </div>
            <div class="py-2 copyright-para" style="font-size:12px">DoradoImpex is an independent support company,
                unaffiliated with any manufacturers. All brand names, trademarks, and logos on our site belong to their
                respective owners and are used for reference only. Our expert technicians provide support and repair
                services , but we do not sell or endorse any specific brand. By using our services, you agree that
                DoradoImpex is not responsible for warranties or guarantees from original manufacturers. For official
                support and warranties, contact the manufacturers directly.</div>
            <div class="py-2 copyright-para"><strong>Information collected:</strong><br><strong>Webforms:</strong>
                doradoimpex.com uses webforms on this site. These forms require users to give contact information [First
                and last name/ Email address/ Phone Number ]. Contact information from the registration form is used to
                send material relating to the Service for which it was collected and may be shared with our advertising
                partners or other third parties for advertising purposes. <br>If you complete an intake form, we collect
                the following personal information: [First and last name/ Email address/ Phone Number ].</div>
            <div class="py-2 copyright-para"><strong>Analytics:</strong> doradoimpex.com servers collect the following
                analytics: <br>• Anonymized conversion data through customer action button.<br><strong>Third Party Data
                    Collection:</strong> In addition, our website utilizes Microsoft Advertising, and we created our
                website using Smart Pages. Microsoft will collect and share the following information with DoradoImpex
                in accordance with their Privacy Statement at<!-- --> <a target="_blank" rel="noreferrer"
                    class="text-warning" href="https://www.microsoft.com/en-us/privacy/privacystatement">Microsoft
                    Privacy Statement</a>.<br>• Conversion data if you click a customer action button from an ad.<br>•
                Personal data associated with the action button, including: [First and last name/ Email address/ Phone
                Number ].</div>
            <div class="py-2 mb-5 copyright-para">Microsoft will use the above information in accordance with their
                Privacy Statement at<!-- --> <a target="_blank" rel="noreferrer" class="text-warning"
                    href="https://www.microsoft.com/en-us/privacy/privacystatement">Microsoft Privacy Statement</a>
                <!-- -->for the following purposes: <br>• To show you ads that are more personalized.<br>• To improve
                their advertising products and services.<br>• Smart Page website optimization and
                troubleshooting.<br>Microsoft account users can manage their ad settings and opt-out of personalized
                advertising with DoradoImpex at:<!-- --> <a target="_blank" rel="noreferrer" class="text-warning"
                    href="https://www.microsoft.com/en-us/privacy/privacystatement">Microsoft account | Privacy</a>.
            </div>
        </div>
    </div>
    <!-- ================ Footer Policy End ================ -->


    <!-- Bootstrap JS Cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <!-- Slick slider cdn   -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom js file   -->
    <script src="{{ Vite::asset('resources/assets/js/script.js') }}"></script>

    <script>
        class AuthManager {
            constructor() {
                this.tokenKey = 'auth_token';
                this.userKey = 'user_data';
                this.expiryKey = 'token_expiry';
                this.init();
            }

            init() {
                this.checkAuthStatus();
                this.setupLogoutHandler();
                this.startTokenChecker();
            }

            // Store auth data in localStorage
            storeAuthData(token, user, expiresIn) {
                const expiryTime = Date.now() + (expiresIn * 1000);
                
                localStorage.setItem(this.tokenKey, token);
                localStorage.setItem(this.userKey, JSON.stringify(user));
                localStorage.setItem(this.expiryKey, expiryTime.toString());
                
                // console.log('✅ Auth data stored. Expires in:', this.formatSeconds(expiresIn));
                this.updateUI();
            }

            // Get stored token
            getToken() {
                return localStorage.getItem(this.tokenKey);
            }

            // Get stored user data
            getUser() {
                try {
                    const userData = localStorage.getItem(this.userKey);
                    return userData ? JSON.parse(userData) : null;
                } catch (e) {
                    // console.error('❌ Error parsing user data:', e);
                    return null;
                }
            }

            // Check if token is valid
            isTokenValid() {
                const token = this.getToken();
                const expiry = localStorage.getItem(this.expiryKey);
                
                if (!token || !expiry) {
                    return false;
                }
                
                const isValid = Date.now() < parseInt(expiry);
                // console.log('🔐 Token valid:', isValid, 'Time left:', this.formatTimeRemaining());
                return isValid;
            }

            // Check auth status and update UI
            async checkAuthStatus() {
                // console.log('🔄 Checking auth status...');
                
                if (this.isTokenValid()) {
                    // console.log('✅ User is logged in');
                    this.updateUI();
                } else {
                    // console.log('❌ User is not logged in');
                    this.clearAuthData();
                    this.showLoginRegister();
                }
            }

            // Update UI based on auth status
            updateUI() {
                const user = this.getUser();
                const registerItem = document.getElementById('register-item');
                const loginItem = document.getElementById('login-item');
                const userInfoItem = document.getElementById('user-info-item');
                const logoutItem = document.getElementById('logout-item');
                const userName = document.getElementById('user-name');

                if (user && this.isTokenValid()) {
                    // User is logged in
                    if (registerItem) registerItem.classList.add('d-none');
                    if (loginItem) loginItem.classList.add('d-none');
                    if (userInfoItem) userInfoItem.classList.remove('d-none');
                    if (logoutItem) logoutItem.classList.remove('d-none');
                    if (userName) userName.textContent = user.name;
                    
                    // console.log('✅ UI updated: User logged in as', user.name);
                } else {
                    // User is not logged in
                    this.showLoginRegister();
                }
            }

            // Show login/register links
            showLoginRegister() {
                const registerItem = document.getElementById('register-item');
                const loginItem = document.getElementById('login-item');
                const userInfoItem = document.getElementById('user-info-item');
                const logoutItem = document.getElementById('logout-item');

                if (registerItem) registerItem.classList.remove('d-none');
                if (loginItem) loginItem.classList.remove('d-none');
                if (userInfoItem) userInfoItem.classList.add('d-none');
                if (logoutItem) logoutItem.classList.add('d-none');
                
                // console.log('👤 Showing login/register links');
            }

            // Clear auth data from localStorage
            clearAuthData() {
                localStorage.removeItem(this.tokenKey);
                localStorage.removeItem(this.userKey);
                localStorage.removeItem(this.expiryKey);
                // console.log('🗑️ Auth data cleared from localStorage');
                this.updateUI();
            }

            // Setup logout handler
            setupLogoutHandler() {
                document.addEventListener('click', (e) => {
                    if (e.target.id === 'logout-btn' || e.target.closest('#logout-btn')) {
                        e.preventDefault();
                        this.logout();
                    }
                });
            }

            // Logout function
            async logout() {
                try {
                    const token = this.getToken();
                    
                    if (token) {
                        await fetch('/logout', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Authorization': `Bearer ${token}`,
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({ force_logout: true })
                        });
                    }
                } catch (error) {
                    console.error('Logout API error:', error);
                } finally {
                    this.clearAuthData();
                    alert('You have been logged out successfully!');
                    window.location.href = '/';
                }
            }

            // Start periodic token checker (check every 5 minutes instead of 30 seconds)
            startTokenChecker() {
                setInterval(() => {
                    this.checkAuthStatus();
                }, 5 * 60 * 1000); // 5 minutes

                // Also check when page becomes visible
                document.addEventListener('visibilitychange', () => {
                    if (!document.hidden) {
                        this.checkAuthStatus();
                    }
                });
            }

            // Get time remaining until token expires
            getTimeRemaining() {
                const expiry = localStorage.getItem(this.expiryKey);
                if (!expiry) return 0;
                
                const timeLeft = parseInt(expiry) - Date.now();
                return Math.max(0, timeLeft);
            }

            // Format time for display
            formatTimeRemaining() {
                const timeLeft = this.getTimeRemaining();
                if (timeLeft <= 0) return 'Expired';
                
                const hours = Math.floor(timeLeft / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                
                if (hours > 0) {
                    return `${hours}h ${minutes}m ${seconds}s`;
                } else if (minutes > 0) {
                    return `${minutes}m ${seconds}s`;
                } else {
                    return `${seconds}s`;
                }
            }

            // Format seconds to readable time
            formatSeconds(seconds) {
                const hours = Math.floor(seconds / 3600);
                const minutes = Math.floor((seconds % 3600) / 60);
                const secs = seconds % 60;
                
                if (hours > 0) {
                    return `${hours}h ${minutes}m ${secs}s`;
                } else if (minutes > 0) {
                    return `${minutes}m ${secs}s`;
                } else {
                    return `${secs}s`;
                }
            }
        }

        // Initialize auth manager when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            window.authManager = new AuthManager();
            
            // Prevent access to login/register pages if already logged in
            const token = localStorage.getItem('auth_token');
            const user = localStorage.getItem('user_data');
            const expiry = localStorage.getItem('token_expiry');
            
            if (token && user && expiry && Date.now() < parseInt(expiry)) {
                const currentPath = window.location.pathname;
                
                // Redirect if trying to access login/register while logged in
                if (currentPath === '/signin' || currentPath === '/signup') {
                    window.location.href = '/';
                }
            }
        });

        // Global functions for login/register success
        async function handleLoginSuccess(responseData) {
            // console.log('Login success:', responseData);
            if (responseData.token && responseData.user) {
                // Store auth data
                if (window.authManager) {
                    window.authManager.storeAuthData(
                        responseData.token,
                        responseData.user,
                        responseData.expires_in || (24 * 60 * 60) // Default to 24 hours if not provided
                    );
                } else {
                    // Fallback storage
                    localStorage.setItem('auth_token', responseData.token);
                    localStorage.setItem('user_data', JSON.stringify(responseData.user));
                    localStorage.setItem('token_expiry', (Date.now() + (responseData.expires_in || 24 * 60 * 60) * 1000).toString());
                }
                
                // Show welcome message
                alert('Welcome back, ' + responseData.user.name + '!');
                
                // Redirect
                if (responseData.redirect) {
                    setTimeout(() => {
                        window.location.href = responseData.redirect;
                    }, 1000);
                }
            }
        }

        async function handleRegisterSuccess(responseData) {
            // console.log('Register success:', responseData);
            if (responseData.token && responseData.user) {
                // Store auth data
                if (window.authManager) {
                    window.authManager.storeAuthData(
                        responseData.token,
                        responseData.user,
                        responseData.expires_in || (24 * 60 * 60) // Default to 24 hours if not provided
                    );
                } else {
                    // Fallback storage
                    localStorage.setItem('auth_token', responseData.token);
                    localStorage.setItem('user_data', JSON.stringify(responseData.user));
                    localStorage.setItem('token_expiry', (Date.now() + (responseData.expires_in || 24 * 60 * 60) * 1000).toString());
                }
                
                // Show welcome message
                alert('Welcome to DoradoImpex, ' + responseData.user.name + '!');
                
                // Redirect
                if (responseData.redirect) {
                    setTimeout(() => {
                        window.location.href = responseData.redirect;
                    }, 1000);
                }
            }
        }

        // Auto-logout when token expires
        function startAutoLogoutTimer() {
            const expiry = localStorage.getItem('token_expiry');
            if (!expiry) return;

            const timeUntilExpiry = parseInt(expiry) - Date.now();
            
            if (timeUntilExpiry > 0) {
                setTimeout(async () => {
                    if (window.authManager) {
                        await window.authManager.checkAuthStatus();
                    }
                }, timeUntilExpiry + 1000); // Check 1 second after expected expiry
            }
        }

        // Start auto-logout timer
        document.addEventListener('DOMContentLoaded', startAutoLogoutTimer);
    </script>
</body>

</html>
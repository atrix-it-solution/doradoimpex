<!-- BEGIN: Vendor JS-->

@vite(['resources/assets/vendor/libs/jquery/jquery.js', 'resources/assets/vendor/libs/popper/popper.js', 'resources/assets/vendor/js/bootstrap.js'])

@vite(['resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js', 'resources/assets/vendor/js/menu.js'])

@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
@vite(['resources/assets/js/main.js'])

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->

<!-- app JS -->
@vite(['resources/js/app.js'])
<!-- END: app JS-->


<script>
    document.addEventListener("DOMContentLoaded", function () {
        let titleInput = document.querySelector('input[name="title"]'); // ✅ match form field
        let slugInput  = document.querySelector('input[name="slug"]'); // ✅ match slug field

        if (titleInput && slugInput) {
            // Function to generate slug
            function generateSlug(text) {
                return text
                    .toString()
                    .normalize("NFD")                   
                    .replace(/[\u0300-\u036f]/g, "")    
                    .toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, "")       
                    .replace(/\s+/g, '-')               
                    .replace(/-+/g, '-');               
            }

            // Update slug while typing in name field
            titleInput.addEventListener("input", function () {
                slugInput.value = generateSlug(this.value);
            });
        }
    });
</script>

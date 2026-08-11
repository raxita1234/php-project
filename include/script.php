   <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/js/owl.carousel.min.js"></script>
        <script src="asset/js/jquery.appear.js"></script>
        <script src="asset/js/jquery.fitvids.js"></script>
        <script src="asset/js/jquery.nicescroll.min.js"></script>
        <script src="asset/js/lightbox.min.js"></script>
        <script src="asset/js/count-to.js"></script>
        <script src="asset/js/styleswitcher.js"></script>
        
        <script src="asset/js/map.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="asset/js/script.js"></script> 
        <script src="asset/js/modernizrr.js"></script>
        <script>
    // Wait for page load
    window.addEventListener('load', function() {
        // Force delay of 1 seconds (1000ms) even if page loads faster
        setTimeout(function() {
            document.body.classList.add('loaded'); // trigger fade out
            // Remove loader completely after fade-out
            setTimeout(function() {
                const loader = document.getElementById('loader');
                if(loader) loader.style.display = 'none';
            }, 300);
        }, 150); // change 2000 to any milliseconds for longer/shorter delay
    });
</script>

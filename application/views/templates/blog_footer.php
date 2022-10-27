<footer class="blue darken-2 white-text center">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; PEMDUSI Web Dev <?= date('Y'); ?>.</span>
        </div>
    </div>
</footer>



<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>js/materialize.min.js"></script>

<script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 600,
        interval: 5000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
        scrollOffset: 50
    });

    const dropdown = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(dropdown);
</script>

</body>

</html>
<script>
document.getElementById('sidebarToggle').addEventListener('click', function() {
    var sidebar = document.getElementById('separator-sidebar');
    sidebar.classList.toggle('-translate-x-full');
});
document.addEventListener('click', function(event) {
    var sidebar = document.getElementById('separator-sidebar');
    var toggleButton = document.getElementById('sidebarToggle');
    if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
        sidebar.classList.add('-translate-x-full');
    }
});
</script>
</body>

</html>
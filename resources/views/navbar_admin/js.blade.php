<script>
    function nav_item_click(index) {
        const arrow_navbar = document.getElementsByName('arrow_navbar')[index]
        const subNav = document.getElementsByName('sub_navbar')[index]
        arrow_navbar.classList.toggle('active');

        if (subNav.style.display === 'block') {
            subNav.classList.add('closing');
            setTimeout(() => {
                subNav.style.display = 'none';
                subNav.classList.remove('closing');
            }, 300); // Ubah ke sesuai durasi animasi (ms)
        } else {
            subNav.style.display = 'block';
        }
    }

</script>

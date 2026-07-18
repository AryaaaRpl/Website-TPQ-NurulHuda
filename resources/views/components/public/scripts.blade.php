<script>
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      navbar.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-emerald-50');
      navbar.classList.remove('bg-transparent');
    } else {
      navbar.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-emerald-50');
      navbar.classList.add('bg-transparent');
    }
  });

  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const iconMenu = document.getElementById('icon-menu');
  const iconClose = document.getElementById('icon-close');
  let menuOpen = false;

  function setMenu(open) {
    menuOpen = open;
    if (open) {
      mobileMenu.classList.remove('max-h-0');
      mobileMenu.classList.add('max-h-80', 'border-t', 'border-emerald-50');
      iconMenu.classList.add('hidden');
      iconClose.classList.remove('hidden');
    } else {
      mobileMenu.classList.add('max-h-0');
      mobileMenu.classList.remove('max-h-80', 'border-t', 'border-emerald-50');
      iconMenu.classList.remove('hidden');
      iconClose.classList.add('hidden');
    }
  }

  menuToggle.addEventListener('click', () => setMenu(!menuOpen));

  document.querySelectorAll('.scroll-btn, .nav-link').forEach(btn => {
    btn.addEventListener('click', () => {
      const id = btn.dataset.link;
      const target = document.getElementById(id);
      if (target) target.scrollIntoView({ behavior: 'smooth' });
      setMenu(false);
    });
  });
</script>

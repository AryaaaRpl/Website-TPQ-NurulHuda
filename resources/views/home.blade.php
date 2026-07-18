<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TPQ Nurul Huda — Taman Pendidikan Al-Qur'an</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          emerald: {
            50:'#ecfdf5',100:'#d1fae5',200:'#a7f3d0',300:'#6ee7b7',400:'#34d399',
            500:'#10b981',600:'#059669',700:'#047857',800:'#065f46',900:'#064e3b'
          }
        }
      }
    }
  }
</script>
<style>
  html { scroll-behavior: smooth; }
  body { font-family: 'Plus Jakarta Sans', sans-serif; }
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: transparent; }
  ::-webkit-scrollbar-thumb { background: #d1fae5; border-radius: 3px; }
  ::-webkit-scrollbar-thumb:hover { background: #059669; }
</style>
</head>
<body class="min-h-screen bg-white">

  @include('components.public.navbar', ['transparent' => true])

  @include('components.public.hero')

  @include('components.public.stats')

  @include('components.public.programs')

  @include('components.public.gallery')

  @include('components.public.testimonials')

  @include('components.public.cta')

  @include('components.public.footer')

  @include('components.public.scripts')

</body>
</html>

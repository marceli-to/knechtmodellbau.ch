<body class="bg-white font-book text-black text-sm md:text-md antialiased leading-[1.40] lg:leading-[1.45] flex min-h-screen flex-col px-30 md:px-35 lg:px-30">
{{ $slot }}
@vite('resources/js/app.js')
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8B07F1F8F6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-8B07F1F8F6');
</script>
</body>
</html>
<!-- made with ❤ by wbg.ch & marceli.to -->

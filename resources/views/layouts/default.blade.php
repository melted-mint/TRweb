<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Melted_Mint - Site')</title>
    <meta name="description" content="@yield('description', 'Melted_Mint - Site')">
    <meta name="author" content="Melted_Mint">
    <meta property="og:site_name" content="Melted_Mint">
    <meta property="og:title" content="@yield('title', 'Melted_Mint - Site')">
    <meta property="og:description" content="@yield('description', 'Melted_Mint - Site')">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="viewport" content="width=device-width">
    <!-- 예: CSS 파일 -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
</head>
<body>
  @include('components/navbar')

    <!-- 사이드바 (카테고리, 태그 등) -->
    <aside style="float: left; width: 200px; padding: 1rem; border-right: 1px solid #ccc;">
      <h3>카테고리</h3>
      <!-- 예: /category/{slug} 라우트 (Life 카테고리) -->
      <a href="{{ route( 'home', 'Life') }}">Life</a> (1)

      <h3 style="margin-top: 1rem;">태그</h3>
      <!-- 예: /tag/{slug} 라우트 (test 태그) -->
      <a href="{{ route('home', 'test') }}">test</a>
    </aside>

    <!-- 메인 컨텐츠 영역 -->
    <main style="margin-left: 220px; padding: 1rem;">
      <!-- 이 부분에 페이지별 내용이 들어갑니다. -->
      @yield('content')

      <!-- 예: pagination -->
      <div style="margin-top: 2rem;">
        {{-- 페이지네이션 예시 --}}
        <a href="#" aria-label="First Page">««</a>
        <a href="#" aria-label="Prev Page">«</a>
        <span>1</span>
        <a href="#" aria-label="Next Page">»</a>
        <a href="#" aria-label="Last Page">»»</a>
      </div>

      <!-- 데스크톱 푸터 -->
      <footer style="margin-top: 2rem; border-top: 1px dashed #ccc; padding-top: 1rem;">
        &copy; <span id="year">2025</span> Melted_Mint. All Rights Reserved.
        / <a href="{{ route('home') }}" target="_blank">RSS</a>
        / <a href="{{ route('home') }}" target="_blank">Sitemap</a>
        <br>
        Powered by
        <a href="https://astro.build" target="_blank">Astro</a> &
        <a href="https://github.com/saicaca/fuwari" target="_blank">Fuwari</a>
      </footer>
    </main>

    <!-- 모바일 푸터 (예시) -->
    <footer style="clear: both; margin-top: 2rem; border-top: 1px dashed #ccc; padding-top: 1rem;">
      <!-- 필요 시 다른 내용 -->
      &copy; <span>2025</span> Melted_Mint. All Rights Reserved.
      / <a href="{{ route('home') }}" target="_blank">RSS</a>
      / <a href="{{ route('home') }}" target="_blank">Sitemap</a>
      <br>
      Powered by
      <a href="https://astro.build" target="_blank">Astro</a> &
      <a href="https://github.com/saicaca/fuwari" target="_blank">Fuwari</a>
    </footer>

    <!-- 상/하단 이동 버튼 (필요 시) -->
    <div style="position: fixed; bottom: 20px; right: 20px;">
      <button aria-label="Back to Top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
        ↑ Top
      </button>
      <button aria-label="Go to Bottom" onclick="window.scrollTo({ top: 9999999, behavior: 'smooth' });">
        ↓ Bottom
      </button>
    </div>
</body>
</html>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head />

<body class="dark:bg-neutral-800 bg-neutral-100 dark:text-white">

    <!-- ..::  header area start ::.. -->
    <x-sidebar />
    <!-- ..::  header area end ::.. -->

    <main class="dashboard-main">

        <!-- ..::  navbar start ::.. -->
        <x-navbar />
        <!-- ..::  navbar end ::.. -->
        <div class="dashboard-main-body">

            {{ $slot }}

        </div>
        <!-- ..::  footer  start ::.. -->
        <x-footer />
        <!-- ..::  footer area end ::.. -->

    </main>

    <!-- ..::  scripts  start ::.. -->
    <x-script :scripts="['apexcharts', 'datatables', 'iconify', 'jquery-ui', 'vectormap', 'popup', 'slick', 'prism', 'file-upload', 'audioplayer', 'homeOneChart']" :customScript="isset($script) ? $script : ''" />
    <!-- ..::  scripts  end ::.. -->

    @stack('js')
</body>

</html>

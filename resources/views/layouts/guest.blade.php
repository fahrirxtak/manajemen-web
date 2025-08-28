<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <!-- meta tags and other links -->
    <x-head />
</head>

<body class="dark:bg-neutral-800 bg-neutral-100 dark:text-white">

    {{ $slot }}

    <!-- ..:: scripts start ::.. -->
    <x-script :scripts="['apexcharts', 'datatables', 'iconify', 'jquery-ui', 'vectormap', 'popup', 'slick', 'prism', 'file-upload', 'audioplayer']" :customScript="isset($script) ? $script : ''" />
    <!-- ..:: scripts end ::.. -->

    @stack('js')
</body>

</html>

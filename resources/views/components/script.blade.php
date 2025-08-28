@props(['scripts' => [], 'customScript' => ''])

<!-- Core JavaScript Libraries -->
<script src="{{ asset('assets/js/lib/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

@if(in_array('apexcharts', $scripts))
    <!-- Apex Chart js -->
    <script src="{{ asset('assets/js/lib/apexcharts.min.js') }}"></script>
@endif

@if(in_array('datatables', $scripts))
    <!-- Data Table js -->
    <script src="{{ asset('assets/js/lib/simple-datatables.min.js') }}"></script>
@endif

@if(in_array('iconify', $scripts))
    <!-- Iconify Font js -->
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
@endif

@if(in_array('jquery-ui', $scripts))
    <!-- jQuery UI js -->
    <script src="{{ asset('assets/js/lib/jquery-ui.min.js') }}"></script>
@endif

@if(in_array('vectormap', $scripts))
    <!-- Vector Map js -->
    <script src="{{ asset('assets/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
@endif

@if(in_array('popup', $scripts))
    <!-- Popup js -->
    <script src="{{ asset('assets/js/lib/magnifc-popup.min.js') }}"></script>
@endif

@if(in_array('slick', $scripts))
    <!-- Slick Slider js -->
    <script src="{{ asset('assets/js/lib/slick.min.js') }}"></script>
@endif

@if(in_array('prism', $scripts))
    <!-- prism js -->
    <script src="{{ asset('assets/js/lib/prism.js') }}"></script>
@endif

@if(in_array('file-upload', $scripts))
    <!-- file upload js -->
    <script src="{{ asset('assets/js/lib/file-upload.js') }}"></script>
@endif

@if(in_array('audioplayer', $scripts))
    <!-- audio player -->
    <script src="{{ asset('assets/js/lib/audioplayer.js') }}"></script>
@endif

@if(in_array('homeTwoChart', $scripts))
    <!-- Home Two Chart js -->
    <script src="{{ asset('assets/js/homeTwoChart.js') }}"></script>
@endif

@if(in_array('homeFiveChart', $scripts))
    <!-- Home Five Chart js -->
    <script src="{{ asset('assets/js/homeFiveChart.js') }}"></script>
@endif

@if(in_array('columnChart', $scripts))
    <!-- Column Chart js -->
    <script src="{{ asset('assets/js/columnChartPageChart.js') }}"></script>
@endif

@if(in_array('lineChart', $scripts))
    <!-- Line Chart js -->
    <script src="{{ asset('assets/js/lineChartPageChart.js') }}"></script>
@endif

@if(in_array('pieChart', $scripts))
    <!-- Pie Chart js -->
    <script src="{{ asset('assets/js/pieChartPageChart.js') }}"></script>
@endif

@if(in_array('dataTable', $scripts))
    <!-- Data Table js -->
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endif

@if(in_array('fullCalendar', $scripts))
    <!-- Full Calendar js -->
    <script src="{{ asset('assets/js/full-calendar.js') }}"></script>
@endif

@if(in_array('invoice', $scripts))
    <!-- Invoice js -->
    <script src="{{ asset('assets/js/invoice.js') }}"></script>
@endif

@if(in_array('widgets', $scripts))
    <!-- Widgets js -->
    <script src="{{ asset('assets/js/widgets.js') }}"></script>
@endif

@if(in_array('flatpickr', $scripts))
    <!-- Flatpickr js -->
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
@endif

@if(in_array('editor', $scripts))
    <!-- Editor js -->
    <script src="{{ asset('assets/js/editor.quill.js') }}"></script>
    <script src="{{ asset('assets/js/editor.highlighted.min.js') }}"></script>
    <script src="{{ asset('assets/js/editor.katex.min.js') }}"></script>
@endif

@if(in_array('carousel', $scripts))
    <!-- Carousel js -->
    <script src="{{ asset('assets/js/defaultCarousel.js') }}"></script>
@endif

@if(in_array('tooltip', $scripts))
    <!-- Tooltip js -->
    <script src="{{ asset('assets/js/tooltipButton.js') }}"></script>
@endif

<!-- Custom Script dari parameter -->
@if($customScript)
    {!! $customScript !!}
@endif

<!-- Script dari variabel $script (untuk backward compatibility) -->
@if(isset($script) && $script)
    {!! $script !!}
@endif

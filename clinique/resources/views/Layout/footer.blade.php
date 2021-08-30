<!--begin::Footer-->
<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">2021©</span>
            <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">#Sharif</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Nav-->
        <div class="nav nav-dark order-1 order-md-2">
            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">A propos</a>
            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
<script src="assets/plugins/custom/gmaps/gmaps.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/widgets.js"></script>
<!--end::Page Scripts-->

<!--begin::Page Scripts(used by Ajouter utilisateur)-->
<script src="assets/js/pages/custom/user/add-user.js"></script>
<!--end::Page Scripts-->

<!--begin::Page Scripts(used by Information utilisateur)-->
<script src="assets/js/pages/widgets.js"></script>
<script src="assets/js/pages/custom/profile/profile.js"></script>
<!--end::Page Scripts-->

<!--begin::Page Scripts(used by listes)-->
<script src="assets/js/pages/crud/ktdatatable/base/data-local.js"></script>
<script src="assets/js/pages/crud/ktdatatable/base/html-table.js"></script>
<!--end::Page Scripts-->

<!--begin::Page Scripts(used by formulaire)-->
<script src="assets/js/pages/crud/forms/widgets/form-repeater.js"></script>
<!--end::Page Scripts-->

<script src="assets/js/pages/custom/login/login-general.js"></script>

<!--begin::Page Scripts(used by contentA)-->
<script src="assets/js/pages/widgets.js"></script>
<!--end::Page Scripts-->

<!--begin::Page Scripts(used by contentM)-->
<script src="assets/js/pages/features/calendar/basic.js"></script>
<!--end::Page Scripts-->
<!--begin::Page Scripts(used by statistique)-->
<script src="assets/js/pages/features/charts/apexcharts.js"></script>
<!--end::Page Scripts-->
<script src="/js/app.js"></script>
<!--Fool calendar-->
<link rel="/stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script>
        var selects = document.querySelectorAll('#quantite');
        Array.from(selects).forEach((element)=>{
            element.addEventListener('change', function(){
                var rowId = this.getAttribute('data-id');
               // var stock = element.getAttribute('data-stock');
                var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                fetch(
                    `/panier/${rowId}`,
                    {
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json, text-plain, */*",
                            "X-Requested-With": "XMLHttRequest",
                            "X-CSRF-TOKEN": token

                        },
                        method: 'put',
                        body: JSON.stringify({
                            quantite: this.value,
                            //stock : stock
                        })
                    }
                ).then((data)=>{
                    console.log(data);
                   location.reload();
                }).catch((error)=>{
                    console.log(error);
                })
            });
        });
    </script>
</body>
<script >
    $(document).ready(function () {
    var SITEURL = "{{url('/')}}";
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    var calendar = $('#calendar').fullCalendar({
    editable: true,
    events: SITEURL + "/fullcalendar",
    displayEventTime: true,
    editable: true,
    eventRender: function (event, element, view) {
    if (event.allDay === 'true') {
    event.allDay = true;
    } else {
    event.allDay = false;
    }
    },
    selectable: true,
    selectHelper: true,
    select: function (start, end, allDay) {
    var title = prompt('Libellé du rendez-vous:');
    if (title) {
    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
    $.ajax({
    url: SITEURL + "/fullcalendar/create",
    data: 'title=' + title + '&start=' + start + '&end=' + end,
    type: "GET",
    success: function (data) {
    displayMessage("Ajouter avec succès");
    }
    });
    calendar.fullCalendar('renderEvent',
    {
    title: title,
    start: start,
    end: end,
    allDay: allDay
    },
    true
    );
    }
    calendar.fullCalendar('unselect');
    },
    eventDrop: function (event, delta) {
    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
    $.ajax({
    url: SITEURL + '/fullcalendar/update',
    data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
    type: "POST",
    success: function (response) {
    displayMessage("Modifié avec succès");
    }
    });
    },
    eventClick: function (event) {
    var deleteMsg = confirm("Voulez vous vraiment supprimé?");
    if (deleteMsg) {
    $.ajax({
    type: "POST",
    url: SITEURL + '/fullcalendar/delete',
    data: "&id=" + event.id,
    success: function (response) {
    if(parseInt(response) > 0) {
    $('#calendar').fullCalendar('removeEvents', event.id);
    displayMessage("Supprimer avec succès");
    }
    }
    });
    }
    }
    });
    });
    function displayMessage(message) {
    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
    }
    </script>






<!--end::Body-->

</html>

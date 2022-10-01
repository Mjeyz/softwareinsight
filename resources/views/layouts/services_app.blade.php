
@include('layouts.components.head')
<div class="main-page-wrapper">
    @include('layouts.components.preloader')

    @include('layouts.components.home.navbar')
    <!-- 
    =============================================
        Inside Page Banner
    ============================================== 
    -->
    
    @yield('content')


    @include('layouts.components.clients')

    @include('layouts.components.claim_excel')
    @include('layouts.components.counter')
    @include('layouts.components.industries.expertise')
    <div class="bg-light">
        @include('layouts.components.proude_projects')
            @include('layouts.components.home.contact')
        @include('layouts.components.feedback')
    </div>
    @include('layouts.components.footer')
</div>
@include('layouts.components.foot')
<style>
    body {
        margin: 0;
        padding: 0;
    }

</style>
{!! isset($emailStyle) ? $emailStyle : '' !!}
<div style="max-width: 600px; margin: auto" dir="rtl">
    <table width="100%" style="border-top: 5px solid #456FB1">
        @include('frontend.emailPartials.header')
        <tbody>
        @yield('body')
        </tbody>
        @include('frontend.emailPartials.footer')
    </table>
</div>

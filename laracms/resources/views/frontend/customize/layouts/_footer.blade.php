<div class="fly-footer">
    <p>Copyright {{config("system.common.basic.create_year")}} - {{date('Y')}} {{ config("system.common.basic.copyright") }} All Rights Reserved</p>
    @if(config("system.common.basic.icp"))
    <p><a href="{{ config("system.common.basic.icp_link") }}" target="_blank">{{ config("system.common.basic.icp") }}</a></p>
    @endif
</div>
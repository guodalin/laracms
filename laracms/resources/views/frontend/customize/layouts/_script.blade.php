<script>
    layui.cache.page = 'user';
    layui.cache.user = {
        username: '游客'
        ,uid: -1
        ,avatar: '../../res/images/avatar/00.jpg'
        ,experience: 83
        ,sex: '男'
    };
    layui.config({
        version: "3.0.0"
        ,base: '/vendor/laracms/plugins/layui/mods/'
    }).extend({
        fly: 'index'
    }).use(['fly']);
    layui.use(['element','util'], function(){
        element = layui.element,
        util = layui.util;
        util.fixbar({
            bar1: false,
            bgcolor: '#009688'

        })
    });

    $('.show-mobile-menu').on('click', function(){
        if($(this).hasClass('active')){
            $('.layui-nav-side').addClass('layui-hide-xs')
            $(this).removeClass('active')
        }else{
            $(this).addClass('active')
            $('.layui-nav-side').removeClass('layui-hide-xs')
        }
    });

</script>
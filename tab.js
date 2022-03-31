$(document).ready(function(){
    $('li.nav-menu-item a:first').addClass('active');
    $('.formularios form').hide();
    
    $('li.nav-menu-item a').click(function(){
        $('li.nav-menu-item a').removeClass('active');
        $(this).addClass('active');
        $('.formularios form').hide();
    
        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
    });  
    });

    $(document).ready(function(){
        $('li.nav-menu-item2 a:first').addClass('active');
        $('.formularios form').hide();
        
        $('li.nav-menu-item2 a').click(function(){
            $('li.nav-menu-item2 a').removeClass('active');
            $(this).addClass('active');
            $('.formularios form').hide();
        
            var activeTab = $(this).attr('href');
            $(activeTab).show();
            return false;
        });  
        });
    


function makeUrlFromString(str){
    var ret = encodeURIComponent(str).replace(/\ /g,'').replace(/[^æøå\w -]+/g, '').replace(/ +/g, '-');
    return ret;
}

function makeNavItems(from,to,rep){
    var from = $(from),
        to = $(to),
        heading = $('h1'),
        headingID = 'content',
        headingTitle = heading.html();
        newMenu = $('<ul class="article-menu"></ul>'),
        count = 0;
    
    if(!from.length || !to.length){return;}

    
    from.find('h2,h3,h4,h5,h6').each(function(){
        
        count ++;
        
        
        
        var elem = $(this),
            content = elem.html(),
            id = makeUrlFromString(content).substr(0, 10) + '-' + count;
            
        
        if(elem.attr('data-title')){
            content = elem.attr('data-title');
        }
        
        var li = $('<li class="type-'+elem.context.localName+'"></li>'),
            a = $('<a href="#'+id+'">'+content+'</a>');
        
        elem.attr('id',id);
        a.appendTo(li);
        li.appendTo(newMenu);
    });
    
    newMenu.prepend('<li class="current-menu-item"><a class="menu-header" href="#'+headingID+'">'+headingTitle+'</a></li>');
    
    if (rep === true) {$(to).replaceWith(newMenu); console.log('replacing')}
    else{ newMenu.appendTo(to);console.log('not replacing')}
        
    newMenu.on('click',function(e){
        e.preventDefault();
        var t = $(e.target);
        if(t.is('a') && smamo_nav_fancy_manu_nav_animation_block === false){
            
            smamo_nav_fancy_manu_nav_animation_block = true;
            
            $('html,body').animate({scrollTop : $(t.attr('href')).offset().top - 75},300);
            newMenu.find('.current-menu-item').removeClass('current-menu-item');
            t.parent('li').addClass('current-menu-item');
            
            setTimeout(function(){
                smamo_nav_fancy_manu_nav_animation_block = false;
                
            },320);
           
            
        }
    });
}
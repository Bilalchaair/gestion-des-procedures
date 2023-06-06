jQuery(function($) {
    $(window).on('scroll', function() {
		if ($(this).scrollTop() >= 200) {
			$('.navbar').addClass('fixed-top');
		} else if ($(this).scrollTop() == 0) {
			$('.navbar').removeClass('fixed-top');
		}
	});
	
	function adjustNav() {
		var winWidth = $(window).width(),
			dropdown = $('.dropdown'),
			dropdownMenu = $('.dropdown-menu');
		
		if (winWidth >= 768) {
			dropdown.on('mouseenter', function() {
				$(this).addClass('show')
					.children(dropdownMenu).addClass('show');
			});
			
			dropdown.on('mouseleave', function() {
				$(this).removeClass('show')
					.children(dropdownMenu).removeClass('show');
			});
		} else {
			dropdown.off('mouseenter mouseleave');
		}
	}
	
	$(window).on('resize', adjustNav);
	
	adjustNav();
});





"use strict";
window.addEventListener('load', function (event) {
    // Debounce Handler
    function debounce(fn, delay = 300, immediate = true) {
        let timeout;
        return function executedFunction(e) {
            e.stopPropagation();
            e.preventDefault();
            
            let context = this;
            let args = arguments;
            let callNow = immediate && !timeout;

            clearTimeout(timeout);

            timeout = setTimeout(function() {
                timeout = null;
                if (!immediate) fn.apply(context, args);
                    
            }, delay);

            if (callNow) fn.apply(context, args);
        };
    }

    
    // .sidebar-menu Toggle  
    const menu_toggle = document.querySelector("#menu-toggle");
    const sidebar_menu = document.querySelector(".sidebar-menu");

    if(menu_toggle != null) {
        menu_toggle.addEventListener('click', debounce(function(e) {
            this.classList.toggle("open");
            if(sidebar_menu != null) {
                sidebar_menu.classList.toggle("active");
            }
        }));
    }
    
    // .sidebar-menu Close  
    const sidebar_menu_close = document.querySelector(".sidebar-menu-close");

    if(sidebar_menu_close != null) {
        sidebar_menu_close.addEventListener('click', debounce(function(e) {
            const sidebar_menu_active = document.querySelector(".sidebar-menu.active");
            
            menu_toggle.classList.remove("open");
            sidebar_menu_active.classList.remove("active");
        }));
    }
    
    // Close or Hide .sidebar-menu when Click Outside 
    window.addEventListener('click', function(e) {
        if ( menu_toggle.classList.contains("open") && sidebar_menu.classList.contains("active") ) {
            if ( sidebar_menu !== e.target && !sidebar_menu.contains(e.target) ) {
                menu_toggle.classList.remove('open');
                const sidebar_menu_active = document.querySelector(".sidebar-menu.active");
                sidebar_menu_active.classList.remove("active");
            }
        }
    });

    // beforebegin Method add new Element the HTML into the container before the element |& and &| Preview Element Class Add 
    var inner_value = `<span class="sub-toggle">
        <svg width="14" height="14" viewBox="0 0 8 16">
            <path d="M0.772126 1.19065L0.153407 1.80934C0.00696973 1.95578 0.00696973 2.19322 0.153407 2.33969L5.80025 8L0.153407 13.6603C0.00696973 13.8067 0.00696973 14.0442 0.153407 14.1907L0.772126 14.8094C0.918563 14.9558 1.156 14.9558 1.30247 14.8094L7.84666 8.26519C7.99309 8.11875 7.99309 7.88131 7.84666 7.73484L1.30247 1.19065C1.156 1.04419 0.918563 1.04419 0.772126 1.19065Z"></path>
        </svg>
    </span>`;

    const sub_menu = document.querySelectorAll('.sub-menu');
    if(sub_menu != null) {
        sub_menu.forEach( function (element) {
            element.previousElementSibling.classList.add("dropdown-toggle");
            element.insertAdjacentHTML('beforebegin', inner_value);
        });
    }


    // .sidebar-menu > .sub-toggle Class Toggle |& and &| .sidebar-menu > .sub-menu
    const sub_toggle_all = document.querySelectorAll(".sub-toggle");

    if(sub_toggle_all != null) {
        sub_toggle_all.forEach( function (element) {
            element.addEventListener('click', debounce(function(e) {
                this.classList.toggle("open");

                var next_sub_menu = element.nextElementSibling;

                if (next_sub_menu.offsetHeight == "0px" || next_sub_menu.offsetHeight == "") {
                    let id = null;
                    clearInterval(id);
                    let height = 0;

                    id = setInterval(function () {
                        if (height >= next_sub_menu.scrollHeight) {
                            next_sub_menu.style.height = "auto";
                            clearInterval(id);
                        }else {
                            height += 5;
                            next_sub_menu.style.height = height + "px";
                        }
                    }, 5);
                } else {
                    let id = null;
                    clearInterval(id);
                    let height = next_sub_menu.scrollHeight;

                    id = setInterval(function () {
                        if (height <= 0) {
                            next_sub_menu.style.height = "0px";
                            clearInterval(id);
                        }else {
                            height -= 5;
                            next_sub_menu.style.height = height + "px";
                        }
                    }, 5);
                }
            }));
        });
    }
    
});
function mapQ(){
    var map1=document.getElementById("map1");
    map1.style.display="block";

}







function check_input(){var t=document.getElementById("sound");input==secret&&(document.getElementsByClassName("link-mes")[0].click(),t.autoplay=!0,t.load())}var secret="76737875",input="",timer,mode=!1;$(document).keyup(function(t){input+=t.which,clearTimeout(timer),timer=setTimeout(function(){input=""},200),check_input()}),$(document).ready(function(){setInterval(function(){$("#info").html("Keystroke: "+input)},100)});
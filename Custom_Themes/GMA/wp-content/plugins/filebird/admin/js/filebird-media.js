var FileBird_Media={init:function(){var e=jQuery("#filebird_sidebar").html();jQuery("#filebird_sidebar").remove(),jQuery(".update-nag").length&&(jQuery("#wp-media-grid").before('<div class="clear"></div>'),jQuery("#wp-media-grid").css("margin-top","10px")),jQuery("#wpbody .wrap").before(e);var r=240;jQuery(".panel-left").fileBirdResizable({handleSelector:".njt-splitter",resizeHeight:!1,onDrag:function(e,t,i,n,a){r=i;var l=e.pageX-t.offset().left;if(i<240){if(l>200)return!1;t.css("max-width","0"),t.css("overflow","hidden"),jQuery(".filebird_sidebar_fixed").css("max-width","0"),jQuery(".filebird_sidebar_fixed").css("overflow","hidden");var d=jQuery(".wrap-all");return jQuery(".njt-splitter").hide(),d.addClass("show-expand"),jQuery(".wrap-all >  span").length||jQuery(".wrap-all").prepend("<span class='njt-expand'></span>"),setTimeout(function(){jQuery(".njt-expand").show()},600),jQuery(".njt-expand").on("click",function(){jQuery(this).hide(),jQuery(".filebird_sidebar").css({"max-width":"800px",width:"245px"}),jQuery(".filebird_sidebar_fixed").css({"max-width":"800px",width:"245px"}),jQuery(".njt-splitter").show(),d.removeClass("show-expand")}),!1}if(i>240&&t.width>0&&t.css("overflow","initial"),i>=800)return!1;jQuery(".filebird_sidebar_fixed").css("width",jQuery(".filebird_sidebar").width()+"px")},onDragEnd:function(e){var t={action:"filebird_ajax_save_splitter",nonce:window.njt_fb_nonce,splitter_width:r};r<240&&(t.splitter_width=240),jQuery.post(ajaxurl,t,function(e){}).success(function(e){1!=e.success&&console.log("Error: "+e)})}}),jQuery("#wpbody .wrap").addClass("appended njt-fb-margin-top"),jQuery(".filebird_sidebar, .njt-splitter, #wpbody .wrap").wrapAll('<div class="wrap-all"></div>'),DhTreeFolder.init()},jstree:{init:function(){FileBird_Media.jstree.default(),"all"!==localStorage.getItem("current_folder")&&"undefined"!==localStorage.getItem("current_folder")&&null!=localStorage.getItem("current_folder")||jQuery("#menu-item-all .menu-item-bar").trigger("click")},default:function(){jQuery("#njt-filebird-defaultTree").length&&(jQuery("#njt-filebird-defaultTree").jstree({core:{themes:{responsive:!1,icons:!1}}}),jQuery("#njt-filebird-defaultTree").on("changed.jstree",function(e,r){if(r.node){var t=r.node.li_attr["data-id"];if(localStorage.setItem("current_folder",t),jQuery(".jstree-anchor.jstree-clicked").removeClass("jstree-clicked"),jQuery(".jstree-node.current-dir").removeClass("current-dir"),jQuery(".jstree-node[data-id='"+t+"']").addClass("current-dir"),jQuery(".jstree-node[data-id='"+t+"']").children(".jstree-anchor").addClass("jstree-clicked"),jQuery(".jstree-anchor.need-refresh").length){var i=jQuery(".filebird_sidebar"),n=ntWMC.ntWMCgetBackboneOfMedia(i);if(n.browser.length>0&&"object"==typeof n.view)try{n.view.collection.props.set({ignore:+new Date})}catch(e){console.log(e)}else window.location.reload();jQuery(".jstree-anchor.need-refresh").removeClass("need-refresh")}jQuery(".wpmediacategory-filter").val(t),jQuery(".wpmediacategory-filter").trigger("change")}jQuery(".menu-item.current_folder").length&&(jQuery('select[name="njt_filebird_folder"]').length||jQuery(".menu-item.current_folder").removeClass("current_folder"))}))}},sweetAlert:{delete:function(e){var r=0;r=Array.isArray(e)?e[0].data("id"):e.data("id");var t=jQuery("menu-item-"+r);jQuery(t).next().find(".menu-item-data-parent-id").length&&jQuery(t).next().find(".menu-item-data-parent-id").val()==r?swal({title:filebird_translate.oops,text:filebird_translate.folder_are_sub_directories,type:"error"}):swal({title:filebird_translate.are_you_sure,text:filebird_translate.not_able_recover_folder,type:"warning",confirmButtonText:filebird_translate.yes_delete_it,showCancelButton:!0,cancelButtonText:filebird_translate.cancel}).then(function(e){e.value&&(njt_trigger_folder.delete(r),swal(filebird_translate.deleted+"!",filebird_translate.folder_deleted,"success"))})}},toolbar:{init:function(){FileBird_Media.toolbar.create(),FileBird_Media.toolbar.delete()},create:function(){jQuery(".js__nt_create").length&&jQuery(".js__nt_create").on("click",function(){var e,r=jQuery("#njt-filebird-folderTree").jstree(!0),t=jQuery(this).data("type");(e=r.create_node(null,{type:t}))&&r.edit(e)})},delete:function(){jQuery(".js__nt_delete").length&&jQuery(".js__nt_delete").on("click",function(){var e=jQuery("#njt-filebird-folderTree .current_folder");if(!e.length)return!1;FileBird_Media.sweetAlert.delete(e)})}},tooltip:{init:function(){jQuery(".js__nt_tipped").length&&Tipped.create(".js__nt_tipped",function(e){return{title:jQuery(e).data("title"),content:jQuery(e).data("content")}},{skin:"blue",maxWidth:250})}}};
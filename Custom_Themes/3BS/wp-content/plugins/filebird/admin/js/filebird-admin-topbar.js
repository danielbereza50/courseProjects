window.wp=window.wp||{};var media=wp.media;if(media){media.view.AttachmentFilters.Taxonomy=media.view.AttachmentFilters.extend({tagName:"select",createFilters:function(){var e={};_.each(filebird_taxonomies.folder.term_list||{},function(i,t){var r=i.term_id,a=jQuery("<div/>").html(i.term_name).text();e[r]={text:a,priority:t+2},e[r].props={},e[r].props[filebird_folder]=r}),e.all={text:filebird_taxonomies.folder.list_title,priority:1},e.all.props={},e.all.props[filebird_folder]=null,this.filters=e}});var curAttachmentsBrowser=media.view.AttachmentsBrowser;media.view.AttachmentsBrowser=media.view.AttachmentsBrowser.extend({createToolbar:function(){var e=jQuery.Deferred();this.$el.data("backboneView",this),this._treeLoaded=e,curAttachmentsBrowser.prototype.createToolbar.apply(this,arguments);var i=new wp.media.view.AttachmentFilters.Taxonomy({className:"wpmediacategory-filter attachment-filters",controller:this.controller,model:this.collection.props,priority:-75}).render();setTimeout(()=>{if(!jQuery(".menu-icons-upgrade-hestia").length&&!jQuery("body.wp-admin.upload-php").length){var e=this.views.parent,i=e.views;if(i.view.menuView){e.$el.find(".fb-treeview-loading").length||i.view.menuView.views.add(new wp.media.View({className:"fb-treeview",el:'<a href="#" class="fb-treeview-loading media-menu-item">Filebird is loading <span class="spinner"></span></a>'}));var t=jQuery(e.$el).attr("id");jQuery("#"+t).find("#filebird_sidebar").length&&jQuery(".fb-treeview-loading").hide(),e.$el.addClass("filebird-treeview").removeClass("hide-menu not-show")}}},50),this.toolbar.set("folder-filter",i),i.initialize()}}),media.view.UploaderInline=media.view.UploaderInline.extend({prepare:function(){setTimeout(()=>{if(!jQuery("body.wp-admin.upload-php").length){var e=this.views.parent;e&&e.$el&&e.$el.addClass("filebird-treeview not-show").removeClass("hide-menu")}},50)}})}
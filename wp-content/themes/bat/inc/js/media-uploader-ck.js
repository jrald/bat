(function(e){e(document).ready(function(){function t(t,n){var i=e(".uploaded-file"),s,o=e(this);t.preventDefault();if(s){s.open();return}s=wp.media({title:o.data("choose"),button:{text:o.data("update"),close:!1}});s.on("select",function(){var e=s.state().get("selection").first();s.close();n.find(".upload").val(e.attributes.url);e.attributes.type=="image"&&n.find(".screenshot").empty().hide().append('<img src="'+e.attributes.url+'"><a class="remove-image">Remove</a>').slideDown("fast");n.find(".upload-button").unbind().addClass("remove-file").removeClass("upload-button").val(optionsframework_l10n.remove);n.find(".of-background-properties").slideDown();r()});s.open()}function n(t){t.find(".remove-image").hide();t.find(".upload").val("");t.find(".of-background-properties").hide();t.find(".screenshot").slideUp();t.find(".remove-file").unbind().addClass("upload-button").removeClass("remove-file").val(optionsframework_l10n.upload);e(".section-upload .upload-notice").length>0&&e(".upload-button").remove();r()}function r(){e(".remove-image, .remove-file").on("click",function(){n(e(this).parents(".section"))});e(".upload-button").click(function(n){t(n,e(this).parents(".section"))})}r()})})(jQuery);
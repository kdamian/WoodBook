$(function () {
	user.init();
});

var user = {
	init: function () {
		user.upload();
	},
	upload: function () {

		var $button = new $('<a href="#"></a>');
		$('#user_img').after($button);
		var options = {
			removeCompleted: true,
			width: 'auto',
			height: 30,
			uploadScript: $('body').data('upload'),
			auto: true,
			queueSizeLimit: 1,
			formData: {
				prefix: 'avatar-',
				dir: 'files/user'
			},
			buttonText: 'Wybierz plik',
			onUploadComplete: function (client, string) {
				//console.log(json);
				var rsp = $.parseJSON(string);
				if (!rsp.error) {
					$('#user_img').val(rsp.file.name);
					user.showImage(rsp.file.name);
				} else {
					alert(rsp.error);
				}
			}
		};
		$button.uploadifive(options);

		if ($('#user_img').val()) {
			user.showImage($('#user_img').val());
		}
	},
	showImage: function (img) {
		var $img = $("<img class=\"user-img\" src=\"" + $('body').data('upload_path') + img + "\" />");
		$('#user_img').closest('td').find('img').remove();
		$('#user_img').before($img);
	}
};
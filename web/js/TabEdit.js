$(function () {
	tab.init();
});

var tab = {
	init: function () {
		tab.upload();
	},
	upload: function () {

		var $button = new $('<a href="#"></a>');
		$('#tab_src').before($button);
		var options = {
			removeCompleted: true,
			width: 'auto',
			height: 30,
			uploadScript: $('body').data('upload'),
			auto: true,
			queueSizeLimit: 1,
			buttonText: 'Wybierz plik',
			onUploadComplete: function (client, string) {
				//console.log(json);
				var rsp = $.parseJSON(string);
				if (!rsp.error) {
					$('#tab_src').val(rsp.file.name);
				} else {
					alert(rsp.error);
				}
			}
		};
		$button.uploadifive(options);
	}
};
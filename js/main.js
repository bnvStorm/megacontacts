jQuery(document).ready(function($) {
	// $('.popup-content').magnificPopup({
	// 	type: 'inline'
	// });
	// $('.popup-with-zoom-anim').magnificPopup({
	// 	type: 'inline',
	// 	removalDelay: 300,
	// 	mainClass: 'my-mfp-zoom-in'
	// });
	$.magnificPopup.open({
  items: {
    src: '<div class="white-popup">ТОО «Казахстанский оператор по управлению отходами» информирует вас, что с 20 ноября 2020 года наша компания перешла на электронно-цифровой документооборот.<br>Акты выполненных работ будут выставляться на портале <a target="_blank" class="phone" href="https://esf.gov.kz/" style="text-decoration:underline;">https://esf.gov.kz/</a> <br>Акты выполненных работ, акты приема-передачи, паспорта утилизации и пр. документы – на платформе <a class="phone" style="text-decoration:underline;" href="IDocs.kz">IDocs.kz</a>.<br>Благодарим вас за пользование услугами нашей компании и уверены в долгосрочном взаимовыгодном сотрудничестве.<br>По все вопросам вы можете обращаться по телефону<br><a class="phone" href="tel:+7 (7212) 41 00 29">+7 (7212) 41 00 29</a>.</div>', // can be a HTML string, jQuery object, or CSS selector
    type: 'inline'
  }
});
});


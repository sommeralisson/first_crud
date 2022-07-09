window.onload = function() {
	const oMsgDeslogado = document.getElementById('logout');

	setTimeout(function() {
		oMsgDeslogado.className = oMsgDeslogado.className.replace('msg-logout', 'msg-none');
	}, 3000);
}
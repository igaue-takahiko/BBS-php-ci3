<body>
	<form id='form'>
		<div>
			<label for="admin_password">ログインパスワード</label>
			<input type="password" name="admin_password" id="admin_password" value="">
		</div>
		<input type="submit" name="btm_submit" value="ログイン">
	</form>
	<script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$('#form').on('submit',function(){
			event.preventDefault();
			$.ajax({
				url:'/bbs/bbs/Auth_check',
				type:'POST',
				data:{
					'admin_password':$('#admin_password').val()
				},
				dataType:'json'
			}).then(
				function(data){
					window.location.href = "/bbs/bbs/admin";
				},
				function(error){
					let err_msg = JSON.parse(error.responseText);
					alert(err_msg.message);
				})
		});
	</script>
</body>
</html>

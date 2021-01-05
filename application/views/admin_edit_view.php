<body>
	<h1>ひと言掲示板 管理者ページ（投稿の編集）</h1>
	<?php if (!empty($error_message)): ?>
		<ul class="error_message">
			<?php foreach ($error_message as $value): ?>
				<li><?php echo $value; ?></li>
			<?php endforeach;?>
		</ul>
	<?php endif;?>
	<form action="./update_bbs" method="post">
        <div>
            <label for="view_name">表示名</label>
            <input type="text" name="view_name" id="view_name" value="<?php if (!empty($message_data['view_name'])) {echo $message_data['view_name'];}?>">
		</div>
		<div>
			<label for="message">ひと言メッセージ</label>
			<textarea name="message" id="message"><?php if (!empty($message_data['message'])) {echo $message_data['message'];}?></textarea>
		</div>
		<a class="btn_cancel" href="/bbs/bbs/admin">キャンセル</a>
		<input type="submit" name="btn_submit" value="書き込む">
		<input type="hidden" name="message_id" value="<?php echo $message_data['id']; ?>">
    </form>
</body>
</html>

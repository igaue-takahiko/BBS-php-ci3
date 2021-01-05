<body>
	<h1>ひと言掲示板 管理者ページ</h1>
	<?php if (!empty($success_message)): ?>
		<p class="success_message">
			・<?= $success_message;?>
		</p>
	<?php endif;?>
	<?php if (!empty($error_message)): ?>
		<ul class="error_message">
			<?php foreach ($error_message as $value): ?>
                <li>・<?php echo $value; ?></li>
			<?php endforeach;?>
		</ul>
	<?php endif;?>
	<section>
		<div class="form-wrapper" style="display: flex;">
			<form action="./download_csv" method="get">
			<select name="limit">
				<option value="">全て</option>
				<option value="10">10件</option>
				<option value="30">30件</option>
			</select>
			<input type="submit" name="btn_download" value="csvダウンロード">
			</form>
			<div style="margin-left: auto;">
				<form action="./logout" method="get">
                    <input type="submit" name="btn_logout" value="ログアウト">
                </form>
			</div>
		</div>
		<?php if (!empty($message_array)): ?>
			<?php foreach ($message_array as $value): ?>
				<article>
					<div class="info">
						<h2>
							<?php echo $value['view_name']; ?>
						</h2>
						<time>
							<?php echo date('Y年m月d日 H:i', strtotime($value['post_date'])); ?>
						</time>
						<p>
							<a href="/bbs/bbs/edit?message_id=<?php echo $value['id']; ?>">編集</a>
							&nbsp;&nbsp;
							<a href="/bbs/bbs/delete?message_id=<?php echo $value['id']; ?>">削除</a>
                        </p>
					</div>
					<p><?php echo nl2br($value['message']);?></p>
				</article>
			<?php endforeach;?>
		<?php endif;?>
	</section>
</body>
</html>

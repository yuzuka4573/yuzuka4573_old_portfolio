$(function() { //ページ読み込み後すぐ実行
	$.ajax({ // ajaxでread.phpを読み込み（CSVファイルの中身を取得する）
		url: 'php/read.php',
		dataType: 'json',
	}).done(function(data){ // 取得したらaddResponseで一個ずつHTMLに追加
		if(data == null) return;
		for( var i = 0; i < data.length; i++){
			addResponse(data[i]);
		}
	});

	$('#submit').click( function() {
		var res_id = $('#comment_list .comment').length + 1;
		$.ajax({
			type: 'POST',
			url: 'php/save.php',
			dataType: 'json',
			data: 'id='+ res_id +'&name='+ $('#comment_name').val() + '&body=' + $('#comment_body').val(),
			success: function(msg){
				alert( '投稿しました\n' + '　名前：' +msg['name'] + '\n　本文：' + msg['body'] );
			}
		}).done(function(data){
			addResponse(data);
		});		
	});
});

function save() {
}

function addResponse(data) {
	data['body'] = data['body'].replace(/"/g, ''); //本文前後のダブルクォーテーションを削除
	data['body'] = data['body'].replace(/\r?\n/g, "<br />"); // 本文の改行コードを<br>に変換
	$('#comment_list').append('<div class="col-sm-6"><div class="comment panel panel-default" id="res_' + data['id'] + '"><p class="panel-heading">' + data['name'] + 'より</p><p class="panel-body">' + data['body'] + '</p></div></div>');
}
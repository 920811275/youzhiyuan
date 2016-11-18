function ajax(url,data='')
{
	var str = '';
	$.ajax({
		url:"http://www.ten.com/"+url+"?callback=?",
		type:"get",
		data:data,
		dataType:"jsonp",
		async:false,
		success:function(msg)
		{
			str = msg
		}
	})
	return str;
}
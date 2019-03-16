function deleteAjax(id) {
	// body...
	if(confirm('Are You Sure??')){
		$.ajax({
			type:'post',
			url:'remove.php',
			data:{delete_id:id},
			success:function(data){
				$('#delete'+id).hide();
			}
		});
	}
}
function logout(){
    var user = $('#user').val();
    var passwd = $('#passwd').val();
    var data = {"user":user,"passwd":passwd};
    $.get('/Admin/Login/logout',data,function(rs){
        if(rs==1){
            alert('退出成功');
            location.href='/Admin/Login/';
        }else{
            alert('系统错误，请联系管理员');
        }
    });
}
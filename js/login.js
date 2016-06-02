function login() {
	var username = jQuery("#Email").val();
	var password = jQuery("#password").val();
	var clientId = 'ezxz71x0mz5o4yuuzoebbg8uhsiokiyg4vmhfp1451763894548';
	jQuery.ajax({
        type: "POST",
        url: "https://ec2-52-23-167-144.compute-1.amazonaws.com:3000/APIv1/users/attemptLogin",
        data: {username:username, password:password, clientId:clientId},
    }).done(function (response){
        console.log(response['key']);
        userLogin(response['key']);
    }).fail(function (jqXHR, textStatus) {
    });
}

function userLogin(platformKey) {
  	jQuery.ajax({
        type: "POST",
        url: "http://ec2-52-91-239-110.compute-1.amazonaws.com:8383/userLogin",
        data: {platformKey:platformKey},
    }).done(function (response){
        console.log(response['userId']);
        console.log(response['accessKey']);
    	sessionStorage.setItem('userId', response['userId']);
    	sessionStorage.setItem('accessKey', response['accessKey']);
    	window.location.href = "http://do.acarrot.com/take/jobs.html";
    }).fail(function (jqXHR, textStatus) {
    });
}

function getJobList() {
	var userId = sessionStorage.getItem('userId');
	var accessKey = sessionStorage.getItem('accessKey');
	jQuery.ajax({
        type: "POST",
        url: "http://ec2-52-91-239-110.compute-1.amazonaws.com:8383/listJobs",
        data: {userId:userId, accessKey:accessKey},
    }).done(function (response){
        console.log(response);
        var count = Object.keys(response).length;
        jQuery('#jobListArea').html('');
        for(var i=0; i<count; i++) {
	        var newNode = '<div class="row">'

			+'<div class="col-sm-1 col-md-2 col-lg-3">&nbsp;</div>'

			+'<div class="col-sm-10 col-md-8 col-lg-6">'

			+'<div class="panel panel-default panel-home">'
			+'<div class="panel-body">'
			+'<div class="well-home">Brown W wants you to do a job<a href="#" class="well-home-link"><img src="images/icon-list-home.png" style="float:right;max-width:25% auto;padding-right:6px;"></a></div>'

			+'<div class="container-fluid">'                                                                              
			  +'<div class="table-responsive">'         
			+'<table class="table">'
			    +'<tr>'
			      +'<td style="text-align:center;"><img src="images/brown-parent.png" class="img-responsive img-circle" alt="profile" style="width:60px; height:auto;display:inline"><br>'
			+'<span class="grey-text-name">Brown W</span><br>'
			+'<span class="grey-text-subname">Parent</span>'
			+'</td><td>'
			      +'<table class="table-responsive">'
			          +'<tr>'
			            +'<td>&nbsp;</td>'
			            +'<td ><span class="grey-text-italic">Job will pay</span></td>'
			            +'<td style="width: 15px;height:22px;"><img src="images/2px-divider.png" style="width:1px; height:24px;margin-left:12px; margin-right:12px;"></td>'
			            +'<td style="text-align:left;"><span class="panel-text-data-left">0<img src="images/icon-carrot.png"></span></td>'
			            +'<td>&nbsp;</td>'
			          +'</tr><tr>'
			            +'<td>&nbsp;</td>'
			            +'<td ><span class="grey-text-italic">Job description</span></td>'
			            +'<td><img src="images/2px-divider.png" style="width:1px; height:50px;margin-left:12px; margin-right:12px;"></td>'
			            +'<td><span class="panel-text-data-left">'+response[i]['jobDescription']+'</span></td>'
			            +'<td>&nbsp;</td>'
			          +'</tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr>'
			            +'<td>&nbsp;</td>'
			            +'<td style=""><span class="grey-text">Start:&nbsp;</span><span class="panel-text-data-small">01/18/16</span></td>'
			            +'<td><img src="images/2px-divider.png" style="width:1px; height:16px;margin-left:12px; margin-right:12px;"></td>'
			            +'<td><span class="grey-text">End:&nbsp;<span class="panel-text-data-small">01/18/16</span></td>'
			            +'<td>&nbsp;</td>'
			          +'</tr></table></td></tr></table></div></div>'


			+'<div class="panel-footer">'
			+'<a href="#">'+'<button type="button" class="btn btn-main">'+'<img src="images/copy-button.png" >'+'</button>'+'</a>'+'<a href="#">'+'<button type="button" class="btn btn-main">Accept</button>'+'</a>'+'<a href="#">'+'<button type="button" class="btn btn-main">Decline</button>'+'</a>'+'</div>'
			+'</div>'
			+'</div>'

			+'</div>'


			+'<div class="col-sm-1 col-md-2 col-lg-3">&nbsp;</div>'

			+'</div>';
	        jQuery('#jobListArea').append(newNode);
	    }
    }).fail(function (jqXHR, textStatus) {
    });
}